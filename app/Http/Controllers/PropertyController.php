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
use App\Page;

class PropertyController extends Controller {

	public function getPropertyDetail($id){
		$page = Page::find(1);
		$property = Property::find($id);
		if ($property!=null){
			return view('propertyDetail')->with(['property'=>$property,'page'=>$page]);
			//return view('property');
		}else{
			return 'no property fund';
		}
		
	}
	public function listProperties($type){
		$page = Page::find(1);
		if($type=="Home Land Package"){
			$pageName = 'Home Land Package';
			$results = Property::available()->homeLand()->paginate(4);
		}elseif($type=="Display Home"){
			$pageName = 'Display Home';
			$results = Property::available()->displayhome()->paginate(4);
		}elseif($type=="Off-the-plan"){
			$pageName = 'Off-the-plan';
			$results = Property::available()->offplan()->paginate(4);
		}elseif($type=="Completed Units"){
			$pageName = 'Completed Units';
			$results = Property::available()->complatedunits()->paginate(4);
		}elseif($type=="Sold"){
			$pageName = 'All the sold properties';
			$results = Property::sold()->paginate(4);
		}elseif($type=="All"){
			$pageName = 'All the listed properties';
			$results = Property::total()->paginate(4);
		}
		
		return view('properties')->with(['properties'=>$results,'pageName'=>$pageName,'page'=>$page]);
	}
	
	public function listPropertiesTable(){
		$properties = Property::unsold()->get();
		$PropertiesList ="";
		$i=0;
		foreach($properties as $property){
			$i++;
			$link = url('property/edit/'.$property->id);
			$rowData = "<td>".$property->id."</td><td>".$property->name."</td><td>".$property->type."</td><td>".$property->address."</td><td>".$property->state."</td><td>".$property->price."</td><td>".$property->created_at."</td><td><a href=\"".$link."\" class=\"btn btn-primary\" role=\"button\">update</a></td>";
			if($i%2===0){
				$rowOutput = "<tr class=\"even\">".$rowData."</tr>";
			}else{
				$rowOutput = "<tr class=\"odd\">".$rowData."</tr>";
			}
			$PropertiesList = $PropertiesList.$rowOutput;
			
		}
		return view('admin.propertyList')->with(['pageName'=>'All Properties on the Market','PropertiesList'=>$PropertiesList]);
	}
	
	public function listSoldPropertiesTable(){
		$properties = Property::sold()->get();
		$PropertiesList ="";
		$i=0;
		foreach($properties as $property){
			$i++;
			$link = url('property/edit/'.$property->id);
			$rowData = "<td>".$property->id."</td><td>".$property->name."</td><td>".$property->type."</td><td>".$property->address."</td><td>".$property->state."</td><td>".$property->price."</td><td>".$property->created_at."</td><td><a href=\"".$link."\" class=\"btn btn-primary\" role=\"button\">update</a></td>";
			if($i%2===0){
				$rowOutput = "<tr class=\"even\">".$rowData."</tr>";
			}else{
				$rowOutput = "<tr class=\"odd\">".$rowData."</tr>";
			}
			$PropertiesList = $PropertiesList.$rowOutput;
			
		}
		return view('admin.propertyList')->with(['pageName'=>'All Sold Properties','PropertiesList'=>$PropertiesList]);
	}
	
	public function getUpdateProperty($id){
		$property = Property::find($id);
		if($property->state=='sold'){
			return Redirect::route('propertiesSoldTable');
		}else{
			$pageName ="Update Property Step1/2(Final)";
			return view('admin.editProperty')->with(compact('property','pageName'));
		}
	}
	
	public function postUpdateProperty(){
		$input = Input::all();
		$id = Input::get('propertyId');
		$validation = Validator::make($input,Property::$create_rules);
		if($validation->passes()){
			$property = Property::find($id);
			$property->name = Input::get('name');
			$property->state = Input::get('state');
			$property->type =Input::get('type');
			$property->address =Input::get('address');
			$property->price =Input::get('price');
			$property->bedNo =Input::get('bedNo');
			$property->bathNo =Input::get('bathNo');
			$property->garageCarNo =Input::get('garageCarNo');
			$property->landSize =Input::get('landSize');
			$property->buildingSize =Input::get('buildingSize');
			$property->description =Input::get('descriptionHTML');
			$property->createUserId =Input::get('createUserId');
			if (Input::hasFile('pdf'))
			{
				$name = Input::file('pdf')->getClientOriginalName();
				Input::file('pdf')->move(\Config::get('image.pdf_folder'),$name);
				$property->pdf = $name;
			}
			$property->save();
			return view('admin.createPropertyImages')->with(['pageName'=>'Update Property Step2/2(Final)','id'=>$id]);
			}else{
			$error = $validation->errors()->first();
			$oldId = Input::get('propertyId');
			return Redirect::action('PropertyController@createProperty')->withInput(Input::except('password','re_password'))->with(compact('error'));
		}
		
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
			if (Input::hasFile('pdf'))
			{
				$name = Input::file('pdf')->getClientOriginalName();
				Input::file('pdf')->move(\Config::get('image.pdf_folder'),$name);
			}
			Property::create(array(
			'id'=>Input::get('propertyId'),
            'name' => Input::get('name'),
			'type'=>Input::get('type'),
			'address'=>Input::get('address'),
			'price'=>Input::get('price'),
			'bedNo'=>Input::get('bedNo'),
			'bathNo'=>Input::get('bathNo'),
			'garageCarNo'=>Input::get('garageCarNo'),
			'landSize'=>Input::get('landSize'),
			'buildingSize'=>Input::get('buildingSize'),
			'description'=>Input::get('descriptionHTML'),
			'createUserId'=>Input::get('createUserId'),
			'pdf'=>$name
			));
			return view('admin.createPropertyImages')->with(['pageName'=>'Update Property Step2/2(Final)','id'=>$id]);
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
       // $directory = \Config::get('image.upload_folder');
        $filename = sha1(time().time()).".{$extension}";
		$upload_success=\Image::make($file)->resize(\Config::get('image.property_image_width'),\Config::get('image.property_image_height'))->save(\Config::get('image.property_image').'/'.$filename);
		$upload_thumb_success=\Image::make($file)->resize(\Config::get('image.thumb_width'),\Config::get('image.thumb_height'))->save(\Config::get('image.thumb_folder').'/'.$filename);
		
		//$upload_success=$file->move($directory, $filename);
		if( $upload_success and $upload_thumb_success ) {
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
	
	public function preloadPropertyImage($id){
		$images = PropertyImage::where('property_id','=',$id)->get();
		 $directory = \Config::get('image.property_image');
		$results =array();
		foreach($images as $image){
			$result['name']=$image->image;
			$result['size']=filesize($directory.'/'.$image->image);
			$results[]=$result;
		}
		return Response::json(['success'=>200,'results'=>$results]);
	}

	public function setCoverImage(){
		if(Request::ajax()){
		$propertyImage = PropertyImage::where('image','=',Input::get("name"))->first();
		$property = Property::where('id','=',$propertyImage->property_id)->first();
		$oldImage = $property->coverImage;
		$property->coverImage = Input::get("name");
		$property->save();
		$message = $property->id."cover image changed from".$oldImage." to ".$property->coverImage;
		return Response::json(['success'=>200,'message'=>$message]);
		}
	}

}
