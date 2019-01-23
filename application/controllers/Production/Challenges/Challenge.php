<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 9:27 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Challenge extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Production/Challenges/challenges_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Challenges | WACFO',

        );

        $data['data_set'] = $this->challenges_model->fetch();

        $this->template->load('default', 'Production/Challenges/challenge-data-list', $data);


    }

    public function edit(){
        $data = array(

            'title' => 'Edit Production Challenge',

        );

        $data['data_set'] = $this->challenges_model->fetch();

        $this->template->load('default', 'Production/Challenges/challenge-edit', $data);


    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Challenge Details';

            $data['challenge_info'] =  $this->grouping_model->fetch_single_record($row_id);
            $this->template->load('default','Production/Challenges/challenge_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>