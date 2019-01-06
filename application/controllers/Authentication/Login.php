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

    public function index(){

//        if($this->session->userdata('login_referrer')!= ""){
//            $temp_referrer = $this->session->userdata('login_referrer');
//
//            $this->session->unset_userdata('login_referrer');
//
//            redirect($temp_referrer);
//        }

        # Performing validation of input
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->showLoginPage();
        }
        else
        {
            $username = set_value('username');
            $password = set_value('password');
            if(!empty($username) & !empty($password)){
                $userdata = array(
                  'username' => $username
                );
                $this->session->set_userdata($userdata);
                $data = array(
                    'password'=>$password,
                    'title'=>'Dashboard | WACFO'
                );
                redirect('dashboard');

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

}

?>