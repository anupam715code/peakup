<?php

/**
 * Meeting_Model Class
 *
 * @package Meeting_Model
 * @author Anupam Singh
 * @version 1.0
 * @description Meeting Model
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Meeting_Model extends Model {

    use SoftDeletes;

    protected $table;
   // protected $primaryKey = 'country_id';
    public $timestamps = true;
    //const CREATED_AT = '';
    //const UPDATED_AT = '';
    //protected $dates = ['deleted_at'];

    protected $fillable = [];

    /*
     * @Class:           <Meeting_Model>
     * @Function:        <__construct>
     * @Author:          Anupam Singh
     * @Created On:      <24-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <24-01-2022>
     * @Description:     <>
     */

    public function __construct() {
        $this->table = config('tables.tblMeeting');
    }

    // SITE AJAX LIST
    /*
     * @Class:           <Meeting_Model>
     * @Function:        <getMeetingListDatatableQuery>
     * @Author:          Anupam Singh
     * @Created On:      <24-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <24-01-2022>
     * @Description:     <>
     */

    private function getMeetingListDatatableQuery($data)
	{
        $query = DB::table($this->table . ' AS C');
        $query->select(DB::raw('C.*, date_format(C.zoom_time,"%d-%m-%Y %h:%i") as zoom_time, C.id AS DT_RowId'));
       
	   if (!empty($data['q'])) {
            //$query->where('EA.user_id', $data['q']);
        }

        // filter by seach
        $generalSearch = (isset($data['query']['generalSearch']) ? $data['query']['generalSearch'] : '');
        if (!empty($generalSearch)) {

            $columnSearch = array(
                'zoom_id'
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

        if (isset($data['query']['Status'])) {
            $query->where('C.status', $data['query']['Status']);
        }


        // ORDER BY
        if (isset($data['sort']['field'])) {
            $query->orderBy($data['sort']['field'], $data['sort']['sort']);
        } else {

            $query->orderBy('C.id', 'DESC');
        }
        $query->whereNull('C.deleted_at');
        $query->where('C.user_id', session('user_data')['id']);
        return $query;
    }

    /*
     * @Class:           <Meeting_Model>
     * @Function:        <getMeetingListDatatable>
     * @Author:          Anupam Singh
     * @Created On:      <24-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <24-01-2022>
     * @Description:     <>
     */

    public function getMeetingListDatatable($data) {

        $page = !empty($data['pagination']['page']) ? $data['pagination']['page'] : 1;
        $perPage = !empty($data['pagination']['perpage']) ? $data['pagination']['perpage'] : 10;
        $start = (($page - 1) * $perPage);

        $query = $this->getMeetingListDatatableQuery($data);

        $query->offset($start);
        $query->limit($perPage);
        $items = $query->get();

        $totalRecords = $this->getMeetingListDatatableFilteredCount($data);
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
     * @Class:           <Meeting_Model>
     * @Function:        <getMeetingListDatatableFilteredCount>
     * @Author:          Anupam Singh
     * @Created On:      <24-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <24-01-2022>
     * @Description:     <>
     */

    function getMeetingListDatatableFilteredCount($data) {
        return $this->getMeetingListDatatableQuery($data)->count();
    }

}
