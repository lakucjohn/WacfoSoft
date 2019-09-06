<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 11/29/18
 * Time: 11:58 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');

class Content extends MainController
{
    public function index()
    {
        # Loading the session library in order to deal with user sessions

        #Retrieving the data for the user session
        $username = $this->session->userdata('username');

        if($username){
            redirect('dashboard');
        }else{
            redirect('auth/login');
        }


//        $this->template->load('default', 'content', $data);
    }
}
?>
