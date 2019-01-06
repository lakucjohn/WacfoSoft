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
    }

    public function index()
    {
        $data = array(

            'title' => 'Dashboard | WACFO',

        );

        $this->template->load('default', 'Dashboard/dashboard', $data);

    }
}
?>
