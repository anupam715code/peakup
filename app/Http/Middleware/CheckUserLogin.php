<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckUserLogin {

    protected $except = [
        '/', 'doLogin'
    ];
    
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
  /*  public function handle($request, Closure $next) {
        
        $userData = $request->session()->all();
        //pr($userData);die;
        
        if ($request->session()->has('user_data') && @$userData['user_data']['user_type_id'] == 1) {
            return $next($request);
        }elseif($request->session()->has('user_data') && @$userData['user_data']['sub_contractors_id'] > 0){
			return $next($request);
		}        
        return redirect('/');
    }
	*/
	public function handle($request, Closure $next) {
        
        $userData = $request->session()->all();
                
        if ($request->is('administrator/*') && $request->session()->has('user_data')) {
            return $next($request);
        }
		/*elseif($request->is('subcontractor/*') && $request->session()->has('user_data') && @$userData['user_data']['sub_contractors_id'] > 0){
			return $next($request);
		}elseif($request->is('technician/*') && $request->session()->has('user_data') && @$userData['user_data']['technicians_id'] > 0){
            return $next($request);
        }else{
			if ($request->is('administrator/*')) {
				return redirect('/administrator');
			}elseif($request->is('subcontractor/*')){
                $ref = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
				return redirect('/subcontractor?ref='.$ref);
			}elseif($request->is('technician/*')){
                $ref = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
                return redirect('/technician?ref='.$ref);
            }*/
			else{
				return redirect('/');
			}
		}     
}
