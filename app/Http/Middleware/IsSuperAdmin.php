<?php
/**
 * Created by PhpStorm.
 * User: SOKLIM
 * Date: 7/14/2019
 * Time: 12:45 PM
 */

namespace App\Http\Middleware;

use Closure;
use Auth;
class isSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if(auth()->check()) {
            if (!$user->isSuperAdmin()) {
                return redirect('/404error');
            } else {
                return $next($request);
            }
        }else{
            return redirect('/login');
        }

    }

}