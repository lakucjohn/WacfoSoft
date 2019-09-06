<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');
class Production extends MainController {

    public function index()
    {
        $data = array(

            'title' => 'Production | WACFO',

        );

        $this->template->load('default', 'Production/production', $data);
    }

}
?>