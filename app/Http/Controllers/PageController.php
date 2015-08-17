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
use Image;
use Response;

class PageController extends Controller {

	public function getIndex(){
		$page = Page::find(1);
		return view('index')->with('page',$page);
	}
	public function getAboutUs(){
		$page = Page::find(1);
		return view('aboutUs')->with('page',$page);
	}
	public function getProperties(){
		$page = Page::find(1);
		return view('properties')->with('page',$page);
	}
	public function getNews(){
		$page = Page::find(1);
		return view('news')->with('page',$page);
	}
	public function getContactUs(){
		$page = Page::find(1);
		return view('contactUs')->with('page',$page);
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
		$page = Page::find(1);
		$input = Input::all();
		$validation = Validator::make($input,Page::$slider_rules);
		if($validation->passes()){
			$upload_success=false;
			if(Input::file('sliderImage1')==null and Input::file('sliderImage2')==null and Input::file('sliderImage3')==null){
				if(Input::get('sliderId')==1){
				$page->caption1 = Input::get('caption1');
				$page->slider1_link = Input::get('slider1_link');
				$page->save();
			}else if(Input::get('sliderId')==2){
				$page->caption2 = Input::get('caption2');
				$page->slider2_link = Input::get('slider2_link');
				$page->save();
			}else if(Input::get('sliderId')==3){
				$page->caption3 = Input::get('caption3');
				$page->slider3_link = Input::get('slider3_link');
				$page->save();
			}
				return Redirect::to('admin/indexSlider');
			}elseif(Input::get('sliderId')==1 and Input::file('sliderImage1')!=null){
				$image = Input::file('sliderImage1');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(\Config::get('image.slider_image_width'),\Config::get('image.slider_image_height'))->save(\Config::get('image.page_image').$filename);
			}else if(Input::get('sliderId')==2 and Input::file('sliderImage2')!=null){
				$image = Input::file('sliderImage2');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(\Config::get('image.slider_image_width'),\Config::get('image.slider_image_height'))->save(\Config::get('image.page_image').$filename);
			}else if(Input::get('sliderId')==3 and Input::file('sliderImage3')!=null){
				$image = Input::file('sliderImage3');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(\Config::get('image.slider_image_width'),\Config::get('image.slider_image_height'))->save(\Config::get('image.page_image').$filename);
			}
			if($upload_success) {
				if(Input::get('sliderId')==1){
				$page->sliderImage1=$filename;
				$page->caption1 = Input::get('caption1');
				$page->slider1_link = Input::get('slider1_link');
				$page->save();
				}else if(Input::get('sliderId')==2){
				$page->sliderImage2=$filename;
				$page->caption2 = Input::get('caption2');
				$page->slider2_link = Input::get('slider2_link');
				$page->save();
			
				}else if(Input::get('sliderId')==3){
				$page->sliderImage3=$filename;
				$page->caption3 = Input::get('caption3');
				$page->slider3_link = Input::get('slider3_link');
				$page->save();
			}
				return Redirect::to('admin/indexSlider');
			}else{
				return Redirect::to('admin/indexSlider')->withErrors('upload_fail');
			}
		}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/indexSlider')->withInput(Input::all())->with(compact('error'));
		}
	}
	public function getAdminProjects(){
		return view('admin.projects')->with('pageName','PageSetting-Projects');
	}
	public function getAdminloadableOffer(){
		$page = Page::find(1);
		return view('admin.loadableOffer')->with(['pageName'=>'PageSetting-LoadableOffer','page'=>$page]);	
	}
	public function postAdminloadableOffer(){
		$page = Page::find(1);
		$input = Input::all();
		$validation = Validator::make($input,Page::$download_offer_rules);
		if($validation->passes()){
			$upload_success=false;
			if (Input::hasFile('download_offer'))
			{
				$name = Input::file('download_offer')->getClientOriginalName();
				$extension = Input::file('download_offer')->getClientOriginalExtension();
				$upload_success=Input::file('download_offer')->move('uploads\pdf',$name);
			}
			if($upload_success){
				$page->download_offer =$name;
				$page->save();
				return Redirect::to('admin/loadableOffer');
			}else{
				return Redirect::to('admin/loadableOffer')->withErrors('upload_fail');
			}
		}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/loadableOffer')->with(compact('error'));
		}
	}
	
	public function getAdminteamMemebers(){
		$page = Page::find(1);
		return view('admin.teamMemebers')->with(['pageName'=>'PageSetting-Team Members','page'=>$page]);
	}
	public function postAdminteamMemebers(){
		$page = Page::find(1);
		$input = Input::all();
		if(Input::get('memberId')==1){
			$validation = Validator::make($input,Page::$team_member1_rules);
			if($validation->passes()){
				if(Input::hasFile('team_member1_image')){
					$page->team_member1_name= Input::get('team_member1_name');
					$page->team_member1_position= Input::get('team_member1_position');
					$page->team_member1_summary= Input::get('team_member1_summary');
					$image = Input::file('team_member1_image');
					$extension = $image->getClientOriginalExtension();
					$filename = sha1(time().time()).".{$extension}";
					\Image::make($image)->resize(\Config::get('image.member_image_width'),\Config::get('image.member_image_height'))->save(\Config::get('image.page_image').$filename);	
					$page->team_member1_image= $filename;
					$page->save();
				}else{
					$page->team_member1_name= Input::get('team_member1_name');
					$page->team_member1_position= Input::get('team_member1_position');
					$page->team_member1_summary= Input::get('team_member1_summary');
					$page->save();
				}
				return Redirect::to('admin/teamMembers');
			}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/teamMembers')->withInput(Input::all())->with(compact('error'));
			}
		}elseif(Input::get('memberId')==2){
			$validation = Validator::make($input,Page::$team_member2_rules);
			if($validation->passes()){
				if(Input::hasFile('team_member2_image')){
					$page->team_member2_name= Input::get('team_member2_name');
					$page->team_member2_position= Input::get('team_member2_position');
					$page->team_member2_summary= Input::get('team_member2_summary');
					$image = Input::file('team_member2_image');
					$extension = $image->getClientOriginalExtension();
					$filename = sha1(time().time()).".{$extension}";
					\Image::make($image)->resize(\Config::get('image.member_image_width'),\Config::get('image.member_image_height'))->save(\Config::get('image.page_image').$filename);	
					$page->team_member2_image= $filename;
					$page->save();
				}else{
					$page->team_member2_name= Input::get('team_member2_name');
					$page->team_member2_position= Input::get('team_member2_position');
					$page->team_member2_summary= Input::get('team_member2_summary');
					$page->save();
				}
				return Redirect::to('admin/teamMembers');
			}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/teamMembers')->withInput(Input::all())->with(compact('error'));
			}
		}
	}
	
	
	public function getQuote(){
		$page = Page::find(1);
		return view('admin.quote')->with(['pageName'=>'PageSetting-Quote','page'=>$page]);
	}
	
	public function postQuote(){
		$page = Page::find(1);
		$input = Input::all();
		$validation = Validator::make($input,Page::$quote_rules);
			if($validation->passes()){
				if(Input::hasFile('quote_image')){
					$image = Input::file('quote_image');
					$extension = $image->getClientOriginalExtension();
					$filename = "quote_image".".{$extension}";
					\Image::make($image)->resize(\Config::get('image.quote_image_width'),\Config::get('image.quote_image_height'))->save(\Config::get('image.page_image').$filename);	
					$page->quote_image= $filename;
					$page->quote= Input::get('quote');
					$page->quote_author= Input::get('quote_author');
					$page->save();
				return Redirect::to('admin/quote');
				}else{
				$page->quote= Input::get('quote');
				$page->quote_author= Input::get('quote_author');
				$page->save();
				return Redirect::to('admin/quote');
				}
			}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/quote')->withInput(Input::all())->with(compact('error'));
			}	
		
	}
	
	public function getPartnership(){
		return view('admin.partnership')->with('pageName','PageSetting-Partnership');
	}
	public function getContact(){
		$page = Page::find(1);
		return view('admin.contact')->with(['pageName'=>'PageSetting-Contact','page'=>$page]);
	}
	public function postContact(){
		$page = Page::find(1);
		$input = Input::all();
		$validation = Validator::make($input,Page::$contact_rules);
			if($validation->passes()){
				if(Input::hasFile('location_image')){
					$image = Input::file('location_image');
					$extension = $image->getClientOriginalExtension();
					$filename = sha1(time().time()).".{$extension}";
					\Image::make($image)->resize(\Config::get('image.contact_image_width'),\Config::get('image.contact_image_height'))->save(\Config::get('image.page_image').$filename);	
					$page->location_image= $filename;
					$page->location= Input::get('location');
					$page->telephone= Input::get('telephone');
					$page->email= Input::get('email');
					$page->save();
				return Redirect::to('admin/contact');
				}else{
				$page->location= Input::get('location');
					$page->telephone= Input::get('telephone');
					$page->email= Input::get('email');
					$page->save();
				return Redirect::to('admin/contact');
				}
			}else{
			$error = $validation->errors()->first();
			return Redirect::to('admin/contact')->withInput(Input::all())->with(compact('error'));
			}	
	}
	
	public function getAdminAboutUs(){
		$page = Page::find(1);
		return view('admin.aboutUs')->with(['pageName'=>'PageSetting-About Us','page'=>$page]);
	}
	public function getQueryEmail(){
		return view('admin.queryEmail')->with('pageName','PageSetting-Query Email');
	}
	public function postEditorImage(){
		$input = Input::all();
		$image = Input::file('file');
		$extension = $image->getClientOriginalExtension();
		$filename = sha1(time().time()).".{$extension}";
		\Image::make($image)->save(\Config::get('image.page_image').$filename);
        $link = "/uploads/page/".$filename;
		return response()->json(['success' => 200, 'link' => $link]);	
	}
	public function postSaveAboutUs(){
		$input = Input::all();
		$page = Page::find(1);
		$page->aboutus =Input::get('content');
		$page->save();
		return response()->json(['success' => 200]);
	}
		public function postSaveMission(){
		$input = Input::all();
		$page = Page::find(1);
		$page->mission =Input::get('content');
		$page->save();
		return response()->json(['success' => 200]);
	}
}
