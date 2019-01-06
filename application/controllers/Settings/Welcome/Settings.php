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
    }

    public function index(){
        $data = array(
            'title' => 'System Settings',
        );

        $this->template->load('default','Settings/Welcome/settings-welcome', $data);
    }

}

?>