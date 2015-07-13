<?php namespace Hawksmoor\Http\Middleware;

use Closure;
use Auth;

class NotBlocked {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if ( Auth::check() && Auth::user()->isBlocked() )
        {

            $accountStatus = 'Blocked';
            $message = 'Your account was blocked on ' . Auth::user()->blocked_on->format('D j M, Y');
            return view('users.account_status', compact('accountStatus', 'message'));

        }

        return $next($request);
	}

}
