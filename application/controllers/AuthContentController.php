<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/29/18
 * Time: 7:36 AM
 */
include_once (APPPATH.'controllers/MainController.php');
class AuthContentController extends MainController{

    public function __construct()
    {
        parent::__construct();

        $username = $this->session->userdata('username');

        if(!$username) {

            redirect('auth/login');
        } else {
            $this->load->model('People/Other/Visits/visit_model');

            $close_visits = $this->visit_model->get_close_visitation_dates();

            $data['number_of_close_visits'] = $close_visits->num_rows();

            if ($close_visits->num_rows() != 0) {
                $data['list_of_close_visits'] = $close_visits;
            }
        }
    }

}

?>

