<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 4:33 PM
 */
include_once (APPPATH.'controllers/AuthContentController.php');
class Settings extends AuthContentController{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings/location_model');
        $this->load->model('Settings/departments_model');
        $this->load->model('Settings/livelihood_Categories_model');
        $this->load->model('Settings/user_Authentication_model');
        $this->load->model('Settings/disability_model');
    }

    public function index(){
        $data = array(
            'title' => 'System Settings',
        );

        $data['county_settings'] = $this->location_model->fetch_all_counties();
        $data['subcounty_settings'] = $this->location_model->fetch_all_subcounties();
        $data['parish_settings'] = $this->location_model->fetch_all_parishes();
        $data['village_settings'] = $this->location_model->fetch_all_villages();

        $data['departments_settings'] = $this->departments_model->fetch();
        $data['livelihood_categories_settings'] = $this->livelihood_Categories_model->fetch();
        $data['user_authentication_settings'] = $this->user_Authentication_model->fetch();
        $data['disabilities_settings'] = $this->disability_model->fetch();

        $this->template->load('default','Settings/Welcome/settings-welcome', $data);
    }

    public function fetch_subcounty_for_parish()
    {
        if ($this->input->post('county_id')) {
            $county_id = $this->input->post('county_id');

            echo $this->location_model->fetch_associated_subcounty_for_parish($county_id);
        }
    }

    public function fetch_subcounty_for_village()
    {
        if ($this->input->post('village_county_id')) {
            $county_id = $this->input->post('village_county_id');

            echo $this->location_model->fetch_associated_subcounty_for_village($county_id);
        }
    }

    public function fetch_parish_for_village()
    {
        if ($this->input->post('village_subcounty_id')) {
            $subcounty_id = $this->input->post('village_subcounty_id');

            echo $this->location_model->fetch_associated_parish_for_village($subcounty_id);
        }
    }

    public function fetch_villages_for_parish()
    {
        if ($this->input->post('parish_id')) {
            $parish_id = $this->input->post('parish_id');

            echo $this->location_model->fetch_villages_in_parish($parish_id);
        }
    }

    public function fetch_villages_for_parish_for_group()
    {
        if ($this->input->post('parish_id')) {
            $parish_id = $this->input->post('parish_id');

            echo $this->location_model->fetch_villages_in_parish_for_group($parish_id);
        }
    }

    public function fetch_villages_for_member_parish()
    {
        if ($this->input->post('parish_id')) {
            $parish_id = $this->input->post('parish_id');

            echo $this->location_model->fetch_villages_in_parish_for_member($parish_id);
        }
    }

    public function fetch_subcounties_in_county_for_assessment()
    {
        if ($this->input->post('county_id')) {
            $county_id = $this->input->post('county_id');

            echo $this->location_model->fetch_subcounties_in_county_for_assessment($county_id);
        }
    }

    public function fetch_parishes_in_subcounty_for_assessment()
    {
        if ($this->input->post('subcounty_id')) {
            $subcounty_id = $this->input->post('subcounty_id');

            echo $this->location_model->fetch_parishes_in_subcounty_for_assessment($subcounty_id);
        }
    }

    public function fetch_villages_in_parish_for_assessment()
    {
        if ($this->input->post('parish_id')) {
            $parish_id = $this->input->post('parish_id');

            echo $this->location_model->fetch_villages_in_parish_for_assessment($parish_id);
        }
    }

}

?>