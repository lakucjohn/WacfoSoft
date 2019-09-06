<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Livelihood extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/livelihood_Categories_model');
    }

    public function create()
    {

        $data = array(
            'title' => 'Create New Livelihood Category',
        );

        $this->form_validation->set_rules('category_name', 'Name of Category', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Settings/Livelihood/new_livelihood_category', $data);
        } else {
            $category = $this->input->post('category_name');

            $field_data = array(
                'CATEGORYNAME' => $category,
            );


            $this->livelihood_Categories_model->insert($field_data);
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