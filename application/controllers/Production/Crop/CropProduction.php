<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 9:26 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');
class CropProduction extends MainController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Production/Categories/crop_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Crop Production | WACFO',

        );

        $data['data_set'] = $this->crop_model->fetch();

        $this->template->load('default', 'Production/Crop/crop-production-data-list', $data);

    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Crop Production Details';

            $data['crop_production_info'] =  $this->crop_model->fetch_single_record($row_id);
            $this->template->load('default','Production/Crop/crop_production_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>