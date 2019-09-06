<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Disability extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/disability_model');
    }

    public function create()
    {

        $data = array(
            'title' => 'Create New Disability',
        );


        $this->form_validation->set_rules('disability_name', 'Disability Name', 'required');
        $this->form_validation->set_rules('disability_prefix', 'Disability Prefix', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Settings/Disabilities/disability_registration_form', $data);
        } else {
            $disability = $this->input->post('disability_name');
            $description = $this->input->post('disability_description');
            $prefix = $this->input->post('disability_prefix');
            $disability_id = $this->disability_model->generate_disability_id();

            $field_data = array(
                'DISABILITY_NAME' => $disability,
                'DISABILITY_DESCRIPTION' => $description,
                'DISABILITY_PREFIX' => $prefix,
                'DISABILITY_ID' => $disability_id,
            );

            $this->disability_model->insert($field_data);
            redirect('settings');
        }

    }

    public function edit()
    {

    }

    public function delete()
    {

    }

}

?>