<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Sentry;

class PageController extends Controller {

	public function getIndex(){
		return view('index');
	}
	
	public function getAdminPanel(){
	$user=Sentry::getUser();
	$admin = Sentry::findGroupByName('superAdmin');
	return view('admin.adminIndex')->with(['user'=>$user,'admin'=>$admin]);
	}
	
}
