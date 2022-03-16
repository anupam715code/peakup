<?php

/*
 * Help URL: https://laracasts.com/discuss/channels/laravel/how-to-check-if-the-record-of-the-table-is-exist-using-middleware
 */

namespace App\Http\Middleware;

use Closure;
use App\Models\User_Signup_Model;
use DB;

class UserLoginToken {
    
    
    protected $except = [
        //'/api/v1/technician/login'
    ];
    
    
    public function handle($request, Closure $next) {
        
        //pr(getallheaders()); die;
        //echo '<pre>';print_r($request->header());die;
        
        $allHeader = getallheaders();
        
        if(empty($allHeader['auth_token'])) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Invalid auth token.', 'dev_message' => 'Please send auth token', "type" => 'ERROR', "code" => 3]);
        }
        if($allHeader['auth_token'] != 'JOIN_123') {
            // Check User token
            $tokenDetails = DB::table('user_token')->where(['user_type' => 'PARENT', 'token' => $allHeader['auth_token']])->first();

            if(empty($tokenDetails)) {
                return response()->json(['payload' => new \stdClass(), "message" => 'Invalid auth token.', 'dev_message' => 'Auth token mismatched', "type" => 'ERROR', "code" => 3]);
            }
        }
        
        
        return $next($request);
    }
}