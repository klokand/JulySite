<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Input;
use App\User;
use Sentry;
use Redirect;

class UserController extends Controller {

	public function getCreateUser(){
		return view('admin.createUser');
	}
	
	public function getLogin(){
		return view('admin.login');
	}
	public function postCreateUser(){
		$validation = Validator::make(Input::all(),User::$signup_rules);
		if($validation->passes()){
			try
{	
    // Create the user
    $user = Sentry::createUser(array(
        'email'       => Input::get('email'),
        'password'    => Input::get('password'),
		'first_name'  => Input::get('first_name'),
		'last_name'   => Input::get('last_name'),
        'activated'   => true,
    ));

    // Find the group using the group id
    $adminGroup = Sentry::findGroupByName(Input::get('user_type'));

    // Assign the group to the user
    $user->addGroup($adminGroup);
}catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
{
    echo 'Login field is required.';
}catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
{
    echo 'Password field is required.';
}catch (Cartalyst\Sentry\Users\UserExistsException $e)
{
    echo 'User with this login already exists.';
}catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
{
    echo 'Group was not found.';
}
			return Redirect::route('adminPanel')
		    	->with('success','You\'ve signed up and logged in successfully!');
		}else{
			return Redirect::route('createUser')
				->withInput(Input::except('password','re_password'))
				->with('error',$validation->errors()->first());
		}
	}
	
	
	public function postLogin(){
		$validation = Validator::make(Input::all(),User::$login_rules);
		 if($validation->passes()) {
		 // Login credentials
		$credentials = array(
        'email'    => Input::get('email'),
        'password' => Input::get('password'),
    );
			try{	// Authenticate the user
		$user=Sentry::authenticate($credentials, false);
		return Redirect::route('adminPanel')->with('success','You\'ve successfully logged in!');
	}catch (\Cartalyst\Sentry\Users\LoginRequiredException $e){
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','Login field is required.');	
	}catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e){	
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','Password field is required.');	
	}catch (\Cartalyst\Sentry\Users\WrongPasswordException $e){	
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','Wrong password, try again.');
	}catch (\Cartalyst\Sentry\Users\UserNotFoundException $e){
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','User was not found.');	
	}catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e){	
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','User is not activated.');	
	}

// The following is only required if the throttling is enabled
	catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e){	
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','User is suspended.');	
	}catch (Cartalyst\Sentry\Throttling\UserBannedException $e){	
		return Redirect::route('login')->withInput(Input::except('password'))->with('error','User is banned.');	
	}
  } else {
		return Redirect::route('login')
			->withInput(Input::except('password'))
			->with('error',$validation->errors()->first());	
		}
	}
	
	public function Logout(){
		Sentry::logout();
		return Redirect::route('login')
        ->with('success','You\'ve successfully logged out!');
	}
}
