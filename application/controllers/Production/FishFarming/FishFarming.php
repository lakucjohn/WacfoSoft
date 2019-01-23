<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 9:26 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/MainController.php');

class FishFarming extends MainController
{

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Production/Categories/fishing_model');
        $this->load->model('People/Membership/membership_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Fish Farming | WACFO',

        );

        $data['data_set'] = $this->fishing_model->fetch();

        $this->template->load('default', 'Production/Fishing/fishing-data-list', $data);

    }

    public function edit()
    {
        $data = array(

            'title' => 'Edit Fish Farming',

        );
        $record_id = $this->uri->segment(4);
        $data['default_value_array'] = $this->fishing_model->fetch_single_row_data_to_edit($record_id);
        $group_id = $this->membership_model->get_fishing_member_group('FISH_FARMING_RECORDS', $record_id);
        $data['members_list'] = $this->membership_model->return_group_members_list($group_id);
        $data['row_id'] = $record_id;

//        $data['data_set'] = $this->fishing_model->fetch();

        $this->template->load('default', 'Production/Fishing/fishing-edit', $data);
//        echo $group_id;

    }

    public function details()
    {

        if ($this->uri->segment(2)) {
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Crop Production Details';

            $data['crop_production_info'] = $this->fishing_model->fetch_single_record($row_id);
            $this->template->load('default', 'Production/Crop/crop_production_details', $data);
        }

    }

    public function generate_pdf_document()
    {

    }

    public function generate_detailed_pdf()
    {

    }

    function fetch_personal_records()
    {

        if ($this->input->post('member_id')) {
            $member_id = $this->input->post('member_id');
            $row_id = $this->input->post('record_id');

            echo $this->membership_model->fetch_fishing_members_record($member_id, $row_id);
        }

    }

}

?>