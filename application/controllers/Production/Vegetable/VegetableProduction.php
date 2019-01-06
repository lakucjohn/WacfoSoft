<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 9:27 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class VegetableProduction extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
            $this->load->model('Production/Categories/vegetable_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Vegetable Production | WACFO',

        );

        $data['data_set'] = $this->vegetable_model->fetch();

        $this->template->load('default', 'Production/Vegetable/vegetable-production-data-list', $data);


    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Vegetable Production Details';

            $data['vegetable_production_info'] =  $this->vegetable_model->fetch_single_record($row_id);
            $this->template->load('default','Production/Vegetable/vegetable_production_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>