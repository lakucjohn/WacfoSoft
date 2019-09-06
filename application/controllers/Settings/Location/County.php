<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class County extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/location_model');
    }

    public function create()
    {

        if ($this->input->post('county_name')) {
            $county_name = $this->input->post('county_name');
            if (!empty($county_name)) {

                $field_data = array(
                    'COUNTY' => $county_name,
                );
                $this->location_model->create_county($field_data);
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