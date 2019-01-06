<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Visit extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
            $this->load->model('People/Other/Visits/visit_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Visitations | WACFO',

        );
        $data['data_set'] = $this->visit_model->fetch();

        $this->template->load('default', 'People/Other/Visits/Data/children-visit-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Register a new Child Visit',
        );

        $this->template->load('default', 'People/Other/Visits/Registration/new-child-visit-record-form', $data);
    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Child Visit Details';

            $data['visit_info'] =  $this->visit_model->fetch_single_record($row_id);
            $this->template->load('default','People/Other/Visits/Data/child-visit-details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>