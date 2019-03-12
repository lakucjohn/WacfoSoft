<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 8:45 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Village extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/location_model');
    }

    public function create()
    {

        if ($this->input->post('village_name')) {
            $village_prefix = $this->input->post('village_prefix');
            $parish_name = $this->input->post('village_parish_input');
            $village_name = $this->input->post('village_name');
            if (!empty($parish_name)) {
                if (!empty($village_prefix)) {
                    $field_data = array(
                        'PARISH' => $parish_name,
                        'VILLAGE' => $village_name,
                        'PREFIX_CODE' => $village_prefix
                    );
                    $this->location_model->create_village($field_data);
                }

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