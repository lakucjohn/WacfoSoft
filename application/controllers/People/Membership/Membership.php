<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Membership extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('People/Membership/membership_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Membership | WACFO',

        );

        $data['members_list'] = $this->membership_model->fetch();
        $this->template->load('default', 'People/Livelihood/Membership/Data/membership-data-list', $data);

    }

    public function create(){
        $data = array(
            'title' => 'Register a new Livelihood Group Member'
        );

        $this->template->load('default','People/Livelihood/Membership/Registration/livelihood-membership-registration-form', $data);
    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Member Details';

            $data['member_info'] =  $this->membership_model->fetch_single_record($row_id);
            $this->template->load('default','People/Livelihood/Membership/Data/member_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>