<?php

/*
 * Help URL: https://laracasts.com/discuss/channels/laravel/how-to-check-if-the-record-of-the-table-is-exist-using-middleware
 */

namespace App\Http\Middleware;

use Closure;

class checkUserToken {
    
    
    protected $except = [
        //
    ];
    
    
    public function handle($request, Closure $next) {
        
        echo $req->header();
        // Check User token
        /*$user = User::where('id_user', '=', Input::get('id'))->first();
        if ($user === null) {
            // user doesn't exist
        }*/
        return $next($request);
    }
}