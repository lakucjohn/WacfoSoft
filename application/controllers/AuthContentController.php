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
        }
    }

}

?>

