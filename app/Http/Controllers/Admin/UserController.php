<?php
/**
 * UserController Class
 * @package Admin
 * @author Anupam Singh
 * @version 1.0
 * @description User controller
 * @link https://domain name/login
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\User_Model;

use DB;
use Session;
use Cookie;
use Helpers;

class UserController extends Controller {

    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <__construct>
     * @Description:     <this function load models>
     */
    public function __construct() {
        // $this->middleware('auth');
		
    }

    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <get_login>
     * @Description:     <this function get login to user>
     */
	public function login(Request $request){
		
		if($request->session()->has('user_data')){
			return redirect(url(config('constants.ADMIN_URL')).'/listMeeting');
		}		
		return view('admin.login');
	}


//Registratrion of users
  public function register(Request $request)
  {
      $usertype   = 2;
      $firstname  = $request->input('firstname');
      $lastname   = $request->input('lastname');
      $phone      = $request->input('phone');
      $email      = $request->input('email');   
      $password   = $request->input('password');    
      $repassword = $request->input('repassword');

      $valid_phone  = ['phone'=>$phone];
      $valid_email  = ['email'=>$email];
      $userCnt      = User_Model::where($valid_phone)->orWhere($valid_email)->count();
      if($userCnt == 0)
      {
        if($password === $repassword)
        {
          $pass  = getPasswordHashed($password);
          //echo $pass;die;
          $user_datais = [
                  'title_id'=>$usertype, 
                  'firstname'=>$firstname, 
                  'lastname'=>$lastname, 
                  'phone'=>$phone, 
                  'email'=>$email,
                  'password'=>$pass,
                  'status'=>1
                  ];
          //pr($user_datais);die;
            
          User_Model::insert($user_datais);
          return 1;
          //return view('admin.users.add-user');
        }else{
          return 2;//password and re-password not same
        }
      }else{
        return 3;//Already Exist
      }
    
  }
	
  public function doLogin(Request $request) 
	{
      $username = $request->input('email');
      $password = $request->input('password');

      $login = new User_Model();
      $userdata = $login->checkLogin($username, $password);
		  

      if ($userdata) 
      {
          $sessionData = (array) $userdata; // user row
          Session::put('user_data', $sessionData);

          // password remember
          if ($request->has('remember'))
          {
            $this->_manage_cookie($request, 14400); // set for 10 days
            //$value = Cookie::get('email');
            return 1;
          } 
          else 
          {
            Cookie::has('email');
            Cookie::queue(Cookie::forget('email'));
            Cookie::has('password');
            Cookie::queue(Cookie::forget('password'));
            Cookie::has('remember');
            Cookie::queue(Cookie::forget('remember'));
            //$this->_manage_cookie($request, -5); // remove set password
            return 1;
          }
      } else {
          return 0;
      }
  }

    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <logout>
     * @Description:     <this function load logout page>
     */
    public function logout() {
        Session::flush(); // removes all session data
        Session::forget('user_data'); // Removes a specific variable
        return redirect(url(config('constants.ADMIN_URL')));
    }

    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <forgot_password>
     * @Description:     <this function rest forgot password>
     */
    public function forgotPassword(Request $request) 
    {
        $username = $request->input('email');

        $email    = new User_Model();
        $userdata = $email->emailExists($username);

        //print_r($userdata);die;

        if (!empty($userdata)) 
        {
          $newPassword = 'Dial@'.rand(111, 999).'!';
          $hasPassword = getPasswordHashed($password);
          
          User_Model::where('id', $userdata->id)->update(array('password'=>$hasPassword));
          // echo $userdata->id;die;
          $mailData1 = array(
                              'email'    =>$username,
                              'password' => $newPassword,
                              'subject'  =>"Forgot Password"
                            );

          sendSMTPMail('mails.forgot-password', $mailData1);
          echo "1";
        } 
        else 
        {
            //return redirect('admin/dashboard');
                            //->with('email', $username);
            echo "2";
        }
    }


    public function fullCalendar() 
    {
      return view('admin.dashboard.fullcalendar');
    }
    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <index>
     * @Description:     <this function load login page>
     */
  public function dashboard() 
	{      
      $sessionData = session('user_data');
      if(empty($sessionData)){
          
          return redirect(config('constants.ADMIN_URL'));
      }
		//print_r($sessionData);
      $sessionData = session('user_data');
	    $googleinit ='initMapdashboard';
      return redirect(url(config('constants.ADMIN_URL')).'/listMeeting');
     // return view('admin.dashboard.dashboard', compact('googleinit'));
  }
    
    /**
    * @Author:          Anupam Singh
    * @Last modified:   <20-01-2022>
    * @Project:         <Admin>
    * @Function:        <myProfile>
    * @Description:     <this function load my profile>
    */
  public function myProfile(Request $request) 
	{
      $userId   = session('user_data')['id'];
      $userData = User_Model::find($userId);

      return view('admin.users.profile.profile_edit', compact('userData'));
  }

    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <saveMyProfile>
     * @Description:     <this function save my profile>
     */
  public function saveMyProfile(Request $request) {
        $requestdata = unsetData($request->all(), array('_token'));
        $requestdata['updated_at'] = date('Y-m-d H:i:s');
        //pr($requestdata);die;
        $userId = $request->id;
        User_Model::where('id', $userId)->update($requestdata);

        return redirect(config('constants.ADMIN_URL') . 'my-profile/')->with('success_msg', 'User updated successfully.');
  }
	
	/**
    * @Author:          Anupam Singh
    * @Last modified:   <20-01-2022>
    * @Project:         <Admin>
    * @Function:        <myProfile>
    * @Description:     <this function load Add user page>
  */
  public function addUser(Request $request) 
  {   
  		if(session('user_data')['title_id'] == 1)
  		{
  			//$userId = session('user_data')['id'];
  			$um     = new User_Model();
  			$titles = $um->getTitles();
  			//pr($userData);die;
  			return view('admin.users.add-user', compact('titles'));
  		}else{
  			return back()->with('error_msg', 'Oh snap! You don\'t have permission to add user.');
  		}
  }
	
	/**
    * @Author:          Anupam Singh
    * @Last modified:   <20-01-2022>
    * @Project:         <Admin>
    * @Function:        <myProfile>
    * @Description:     <this function load Add user page>
    **/
  public function saveUser(Request $request)
	{   
		if(session('user_data')['title_id'] == 1)
		{
			$usertype 	= $request->input('usertype');
			$firstname 	= $request->input('firstname');
			$lastname 	= $request->input('lastname');
			$phone 		= $request->input('phone');
			$email 		= $request->input('email');		
			$password 	= $request->input('password');		
			$repassword = $request->input('repassword');

			$valid_phone  = ['phone'=>$phone];
			$valid_email  = ['email'=>$email];
			$userCnt = User_Model::where($valid_phone)->orWhere($valid_email)->count();
			if($userCnt == 0)
			{
				if($password === $repassword)
				{
					$pass  = getPasswordHashed($password);
					//echo $pass;die;
					$user_datais = [
									'title_id'=>$usertype, 
									'firstname'=>$firstname, 
									'lastname'=>$lastname, 
									'phone'=>$phone, 
									'email'=>$email,
									'password'=>$pass,
									'status'=>1
									];
					//pr($user_datais);die;
						
					User_Model::insert($user_datais);
					return back()->with('success_msg', 'User added successfully!');
					//return view('admin.users.add-user');
				}else{
					return back()->with('error_msg', 'Oh snap! Password and Confirm Password Not Matched.');
				}
			}else{
				return back()->with('error_msg', 'Oh snap! Email-id or Phone Number is already exist');
			}
		}else{
			return back()->with('error_msg', 'Oh snap! You don\'t have permission to add user.');
		}
  }

    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <change_password>
     * @Description:     <this function load change password>
     */
    public function changePassword() {
        $data = array();
        //pr($data);die;
        return view('admin.users.profile.change_password', $data);
    }

    
    /**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <Admin>
     * @Function:        <save_change_password>
     * @Description:     <this function save changed password>
     */
  public function saveChangePassword(Request $request) 
	{
        //$dashboard = new DashboardModel();
        $opassword = $request->input('opassword');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');

        $user_data = Session::get('user_data');
        $userId = $user_data['id'];
        
        // check old password exist or not
        //DB::connection()->enableQueryLog();
        $pexist = User_Model::where(['id' => $userId, 'password' => getPasswordHashed($opassword)])->first();
        //pr(DB::getQueryLog());
        //pr($pexist);die;
        
        if (empty($pexist)) {
            return redirect(config('constants.ADMIN_URL') . 'change-password/')->with('success_msg', 'Oh snap! Old password Invalid.');
        }

        // check password and confirm passwor match
        if ($password != $cpassword) {
            
            return redirect(config('constants.ADMIN_URL') . 'change-password/')->with('success_msg', 'Oh snap! Password and Confirm Password not match.');
            
        } else {

            User_Model::where(['id' => $userId])->update(['password' => getPasswordHashed($password)]);
            return redirect(config('constants.ADMIN_URL') . 'change-password/')->with('success_msg', 'Password updated successfully.');
        }
    }
    

    // manage cookie (set or destroy)
    protected function _manage_cookie($request, $minutes) 
    {
        // $response = new Response('cookie');
        // $response->withCookie(cookie('email', $request->input('email'), $minutes));
        // $response->withCookie(cookie('password', $request->input('password'), $minutes));
        // $response->withCookie(cookie('remember', $request->input('remember'), $minutes));
        //pr($_COOKIE['email']);die;

        Cookie::queue(Cookie::make('email', $request->input('email'), $minutes));
        Cookie::queue(Cookie::make('password', $request->input('password'), $minutes));
        Cookie::queue(Cookie::make('remember', $request->input('remember'), $minutes));

       // return $response;
    }
	
	function testsignalone(){
		$user_data = Session::get('user_data');
        $userId = $user_data['id'];
      
		dd(oneSignalSendMessage($userId, 'testing success'));
	}
	
	/**
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Project:         <GET>
     * @Function:        <save_change_password>
     * @Description:     <this function get list of sub-admin users>
  */
	public function ajaxListUsers(Request $request){
		    $usrMdl   = new User_Model();
        $listData = $usrMdl->getUserListDatatable($request->all());
		
        return response()->json($listData);
    }
	
	/**
    * @Author:          Anupam Singh
    * @Last modified:   <20-01-2022>
    * @Project:         <GET>
    * @Function:        <myProfile>
    * @Description:     <this function load View user page>
    */
    public function viewUsers(Request $request) {
		//echo "asdfasdf";die;
		return view('admin.users.view-user');
    }
	
	
    /*
     * @Class:           <userController>
     * @Function:        <deleteUser>
     * @Author:          Anupam Singh
     * @Created On:      <20-01-2022>
     * @Last Modified:   <20-01-2022>
     * @Description:     <>
     */
  public function deleteUser(Request $request) 
	{
        $uId = $request->id;

        $resource = User_Model::find($uId);
        $resource->delete();

        //Contacts_Model::where('contact_id', $contactId)->delete();
  }
	
	/*
     * @Class:           <userController>
     * @Function:        <editUser>
     * @Author:          Anupam Singh
     * @Created On:      <20-01-2022>
     * @Last Modified:   <20-01-2022>
     * @Description:     <Function To load edit page of user>
  */
	public function editUser(Request $request, $contactId = NULL) 
	{
		if(session('user_data')['title_id'] == 1)
		{
			$um     = new User_Model();
			$titles = $um->getTitles();
			
			$userData = User_Model::find($contactId);
			
			return view('admin.users.edit-user', compact('titles', 'userData'));
		}else{
			return back()->with('error_msg', 'Oh snap! You don\'t have permission to Change User user.');
		}
        //return view('admin.contact.edit', compact('contactData'));
  }
	
	/*
     * @Class:           <userController>
     * @Function:        <modifyUser>
     * @Author:          Anupam Singh
     * @Created On:      <20-01-2022>
     * @Last Modified:   <20-01-2022>
     * @Description:     <Function To load edit page of user>
  */
	public function modifyUser(Request $request) 
	{
		if(session('user_data')['title_id'] == 1)
		{
			//pr($request->input('firstname'));die;
			$userid 	  = $request->input('userid');
			$usertype 	= $request->input('usertype');
			$firstname 	= $request->input('firstname');
			$lastname 	= $request->input('lastname');
			$phone 		  = $request->input('phone');
			$email 		  = $request->input('email');		
			$password 	= $request->input('password');		
			$repassword = $request->input('repassword');

			//$valid_phone  = ['phone'=>$phone];
			///$valid_email  = ['email'=>$email];
			$phoneCnt = User_Model::where('id','<>',$userid)->where('phone', $phone)->count();
			$emailCnt = User_Model::where('id','<>',$userid)->where('email', $email)->count();
								
			if($phoneCnt == 0 && $emailCnt == 0)
			{
				if(!empty($password) && !empty($repassword))
				{
					if($password === $repassword)
					{
						$pass  = getPasswordHashed($password);
						$user_datais = [
										'title_id'=>$usertype, 
										'firstname'=>$firstname, 
										'lastname'=>$lastname, 
										'phone'=>$phone, 
										'email'=>$email,
										'password'=>$pass
										];
					}else{
						return back()->with('error_msg', 'Oh snap! Password and Confirm Password Not Matched.');
					}
				}else{
						//$pass  = getPasswordHashed($password);
						$user_datais = [
										'title_id'=>$usertype, 
										'firstname'=>$firstname, 
										'lastname'=>$lastname, 
										'phone'=>$phone, 
										'email'=>$email
										];
					}
					//pr($user_datais);die;
					User_Model::where('id', $userid)->update($user_datais);
					return back()->with('success_msg', 'User added successfully!');
			}else{
				return back()->with('error_msg', 'Oh snap! Email-id or Phone Number is already exist');
			}
		}else{
			return back()->with('error_msg', 'Oh snap! You don\'t have permission to Change user.');
		}
  }
	
 /*
     * @Author:          Anupam Singh
     * @Last modified:   <20-01-2022>
     * @Class:           <UserController>
     * @Function:        <changeUserStatus>
     * @Description:     <To Active and inactive the user>
  */
  public function changeUserStatus(Request $request)
  {
    $UId = $request->id;
        
    $userData = User_Model::find($UId);
    $userData['status'] = ($userData['status'] == 1) ? 0 : 1;
    $userData->save();     
  }	

}

/* End of file UserController.php */
/* Location: ./app/Http/Controllers/Admin/UserController.php */
