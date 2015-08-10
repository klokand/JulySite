<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Validator;
use File;
use Response;
use Request;
use App\Property;
use App\PropertyImage;
use Redirect;

class PropertyController extends Controller {

	public function getPropertyDetail($id){
		$property = Property::find($id);
		if ($property!=null){
			return view('propertyDetail')->with('property',$property);
			//return view('property');
		}else{
			return 'no property fund';
		}
		
	}
	public function listProperties($type){
		$results = Property::where('state', '=' , 'available')->get();
		if($type=="Home Land Package"){
			$results = Property::where('type','=','Home Land Package')->paginate(4);
		}elseif($type=="Display Home"){
			$results = Property::where('type','=','Display Home')->paginate(4);
		}elseif($type=="Off-the-plan"){
			$results = Property::where('type','=','Off-the-plan')->paginate(4);
		}elseif($type=="Completed Units"){
			$results = Property::where('type','=','Completed Units')->paginate(4);
		}elseif($type=="Sold"){
			$results = Property::where('state','=','sold')->paginate(4);
		}elseif($type=="All"){
			$results = Property::paginate(4);
		}
		//$properties = Property::where('state', '=' , 'available')->paginate(4);
		return view('properties')->with('properties',$results);
	}
	
	public function listPropertiesTable(){
		$properties = Property::all();
		$PropertiesList ="";
		$i=0;
		foreach($properties as $property){
			$i++;
			$link = url('updateProperty/'.$property->id);
			$rowData = "<td>".$property->id."</td><td>".$property->name."</td><td>".$property->type."</td><td>".$property->address."</td><td>".$property->state."</td><td>".$property->price."</td><td>".$property->created_at."</td><td><a href=\"".$link."\" class=\"btn btn-primary\" role=\"button\">update</a></td>";
			if($i%2===0){
				$rowOutput = "<tr class=\"even\">".$rowData."</tr>";
			}else{
				$rowOutput = "<tr class=\"odd\">".$rowData."</tr>";
			}
			$PropertiesList = $PropertiesList.$rowOutput;
			
		}
		return view('admin.propertyList')->with(['pageName'=>'All the Properties','PropertiesList'=>$PropertiesList]);
	}
	public function createProperty(){
			$id= ''.time();
		return view('admin.createProperty')->with(['pageName'=>'Create Property Step1/2','id'=>$id]);
	}
	
	public function PostCreateProperty(){
		$input = Input::all();
		$id = Input::get('propertyId');
		$validation = Validator::make($input,Property::$create_rules);
		if($validation->passes()){
			$property = Property::find($id);
			if ($property!=null)// Property has been existed
			{
				if($property->state=='step1'){
					return view('admin.createPropertyImages')->with(['pageName'=>'Create Property Step2/2(Final)','id'=>$id]);
				}else if($property->state=='available'){
					return Redirect::route('propertiesTable');
				}
			}else{
			Property::create(array(
			'id'=>Input::get('propertyId'),
            'name' => Input::get('name'),
			'type'=>Input::get('property_type'),
			'address'=>Input::get('address'),
			'price'=>Input::get('price'),
			'bedNo'=>Input::get('bedNo'),
			'bathNo'=>Input::get('bathNo'),
			'garageCarNo'=>Input::get('garageCarNo'),
			'landSize'=>Input::get('landSize'),
			'buildingSize'=>Input::get('landSize'),
			'description'=>Input::get('descriptionHTML'),
			'createUserId'=>Input::get('createUserId')
			));
			return view('admin.createPropertyImages')->with(['pageName'=>'Create Property Step2/2(Final)','id'=>$id]);
			}
			}else{
			$error = $validation->errors()->first();
			$oldId = Input::get('propertyId');
			return Redirect::action('PropertyController@createProperty')->withInput(Input::except('password','re_password'))->with(compact('error'));
		}
		
	}
	public function uploadPropertyImage(){
		$input = Input::all();
		$rules = array(
		    'file' => 'image|max:3000',
		);

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
			return Response::make($validation->errors->first(), 400);
		}

		$file = Input::file('file');
		$extension = $file->getClientOriginalExtension();
        $directory = \Config::get('image.upload_folder');
        $filename = sha1(time().time()).".{$extension}";
		$upload_success=\Image::make($file)->resize(\Config::get('image.property_image_width'),\Config::get('image.property_image_height'))->save(\Config::get('image.property_image').'/'.$filename);
		
		//$upload_success=$file->move($directory, $filename);
		if( $upload_success ) {
			$property = Property::find(Input::get('propertyId'));
			if ($property!=null)//not the first property images
			{
				PropertyImage::create(array(
					'property_id'=>Input::get('propertyId'),
					'image'=>$filename
				));
				$property->coverImage =$filename;
				$property->state = "available";
				$property->save();
			}
        	return Response::json(['success'=>200,'fileName'=>$filename]);
			} else {
        	return Response::json('error', 400);
		}
	}
	
	public function deletePropertyImage(){
		if(Request::ajax()){
		 $propertyImage = PropertyImage::where('image','=',Input::get("name"));
		 $propertyImage->delete();
		return Response::json(['success'=> 200,'message'=>Input::get("name")]); ;
		}
	}

}
