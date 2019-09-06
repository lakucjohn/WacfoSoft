<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 8:47 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');

class User extends MainController
{

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

    public function create_user()
    {

    }

    public function index()
    {

        # Performing validation of input
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->showLoginPage();
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];


            if(!empty($username) & !empty($password)){

//                $password = password_verify($password,$password, PASSWORD_BCRYPT);
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

    public function check_user_login()
    {

        $row_id = $this->uri->segment(3);

        $data = array(
            'title' => 'Change User Login Credentials',
            'row' => $row_id,
        );

        $this->form_validation->set_rules('username_prev', 'Current username', 'required');
        $this->form_validation->set_rules('password_prev', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Authentication/current_authentication_details', $data);
//            echo $record_id;
        } else {
            $username_previous = $this->input->post('username_prev');
            $password_previous = $this->input->post('password_prev');


//            $password_previous = password_verify($password_previous, PASSWORD_BCRYPT);

            $user_check_result = $this->auth_model->check_user($username_previous, $password_previous);
            if ($user_check_result) {

                redirect('user-details/change/' . $row_id);

            } else {
                $error_message = 'Sorry, User with these credentials does not exist! Please try again';
                $data['error_message'] = $error_message;
                $this->template->load('default', 'Authentication/current_authentication_details', $data);
            }
        }
    }

    public function change_user_login()
    {

        $row_id = $this->uri->segment(3);

        $data = array(
            'title' => 'Change User Login Credentials',
            'row' => $row_id,
        );
        $this->form_validation->set_rules('username_new', 'New username', 'required');
        $this->form_validation->set_rules('password_new', 'New Password', 'required');
        $this->form_validation->set_rules('confirm_password_new', 'Confirm New Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Authentication/new_authentication_details', $data);

        } else {
            $new_username = $this->input->post('username_new');
            $new_password = $this->input->post('password_new');
            $new_password_confirm = $this->input->post('confirm_password_new');

            if ($new_password == $new_password_confirm) {

                $new_password = password_hash($new_password, PASSWORD_DEFAULT);
                $field_data = array(
                    'username' => $new_username,
                    'password' => $new_password,
                );
                $change_result = $this->auth_model->update_record($row_id, $field_data);

                if ($change_result) {
                    redirect('settings');
                } else {
                    $failure_error = 'Error: Could not update the database with new settings!';
                    $data['error_message'] = $failure_error;
                    $this->template->load('default', 'Authentication/new_authentication_details', $data);
                }
            } else {
                $error_message = 'Sorry, Your Passwords do not match';
                $data['error_message'] = $error_message;
                $this->template->load('default', 'Authentication/new_authentication_details', $data);
            }
        }
    }

}

?>