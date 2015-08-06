<?php namespace App\Http\Middleware;

use Closure;
use Sentry;
use Redirect;

class SuperAdminCheck {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{	
		if(Sentry::check()) {
			if(Sentry::getUser()->hasAccess('createAdmin')){
				
			}else{
				return Redirect::route('adminPanel')->with('error','You need to log in first');
			}
		} else {
			return Redirect::route('login')->with('error','You need to log in first');
		}
		return $next($request);
	}

}
