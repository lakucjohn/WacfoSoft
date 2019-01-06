<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Staff extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

       // Load the models for this controller
        $this->load->model('People/Staff/staff_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Staff | WACFO',

        );

        $data = array(

            'title' => 'Membership | WACFO',

        );
        $data['staff_list'] = $this->staff_model->fetch();


        $this->template->load('default', 'People/Staff/Data/staff-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Register New Staff Member',
        );

        $this->template->load('default','People/Staff/Registration/staff-registration-form', $data);
    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Staff Details';

            $data['staff_info'] =  $this->staff_model->fetch_single_record($row_id);
            $this->template->load('default','People/Staff/Data/staff_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>