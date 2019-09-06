<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 11/29/18
 * Time: 11:58 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');

class Dashboard extends AuthContentController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/Membership/membership_model');
        $this->load->model('People/Children/children_model');
        $this->load->model('People/Other/Visits/visit_model');
        $this->load->model('Monitoring/monitoring_model');
        $this->load->model('Trainings/training_model');
        $this->load->model('Trainings/courses_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Dashboard | WACFO',

        );
//        $this->load->view('templates/default-template');
        $data['livelihood_group_total'] = $this->grouping_model->fetch_total();
        $data['total_members'] = $this->membership_model->fetch_total();
        $data['total_children'] = $this->children_model->fetch_total();
        $data['total_visits'] = $this->visit_model->fetch_total();
        $data['total_savings_visits'] = $this->monitoring_model->fetch_savings_tracking_visits();
        $data['total_field_support_visits'] = $this->monitoring_model->fetch_total_field_support_visits();
        $data['total_trainings'] = $this->training_model->fetch_total();
        $data['total_courses'] = $this->courses_model->fetch_total();

        $this->template->load('default', 'Dashboard/dashboard', $data);

    }
}
?>
