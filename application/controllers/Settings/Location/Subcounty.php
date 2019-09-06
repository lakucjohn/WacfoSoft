<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Subcounty extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/location_model');
    }

    public function create()
    {

        if ($this->input->post('subcounty_name')) {
            $county_name = $this->input->post('subcounty_county_input');
            $subcounty_name = $this->input->post('subcounty_name');
            if (!empty($subcounty_name)) {

                $field_data = array(
                    'COUNTY' => $county_name,
                    'SUBCOUNTY' => $subcounty_name,
                );
                $this->location_model->create_subcounty($field_data);
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