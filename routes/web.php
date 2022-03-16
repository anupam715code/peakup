<?php
use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/admin', function () {
    return redirect(url(config('constants.ADMIN_URL')));
});

Route::get('/', function () {
  return view('web.index');
});

Route::get('/web', function () {
    return redirect(url(env('APP_URL')));
});

Route::get('web/blog', function () {
    return view('web.blog');
});

Route::get('web/contact', function () {
   return view('web.contact');
});

Route::get('web/login', function () {
   return view('web.login');
});

Route::get('web/register', function () {
   return view('web.register');
});

/*
  |--------------------------By Anupam Singh---------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  | In Laravel 8 version if you are have not set the NAMESPACE which is auto disabled 
  | then need to follow the following syntex to define the route.

use App\Http\Controllers\Admin\UserController;

	Route::get('administrator', [UserController::class, 'login']);
	Route::get('administrator/logout', [UserController::class, 'logout']);
	Route::post('administrator/doLogin', [UserController::class, 'doLogin']);
*/

Route::get('administrator', array('uses' => 'Admin\UserController@login'));
Route::post('administrator/doRegister', array('uses' => 'Admin\UserController@register'));
Route::get('administrator/logout', array('uses' => 'Admin\UserController@logout'));
Route::post('administrator/doLogin', array('uses' => 'Admin\UserController@doLogin'));
Route::post('administrator/forgotPassword', array('uses' => 'Admin\UserController@forgotPassword'));

/*----------------------------By Anupam Singh------------------------------------------
	| To define the middelware you must need to add the index in routeMiddleware array
	| in Kernel.php located in app/Http directory.
--------------------------------------------------------------------------------------*/	 
Route::group(['middleware' => 'checkUserLogin', 'prefix' => config('constants.ADMIN_URL')], function () {
	
    Route::get('dashboard', array('uses' => 'Admin\UserController@dashboard'));
    Route::get('my-profile', array('uses' => 'Admin\UserController@myProfile'));
    Route::post('saveMyProfile', array('uses' => 'Admin\UserController@saveMyProfile'));
    Route::get('change-password', array('uses' => 'Admin\UserController@changePassword'));
    Route::post('saveChangePassword', array('uses' => 'Admin\UserController@saveChangePassword'));

    // User
	Route::get('add-user', array('uses' => 'Admin\UserController@addUser'));
	Route::post('save-user', array('uses' => 'Admin\UserController@saveUser'));
	Route::get('view-users', array('uses' => 'Admin\UserController@viewUsers'));
	Route::get('ajaxListUsers', array('uses' => 'Admin\UserController@ajaxListUsers'));
	Route::post('deleteUser', array('uses' => 'Admin\UserController@deleteUser'));
	Route::get('edit-user/{id?}', array('uses' => 'Admin\UserController@editUser'))->name('edit-user');
	Route::post('modifyUser', array('uses' => 'Admin\UserController@modifyUser'));
	Route::post('changeUserStatus', array('uses' => 'Admin\UserController@changeUserStatus'));
	
	// Meeting
	Route::get('listMeeting', array('uses' => 'Admin\MeetingController@listMeeting'));
	Route::get('ajaxListMeeting', array('uses' => 'Admin\MeetingController@ajaxListMeeting'));
	Route::get('addMeeting/{MeetingId?}', array('uses' => 'Admin\MeetingController@addMeeting'));
	Route::post('saveMeeting', array('uses' => 'Admin\MeetingController@saveMeeting'));
	Route::get('deleteMeeting', array('uses' => 'Admin\MeetingController@deleteMeeting'));
	Route::post('changeMeetingStatus', array('uses' => 'Admin\MeetingController@changeMeetingStatus'));


});


// Route::get('/phpinfo', function() {
//     phpinfo();
// });

// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     // return what you want
// });