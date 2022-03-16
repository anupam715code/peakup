<?php
/**
 * Territory_Model Class
 *
 * @package Model
 * @author Shachish Sneh
 * @version 1.0
 * @description Territory Model
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use DB;

class Title_Model extends Model
{
	use SoftDeletes;

    protected $table;
    protected $primaryKey = 'title_id';
    public $timestamps = false;
    
    //const CREATED_AT = '';
    //const UPDATED_AT = '';
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [];
/*
     * @Class:           <Territory_Model>
     * @Function:        <__construct>
     * @Author:          Shachish Sneh
     * @Created On:      <07-09-2018>
     * @Last Modified By:Shachish Sneh
     * @Last Modified:   <07-09-2018>
     * @Description:     <>
     */
public function __construct()
{
    $this->table = config('tables.tblTitle');
}

    // SITE AJAX LIST
    /*
     * @Class:           <Territory_Model>
     * @Function:        <getTerritoryListDatatableQuery>
     * @Author:          Shachish Sneh
     * @Created On:      <07-09-2018>
     * @Last Modified By:Shachish Sneh
     * @Last Modified:   <07-09-2018>
     * @Description:     <>
     */
    private function getTitleListDatatableQuery($data) {

        //DB::connection()->enableQueryLog();

        $query = DB::table($this->table . ' AS T');

        //$query->leftJoin('events AS E', 'E.id', '=', 'EA.event_id');

        //$query->select(DB::raw("E.name, from_unixtime(E.start_date, '%Y %D %M %h:%i:%s'), E.end_date"));
        $query->select(DB::raw('T.*,date_format(T.created_at,"%m-%d-%Y") as created_at, T.title_id AS DT_RowId'));
        
        $query->whereNull('T.deleted_at');

        if (!empty($data['q'])) {
            //$query->where('EA.user_id', $data['q']);
        }

        // filter by seach
        $generalSearch = (isset($data['query']['generalSearch']) ? $data['query']['generalSearch'] : '');
        if (!empty($generalSearch)) {

            $columnSearch = array(
                'title', 'created_at'
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
            $query->where('T.status', $data['query']['Status']);
        }


        // ORDER BY
        if (isset($data['sort']['field'])) {
            $query->orderBy($data['sort']['field'], $data['sort']['sort']);
        } else {

            $query->orderBy('T.title', 'ASC');
        }
        return $query;
    }
      /*
     * @Class:           <Territory_Model>
     * @Function:        <getTerritoryListDatatable>
     * @Author:          Shachish Sneh
     * @Created On:      <07-09-2018>
     * @Last Modified By:Shachish Sneh
     * @Last Modified:   <07-09-2018>
     * @Description:     <>
     */
      public function getTitleListDatatable($data) {

        $page = !empty($data['pagination']['page']) ? $data['pagination']['page'] : 1;
        $perPage = !empty($data['pagination']['perpage']) ? $data['pagination']['perpage'] : 10;
        $start = (($page - 1) * $perPage);

        $query = $this->getTitleListDatatableQuery($data);

        $query->offset($start);
        $query->limit($perPage);
        $items = $query->get();

        $totalRecords = $this->getTitleListDatatableFilteredCount($data);
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
     * @Class:           <Territory_Model>
     * @Function:        <getTerritoryListDatatableFilteredCount>
     * @Author:          Shachish Sneh
     * @Created On:      <07-09-2018>
     * @Last Modified By:Shachish Sneh
     * @Last Modified:   <07-09-2018>
     * @Description:     <>
     */
   function getTitleListDatatableFilteredCount($data) {
    return $this->getTitleListDatatableQuery($data)->count();
}
}
