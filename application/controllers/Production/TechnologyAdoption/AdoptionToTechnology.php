<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/18/18
 * Time: 9:19 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class AdoptionToTechnology extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Production/Technology/technology_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Misean Cara Beneficiaries Technology Adoption | WACFO',

        );

        $data['data_set'] = $this->technology_model->fetch();

        $this->template->load('default', 'Production/Technology/technology-adoption-data-list', $data);

    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Technology Details';

            $data['technology_info'] =  $this->technology_model->fetch_single_record($row_id);
            $this->template->load('default','Production/Technology/technology_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }


}