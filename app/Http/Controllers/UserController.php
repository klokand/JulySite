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
		return view('admin.createUser')->with('pageName','Add Admin');
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
			return Redirect::route('listAdmin')
		    	->with('success','New Admin has been created successfully!');
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
	
	public function getAdminList(){
		$users = Sentry::findAllUsers();
		$AdminList="";
		$i=0;
		foreach($users as $user){
			$group = $user->getGroups();
			$link = url('updateAdmin/'.$user->id);
			if($user->activated==1){
				$activeted ="Yes";
			}else{
				$activated = "No";
			}
			$rowData = "<td>".$user->id."</td><td>".$user->email."</td><td>".$user->first_name."</td><td>".$user->last_name."</td><td>".$group[0]->name."</td><td>".$activeted."</td><td>".$user->created_at."</td><td>".$user->last_login."</td><td><a href=\"".$link."\" class=\"btn btn-primary\" role=\"button\">update</a></td>";
			if($i%2===0){
				$rowOutput = "<tr class=\"even\">".$rowData."</tr>";
			}else{
				$rowOutput = "<tr class=\"odd\">".$rowData."</tr>";
			}
			$AdminList = $AdminList.$rowOutput;
		}
		return view('admin.adminList')->with(['pageName'=>'All Administrators','AdminList'=>$AdminList]);
	}
	
	public function getUpdateAdmin($id){
		try
	{
    // Find the user using the user id
    $user = Sentry::findUserByID($id);
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
    echo 'User was not found.';
	}
		return view('admin.updateAdmin')->with(['user'=>$user,'pageName'=>'Update Admin']);
	}
}
