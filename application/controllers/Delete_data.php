<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 11:31 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . 'controllers/AuthContentController.php');

class Delete_data extends AuthContentController
{

    private $url;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('delete_data_model');
        $this->load->library('user_agent');

//        if($this->agent->is_referral()){
//            echo 'OK';
//            $this->url = $this->agent->referrer();
//        }
//        echo $_SERVER['HTTP_REFERER'];

    }

    public function delete_row($table, $row_id)
    {
//        print_r($this->delete_data_model->delete($table, $row_id));
//        echo $table.'        '.$row_id;
//        echo $table;
        if ($this->delete_data_model->delete($table, $row_id)) {
            redirect($_SERVER['HTTP_REFERER']);
//            echo $_SERVER['HTTP_REFERER'];
        }

//        echo $this->url;
    }

}

?>