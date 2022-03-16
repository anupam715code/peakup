<?php

/**
 * MeetingController Class
 *
 * @package Admin
 * @author Anupam Singh
 * @version 1.0
 * @description Meeting controller
 * @link 
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Cookie;
use App\Models\Meeting_Model;
use App\Helpers\FileUpload;
use DB;
use App\Http\Traits\ZoomMeetingTrait;

class MeetingController extends Controller {

    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    var $objMeetingModel;

    /*
     * @Class:           <MeetingController>
     * @Function:        <__construct>
     * @Author:          Anupam Singh
     * @Created On:      <22-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <22-01-2022>
     * @Description:     <>
     */

    public function __construct() {
        $this->objMeetingModel = new Meeting_Model();
    }

    /*
     * @Class:           <MeetingController>
     * @Function:        <listMeeting>
     * @Author:          Anupam Singh
     * @Created On:      <22-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <22-01-2022>
     * @Description:     <>
     */

    public function listMeeting(Request $request) {
        return view('admin.Meeting.view');
    }

    /*
     * @Class:           <MeetingController>
     * @Function:        <ajaxListMeeting>
     * @Author:          Anupam Singh
     * @Created On:      <22-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <22-01-2022>
     * @Description:     <>
     */

    public function ajaxListMeeting(Request $request) {
        $listData = $this->objMeetingModel->getMeetingListDatatable($request->all());
        return response()->json($listData);
    }

    /*
     * @Class:           <MeetingController>
     * @Function:        <addMeeting>
     * @Author:          Anupam Singh
     * @Created On:      <22-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <22-01-2022>
     * @Description:     <>
     */

    public function addMeeting(Request $request, $MeetingId = NULL) {

        // ADD CASE
        if (empty($MeetingId)) {

            return view('admin.Meeting.add');
            //echo "fasdf";die;
        } else {

            // UPDATE CASE
            $MeetingData = Meeting_Model::find($MeetingId);
            //pr($MeetingData);die;

            return view('admin.Meeting.edit', compact('MeetingData'));
        }
    }

    /*
     * @Class:           <MeetingController>
     * @Function:        <saveMeeting>
     * @Author:          Anupam Singh
     * @Created On:      <22-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <22-01-2022>
     * @Description:     <>
     */

    public function saveMeeting(Request $request) 
    {
        $userId   = session('user_data')['id'];
        //Set the headers value
        $this->setHeaders();
        $data = array();
        $data['topic']      = !empty($request->meeting_topic)? $request->meeting_topic : 'No Topic Available';
        $data['start_time'] = $request->meeting_time;
        $data['duration']   = 30;
        $data['type']       = 2;
        $data['host_video']   = false;
        $data['participant_video']   = false;

        $response = $this->create($data); //Call Traits function to generate zoom meeting link
        //pr($response['data']);die;

        $requestData = unsetData($request->all(), array('_token', 'meeting_time', 'meeting_topic'));
        //pr($requestData);
        if (empty($requestData)) 
        {
            $requestData['user_id']       = $userId; 
            $requestData['zoom_id']       = $response['data']['id'];  
            $requestData['zoom_topic']    = $response['data']['topic'];
            $requestData['zoom_time']     = date("Y-m-d H:i:s", strtotime($request->meeting_time));
            $requestData['zoom_url']      = $response['data']['join_url']; 
            $requestData['zoom_password'] = $response['data']['password']; 
            $requestData['status']        = 1; 

            //pr($requestData);die;
            Meeting_Model::insert($requestData);
            return redirect(config('constants.ADMIN_URL') . 'addMeeting/')->with('success_msg', 'Meeting added successfully.');
        }
    }

    /*
     * @Class:           <MeetingController>
     * @Function:        <deleteMeeting>
     * @Author:          Anupam Singh
     * @Created On:      <22-01-2022>
     * @Last Modified By:Anupam Singh
     * @Last Modified:   <22-01-2022>
     * @Description:     <>
     */

    public function deleteMeeting(Request $request) {
        
        $MeetingId = $request->id;

        $resource = Meeting_Model::find($MeetingId);
        $resource->delete();

        //Meeting_Model::where('Meeting_id', $MeetingId)->delete();
    }

    public function changeMeetingStatus(Request $request)
    {
        $MeetingId = $request->id;
        
        $MeetingData = Meeting_Model::find($MeetingId);
        $MeetingData['status'] = ($MeetingData['status'] == 1) ? 0 : 1;
        $MeetingData->save();
        
    }

}

/* End of file MeetingController.php */
/* Location: ./app/Http/Controllers/MeetingController.php */
