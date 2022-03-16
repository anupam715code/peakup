<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class User_Model extends Model {
    
    protected $table;
    protected $tblTitle;
    protected $tblPermission;
    protected $tblPermissionType;
    protected $tblTitlePermission;
    protected $tblAppUser;
  
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
    
    //protected $connection = 'connection-name';
    
    protected $fillable = ['user_type',
							'username', 
							'email', 
							'name', 
							'phone', 
							'password', 
							'profile_image', 
							'age', 
							'gender', 
							'auto_accept_contact', 
							'status',
							'social_type',
							'social_id', 
							'token_id', 
							'created_at'];
    
    public function __construct()
    {
        $this->table = config('tables.tblUser');
        $this->tblTitle = config('tables.tblTitle');
        //$this->tblPermission = config('tables.tblPermission');
        //$this->tblPermissionType = config('tables.tblPermissionType');
        //$this->tblTitlePermission = config('tables.tblTitlePermission');
        //$this->tblAppUser = config('tables.tblAppUser');
    }
    
    /**
     * @package Admin
     * @class User_Model
     * @function checkLogin
     * @author Anupam Singh
     * @version 1.0
     * @description Get user details with social media data
     */
    public function checkLogin($username, $password)
    {
        $userdata  = DB::table($this->table . ' AS U')
                        ->selectRaw('U.*')
                        ->where('U.email', $username)
                        ->where('U.password', getPasswordHashed($password))
                        ->first();
        
  //       if(!empty($userdata->id)) 
		// {
		// 	$titleArr = $userdata->title_id; // added by anupam 
            
		// 	if(!empty($titleArr)) 
		// 	{
  //               // Get permissions
  //               $permissions = DB::table($this->tblTitlePermission . ' AS TP')
  //                               ->selectRaw('P.name AS permission_name, PT.name AS permission_type_name')
  //                               ->leftJoin($this->tblPermission. ' AS P', 'P.id', '=', 'TP.permission_id')
  //                               ->leftJoin($this->tblPermissionType. ' AS PT', 'PT.id', '=', 'TP.permission_type_id')
  //                               //->whereIn('TP.title_id', $titleArr) //old
		// 						->where('TP.title_id', $titleArr)//added by anupam
  //                               ->get();
                
  //               $permissionArr = array();
  //               foreach($permissions as $p) {
  //                   $permissionArr[$p->permission_name][] = $p->permission_type_name;
  //               }
  //               //pr($permissionArr);die;
                
  //               $userdata->permissions = $permissionArr;
  //           }
  //       }
        //pr($userdata);die;
	return $userdata;
    }

    /**
     * @package Admin
     * @class User_Model
     * @function emailExists
     * @author Anupam Singh
     * @version 1.0
     * @description Get user details with social media data
     */
    public function emailExists($username)
    {
		$userdata  = DB::table('admin_users')
						  ->where('email', $username)
						  ->first();	
		return $userdata;
    }
	
	 /**
     * @package Admin
     * @class User_Model
     * @function emailExists
     * @author Anupam Singh
     * @version 1.0
     * @description Get user details with social media data
     */
    public function getTitles()
    {
		$userdata  = DB::table($this->tblTitle)->where('title_id', '<>', 1)->first();	
		return $userdata;
    }
	
	/**
     * @package Admin
     * @class User_Model
     * @function emailExists
     * @author Anupam Singh
     * @version 1.0
     * @description Get user details with social media data
     */
    public function addUser()
    {
		$userdata  = DB::table($this->tblTitle)->where('title_id', '<>', 1)->first();	
		return $userdata;
    }
	
	 /*
     * @Class:           <User_Model>
     * @Function:        <getUserListDatatable>
     * @Author:          Anupam Singh
     * @Created On:      <03-09-2019>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <03-09-2019>
     * @Description:     <Get list of users except super admin>
     */

    public function getUserListDatatable($data) 
	{
        $page = !empty($data['pagination']['page']) ? $data['pagination']['page'] : 1;
        $perPage = !empty($data['pagination']['perpage']) ? $data['pagination']['perpage'] : 10;
        $start = (($page - 1) * $perPage);

        $query = $this->getUserListDatatableQuery($data);

        $query->offset($start);
        $query->limit($perPage);
        $items = $query->get();

        $totalRecords = $this->getUserListDatatableFilteredCount($data);
        $finalArray['meta'] = array(
            'page' => $page,
            'pages' => ceil($totalRecords / $perPage),
            'perpage' => (int) $perPage,
            'total' => (int) $totalRecords,
                //'sort' => 'desc',
                //'field' => 'health_tip_id'
        );
        $finalArray['data'] = $items;

        //pr(DB::getQueryLog());exit;
        //pr($items);exit;

        return $finalArray;
    }
	
	/*
     * @Class:           <User_Model>
     * @Function:        <getContactListDatatableQuery>
     * @Author:          Anupam Singh
     * @Created On:      <03-09-2019>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <03-09-2019>
     * @Description:     <Get list of users except super admin>
     */

     private function getUserListDatatableQuery($data) 
	 {
        $query = DB::table($this->table);
        $query->select(DB::raw('*'));
		$query->whereNull('deleted_at');
        $query->where('title_id','<>', 1);
        if (!empty($data['q'])) 
		{
            //$query->where('EA.user_id', $data['q']);
        }
        // filter by seach
        $generalSearch = (isset($data['query']['generalSearch']) ? $data['query']['generalSearch'] : '');
        if (!empty($generalSearch)) 
		{
            $columnSearch = array(
									'firstname', 
									'lastname', 
									'phone', 
									'created_at', 
									'email'
								  );

            $whereSql = '';
            foreach ($columnSearch as $item) {
                $whereSql .= $item . " LIKE '%" . $generalSearch . "%' OR ";
            }

            if (!empty($whereSql)) {
                $whereSql = '(' . rtrim($whereSql, ' OR ') . ')';
                $query->whereRaw($whereSql);
            }
        }
        // ORDER BY
        if (isset($data['sort']['field'])) {
            $query->orderBy($data['sort']['field'], $data['sort']['sort']);
        } else {
            $query->orderBy('firstname', 'ASC');
        }
        return $query;
    }
	
	/*
     * @Class:           <User_Model>
     * @Function:        <getUserListDatatableFilteredCount>
     * @Author:          Anupam Singh
     * @Created On:      <03-09-2019>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <03-09-2019>
     * @Description:     <>
     */

    function getUserListDatatableFilteredCount($data) {
        return $this->getUserListDatatableQuery($data)->count();
    }	
	
}
