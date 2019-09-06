<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Miscellaneous extends AuthContentController {

    public function index()
    {
        $data = array(

            'title' => 'Miscellaneous | WACFO',

        );

        $this->template->load('default', 'Miscellaneous/miscellaneous', $data);


    }

}
?>