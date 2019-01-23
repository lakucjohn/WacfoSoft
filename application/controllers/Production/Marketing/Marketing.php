<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 9:27 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Marketing extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Production/Marketing/marketing_model');


    }

    public function index()
    {
        $data = array(

            'title' => 'Marketing | WACFO',

        );

        $data['data_set'] = $this->marketing_model->fetch();

        $this->template->load('default', 'Production/Marketing/marketing-data-list', $data);


    }

    public function edit(){
        $data = array(

            'title' => 'Edit Marketing info',

        );

        $data['data_set'] = $this->marketing_model->fetch();

        $this->template->load('default', 'Production/Marketing/marketing-edit', $data);


    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Marketing Details';

            $data['marketing_info'] =  $this->marketing_model->fetch_single_record($row_id);
            $this->template->load('default','Production/Marketing/marketing_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>