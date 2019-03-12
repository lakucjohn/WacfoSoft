<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Department extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/departments_model');
    }

    public function create()
    {

        $data = array(
            'title' => 'Create New Department in the Organization',
        );


        $this->form_validation->set_rules('department_name', 'Name of Department', 'required');
        $this->form_validation->set_rules('department_prefix', 'Department Prefix Code', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Settings/Departments/new_organization_department', $data);
        } else {
            $department = $this->input->post('department_name');
            $prefix = $this->input->post('department_prefix');

            $field_data = array(
                'NAME' => $department,
                'PREFIX' => $prefix,
            );

            $this->departments_model->insert($field_data);

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