<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Sentry;
use App\Property;
use App\News;
use Input;
use Validator;
use App\Page;
use Redirect;

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
	public function getAdminIndexSlider(){
		$page = Page::find(1);
		return view('admin.indexSlider')->with(['pageName'=>'PageSetting-Slider','page'=>$page]);
	}
	
	
	public function postAdminIndexSlider(){
		$input = Input::all();
		$validation = Validator::make($input,Page::$slider_rules);
		if($validation->passes()){
			$page = Page::find(1);
			if(Input::get('sliderId')==1){
				$page->sliderImage1=Input::get('sliderImage1');
				$page->caption1 = Input::get('caption1');
				$page->slider1_link = Input::get('slider1_link');
			}else if(Input::get('sliderId')==2){
			
			}else if(Input::get('sliderId')==3){
			
			}
			return Redirect::to('admin/indexSlider');
		
		}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/indexSlider')->withInput(Input::all())->with(compact('error'));
		}
	}
	public function getAdminProjects(){
		return view('admin.projects')->with('pageName','PageSetting-Projects');
	}
	public function getAdminloadableOffer(){
		return view('admin.loadableOffer')->with('pageName','PageSetting-LoadableOffer');
	}
	public function getAdminteamMemebers(){
		return view('admin.teamMemebers')->with('pageName','PageSetting-Team Members');
	}
	public function getQuote(){
		return view('admin.quote')->with('pageName','PageSetting-Quote');
	}
	public function getPartnership(){
		return view('admin.partnership')->with('pageName','PageSetting-Partnership');
	}
	public function getContact(){
		return view('admin.contact')->with('pageName','PageSetting-Contact');
	}
	public function getAdminAboutUs(){
		return view('admin.aboutUs')->with('pageName','PageSetting-About Us');
	}
	public function getQueryEmail(){
		return view('admin.queryEmail')->with('pageName','PageSetting-Query Email');
	}
	
}
