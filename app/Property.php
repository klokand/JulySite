<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

	protected $fillable = array('id','name','type','address','price','state','bedNo','bathNo','garageCarNo','landSize','buildingSize','floorPlan','summary','description','featureList','createUserId','coverImage');

	public function propertyImages(){
		return $this->hasMany('App\PropertyImage');
	}
	
	public static $create_rules = array(
		'name'	        => 'required|min:2',
		'type'	=> 'required|in:House,Unit,Land,Apartment,Town House,Home Land Package,Display Home,Off-the-plan,Completed Units',
		'address'		=> 'required|min:2',
		'price'		=> 'required|min:2',
		'bedNo'	=> 'required|digits:1',
		'bathNo'	=> 'required|digits:1',
		'garageCarNo'	=> 'required|digits:1',
		'landSize'	=> 'required|min:1',
		'buildingSize'	=> 'required|min:1',
		'description' =>'required|min:2'
	);
	

}
