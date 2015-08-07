<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Validator;
use File;
use Response;
use App\Property;
use App\PropertyImage;
use Redirect;

class PropertyController extends Controller {

	public function getPropertyDetail($id){
		return view('property');
	}
	public function listProperties(){
		return view('admin.propertyList')->with(['pageName'=>'Property List']);
	}
	public function createProperty(){
		$id= Input::get('createUserId').time();
		return view('admin.createProperty')->with(['pageName'=>'Create Property','id'=>$id]);
	}
	public function PostCreateProperty(){
		$input = Input::all();
		$validation = Validator::make($input,Property::$create_rules);
		if($validation->passes()){
			$property = Property::find(Input::get('propertyId'));
			if ($property!=null)// Property has been existed
			{
				$property->name = Input::get('name');
				$property->type = Input::get('property_type');
				$property->address = Input::get('address');
				$property->price = Input::get('price');
				$property->bedNo = Input::get('bedNo');
				$property->bathNo = Input::get('bathNo');
				$property->garageCarNo = Input::get('garageCarNo');
				$property->landSize = Input::get('landSize');
				$property->buildingSize = Input::get('landSize');
				$property->floorPlan = Input::get('floorPlan');
				$property->summary = Input::get('summary');
				$property->description = Input::get('description');
				$property->featureList = Input::get('featureList');
				$property->createUserId= Input::get('createUserId');
				$property->save();
			
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
			'floorPlan'=>Input::get('floorPlan'),
			'summary'=>Input::get('summary'),
			'description'=>Input::get('description'),
			'featureList'=>Input::get('featureList'),
			'createUserId'=>Input::get('createUserId')
        ));
			}
			return Redirect::route('propertyList');
		}else{
			return Redirect::route('createProperty')
				->withInput(Input::except('password','re_password'))
				->with('error',$validation->errors()->first());
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
			}else{//the initial property image and set it as cover image
				Property::create(array(
					'id' => Input::get('propertyId'),
					'coverImage'=>$filename
				));
				PropertyImage::create(array(
					'property_id'=>Input::get('propertyId'),
					'image'=>$filename
				));
			}
        	return Response::json('success', 200);
			} else {
        	return Response::json('error', 400);
		}



        
	}

}
