<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class PilotStudies extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Miscellaneous/PilotStudies/pilotStudies_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Pilot Studies | WACFO',

        );

        $data['data_set'] = $this->pilotStudies_model->fetch();

        $this->template->load('default', 'Miscellaneous/PilotStudies/Data/pilot-studies-data-list', $data);


    }

    public function create(){

        $data = array(
            'title' => 'New Misean Cara Livelihood and Nutrition Household Survey'
        );

        $this->template->load('default', 'Miscellaneous/PilotStudies/Registration/livelihood-and-nutrition-household-survey-form', $data);

    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Pilot Study Details';

            $data['pilot_study_info'] =  $this->pilotStudies_model->fetch_single_record($row_id);
            $this->template->load('default','Miscellaneous/PilotStudies/Data/pilot_study_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>