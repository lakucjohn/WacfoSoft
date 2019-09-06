<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 9:27 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');

class ProductionIncrease extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Production/ProductionIncrease/productionIncrease_model');


    }

    public function index()
    {
        $data = array(

            'title' => 'Marketing | WACFO',

        );

        $data['data_set'] = $this->productionIncrease_model->fetch();

        $this->template->load('default', 'Production/Production-Increase/increase-in-production-data-list', $data);


    }

    public function edit(){
        $data = array(

            'title' => 'Marketing | WACFO',

        );

        $data['data_set'] = $this->productionIncrease_model->fetch();

        $this->template->load('default', 'Production/Production-Increase/increase-in-production-edit', $data);


    }

    public function details()
    {

        if ($this->uri->segment(3)) {
            $row_id = $this->uri->segment(3);

            $data['title'] = 'Increase in Productivity Details';

            $data['productivity_increase_info'] = $this->productionIncrease_model->fetch_single_record($row_id);
            $this->template->load('default', 'Production/Production-Increase/increase_in_production_details', $data);
        }

    }

    public function generate_detailed_pdf(){

    }

}
?>