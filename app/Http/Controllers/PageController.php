<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Sentry;
use App\Property;
use App\News;

class PageController extends Controller {

	public function getIndex(){
		return view('index');
	}
	public function getAboutUs(){
		return view('aboutUs');
	}
	public function getProperties(){
		return view('properties');
	}
	public function getNews(){
		return view('news');
	}
	public function getContactUs(){
		return view('contactUs');
	}
	
	public function getAdminPanel(){
		$pageName ='Dashboard';
		$users = Sentry::findAllUsers();
		$newUsers = new Collection($users);
		$userNumber = $newUsers->count();
		$propertyNumber = Property::all()->count();
		$soldPropertyNumber = Property::where('state','=','sold')->count();
		$newsNumber = News::all()->count();
		return view('admin.adminIndex')->with(compact('pageName','userNumber','propertyNumber','soldPropertyNumber','newsNumber'));
	}
	
}
