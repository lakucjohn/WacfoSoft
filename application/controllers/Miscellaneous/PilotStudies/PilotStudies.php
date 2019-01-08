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

        # Performing Validation Checks
        $this->form_validation->set_rules('Name_of_interviewer', 'Name of Interviewer', 'required');
        $this->form_validation->set_rules('Date_of_interview', 'Date of Interview', 'required');
        $this->form_validation->set_rules('Location_of_household', 'Location of the household', 'required');
        $this->form_validation->set_rules('Name_of_respondent', 'Name of Respondent', 'required');
        $this->form_validation->set_rules('Head_of_household', 'Head of Household', 'required');
        $this->form_validation->set_rules('Females_under_5', 'Females Under 5', 'required');
        $this->form_validation->set_rules('Females_between_5_and_18', 'Females Between 5 and 18', 'required');
        $this->form_validation->set_rules('Females_between_18_and_45', 'Females Between 18 and 45', 'required');
        $this->form_validation->set_rules('Males_under_5', 'Males under 5', 'required');
        $this->form_validation->set_rules('Males_between_5_and_18', 'Males Between 5 and 18', 'required');
        $this->form_validation->set_rules('Males_between_18_and_45', 'Males Between 18 and 45', 'required');
        $this->form_validation->set_rules('Length_of_time_involved_in_project', 'Length of time involved in project', 'required');
        $this->form_validation->set_rules('daily_household_income_now', 'Typical daily household income now', 'required');
        $this->form_validation->set_rules('daily_household_income_one_year_ago', 'Typical daily household income one year ago', 'required');
        $this->form_validation->set_rules('increase_in_daily_household_income_from_one_year_ago', 'Has there been an increase in household daily income from one year ago to now', 'required');
        $this->form_validation->set_rules('number_of_sources_of_income_now', 'How many sources of income or livelihood does the household have now', 'required');
        $this->form_validation->set_rules('sources_of_income_now', 'Which ones are they', 'required');
        $this->form_validation->set_rules('number_of_sources_of_income_one_year_ago', '', 'required');
        $this->form_validation->set_rules('increase_in_diversity_of_income_from_one_year_ago', 'Has there been an increase in diversity of sources of income or livelihood in the household from one year ago to now', 'required');
        $this->form_validation->set_rules('medical_percentage', 'Percentage spent on medical care', 'required');
        $this->form_validation->set_rules('education_percentage', 'Percentage spent on education', 'required');
        $this->form_validation->set_rules('house_rent_percentage', 'Percentage Spent on House Rent', 'required');
        $this->form_validation->set_rules('clothes_percentage', 'Percentage spent on clothes', 'required');
        $this->form_validation->set_rules('household_assets_percentage', 'Percentage spent on household assets', 'required');
        $this->form_validation->set_rules('others_percentage', 'Percentage spent on Others', 'required');
        $this->form_validation->set_rules('food_percentage', 'Percentage spent on food', 'required');
        $this->form_validation->set_rules('increase_in_diversity_of_income_from_one_year_ago', 'Has there been an increase in the number of household assets from one year ago to now and which', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');
        $this->form_validation->set_rules('', '', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Miscellaneous/PilotStudies/Registration/livelihood-and-nutrition-household-survey-form', $data);
        } else {
            $additional_notes_now = set_value('additional_notes_now');
            $additional_notes_one_year_ago = set_value('$additional_notes_one_year_ago');
        }

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