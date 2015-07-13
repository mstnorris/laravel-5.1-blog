<?php namespace Hawksmoor\Http\Middleware;

use Closure;
use Auth;

class Active {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

        if ( Auth::check() && Auth::user()->isActive())
        {
            return $next($request);
        }

        // $statusHeading = "Account Not Active";
        // $statusIcon = "lock";
        // $statusMessage = 'Please call 01206 323 333 and we can look into this for you. Please have your email address: ' . Auth::user()->email . ' to hand.';
        // return view('errors.account_not_active', compact('statusHeading', 'statusIcon', 'statusMessage'));
        // Please call 01206 323 333 and we can look into this for you. Please have your email address: stevenorris@hawksmoorcs.co.uk to hand.

        $email = auth()->user()->email;

        return view('errors.account_not_active', compact('email'));

	}

}
