<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 8:47 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');

class Login extends MainController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Authentication/auth_model');

//        if($this->session->userdata('login_referrer')!= ""){
//            $temp_referrer = $this->session->userdata('login_referrer');
//
//            $this->session->unset_userdata('login_referrer');
//
//            redirect($temp_referrer);
//        }
    }

    public function index()
    {

        # Performing validation of input
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->showLoginPage();
        } else {
            $username = set_value('username');
            $password = set_value('password');
            if(!empty($username) & !empty($password)){
                if ($this->auth_model->check_user($username, $password)) {
                    $userdata = array(
                        'username' => $username
                    );
                    $this->session->set_userdata($userdata);
                    redirect('dashboard');
                } else {
                    $error = 'User with these credentials doesn\'t exist';
                    $this->showLoginPageError($error);
                }

            }else{
                $this->showLoginPage();
            }
//            $this->load->view('formsuccess');
        }

    }

    public function showLoginPage(){
        $data = array(
            'title'=>'Login',
        );
        $this->template->load('blank_with_libs', 'Authentication/Login', $data);
//        $this->load->view('Authentication/Login');
    }

    public function showLoginPageError($error)
    {
        $data = array(
            'title' => 'Login',
            'error' => $error,
        );
        $this->template->load('blank_with_libs', 'Authentication/Login', $data);
//        $this->load->view('Authentication/Login');
    }

}

?>