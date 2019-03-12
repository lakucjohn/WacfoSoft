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
        $data = array(

            'title' => 'Edit Misean Cara Beneficiaries Technology Adoption',

        );
        $record_id = $this->uri->segment(4);
        $data['row_id'] = $record_id;
        $data['default_value_array'] = $this->technology_model->fetch_single_row_data_to_edit($record_id);

        #Performing validation checks
        $this->form_validation->set_rules('used_improved_seeds', 'Did you use any improved seed during the year in your production', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Production/Technology/technology-adoption-edit', $data);
        } else {

            $used_improved_seeds = $this->input->post('used_improved_seeds');
            $used_underground_water_during_dry_season = $this->input->post('used_underground_water_during_dry_season');
            $used_pesticides = $this->input->post('used_pesticides');
            $used_farm_implements = $this->input->post('used_farm_implements');
            $used_post_harvest_handling_and_processing_techniques = $this->input->post('used_post_harvest_handling_and_processing_techniques');
            $had_the_opportunity_to_plant_crops_in_rows = $this->input->post('had_the_opportunity_to_plant_crops_in_rows');
            $other_techniques_used = $this->input->post('other_techniques_used');


            #updating misean cara technology beneficiaries
            $field_data_techonology = array(
                'USED_IMPROVED_SEEDS' => $used_improved_seeds,
                'USED_UNDERGROUND_WATER' => $used_underground_water_during_dry_season,
                'USED_PESTICIDES' => $used_pesticides,
                'USED_FARM_IMPLEMENTS' => $used_farm_implements,
                'IMPROVED_POST_HARVEST_HANDLING' => $used_post_harvest_handling_and_processing_techniques,
                'USED_ROW_PLANTING' => $had_the_opportunity_to_plant_crops_in_rows,
                'OTHER_TECHNIQUES_USED' => $other_techniques_used,
            );

            $result = $this->technology_model->update_record($record_id, $field_data_techonology);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }

            redirect('production/adoption%20to%20technology');


        }


    }

    public function details()
    {

        if ($this->uri->segment(3)) {
            $row_id = $this->uri->segment(3);

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