<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 12:31 PM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');
class Logout extends MainController{

    public function index(){

        #Destroy the session
        $this->session->sess_destroy();

        #Redirect to the login page
        redirect('auth/login');

    }


}

?>