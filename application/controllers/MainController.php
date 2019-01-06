<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/7/18
 * Time: 4:46 PM
 */

class MainController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $referrer_url = current_url().($_SERVER['QUERY_STRING']."");

        $login_url_data = array(
            'login_referrer' => $referrer_url,
        );

        $this->session->set_userdata($login_url_data);

//        echo $_SESSION['login_referrer'];

    }

}

?>