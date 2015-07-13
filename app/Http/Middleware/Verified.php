<?php namespace Hawksmoor\Http\Middleware;

use Auth;
use Closure;

class Verified {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
	public function handle($request, Closure $next)
	{

        if ( Auth::check() && Auth::user()->isVerified())
        {
            return $next($request);
        }

        // $statusHeading = "Account Not Verified";
        // $statusIcon = "lock";
        // $statusMessage = 'Please check ' . Auth::user()->email . ' for a link.' . "\r\n" . "Your account will be verified on " . auth()->user()->verified_on;
        // return view('errors.account_not_verified', compact('statusHeading', 'statusIcon', 'statusMessage'));

        $email = auth()->user()->email;

        return view('errors.account_not_verified', compact('email'));
	}

}
