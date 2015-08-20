<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

	protected $fillable = array('id','name','type','address','price','state','bedNo','bathNo','garageCarNo','landSize','buildingSize','floorPlan','summary','pdf','description','featureList','createUserId','coverImage');

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
		'pdf' =>'sometimes|mimes:pdf|max:3000',
		'description' =>'required|min:2'
	);
	
	public function scopeAvailable($query){
		return $query->where('state','=','available');
	}
	public function scopeHomeLand($query){
		return $query->where('type','=','Home Land Package');
	}
	public function scopeDisplayhome($query){
		return $query->where('type','=','Display Home');
	}
	public function scopeOffplan($query){
		return $query->where('type','=','Off-the-plan');
	}
	public function scopeComplatedunits($query){
		return $query->where('type','=','Completed Units');
	}
	public function scopeSold($query){
		return $query->where('state','=','sold');
	}
	public function scopeTotal($query){
		return $query->where('state','!=','unavailable');
	}
	public function scopeUnsold($query){
		return $query->where('state','!=','sold');
	}

	

}
