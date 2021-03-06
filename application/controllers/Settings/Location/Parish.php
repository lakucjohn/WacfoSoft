<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Parish extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/location_model');
    }

    public function create()
    {

        if ($this->input->post('parish_name')) {
            $subcounty_name = $this->input->post('parish_subcounty_input');
            $parish_name = $this->input->post('parish_name');
            if (!empty($parish_name)) {

                $field_data = array(
                    'SUBCOUNTY' => $subcounty_name,
                    'PARISH' => $parish_name,
                );
                echo $this->location_model->create_parish($field_data);
            }
        }
        redirect('settings');
    }

    public function edit()
    {

    }

    public function delete()
    {

    }

}

?>