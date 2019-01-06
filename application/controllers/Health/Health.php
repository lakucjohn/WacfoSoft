<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Health extends AuthContentController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(

            'title' => 'Health | WACFO',

        );

        $this->template->load('default', 'Health/health', $data);

    }

}
?>