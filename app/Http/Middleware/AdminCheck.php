<?php namespace App\Http\Middleware;

use Closure;
use Sentry;
use Redirect;

class AdminCheck {

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
			//is logged in
		} else {
			return Redirect::route('login')->with('error','You need to log in first');
		}
		return $next($request);
	}

}
