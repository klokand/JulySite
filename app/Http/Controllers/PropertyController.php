<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PropertyController extends Controller {

	public function getPropertyDetail($id){
		return view('property');
	}
	public function listProperties(){
		return 'there are all the properties';
	}
	public function createProperty(){
		return view('admin.createProperty');
	}

}
