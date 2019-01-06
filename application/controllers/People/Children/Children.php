<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Children extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
            $this->load->model('People/Children/children_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Children | WACFO',

        );
        $data['children_list'] = $this->children_model->fetch();

        $this->template->load('default', 'People/Children/Data/children-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Register a new Child',
        );

        $this->template->load('default', 'People/Children/Registration/child-registration-form', $data);
    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Child Details';

            $data['child_info'] =  $this->children_model->fetch_single_record($row_id);
            $this->template->load('default','People/Children/Data/child_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>