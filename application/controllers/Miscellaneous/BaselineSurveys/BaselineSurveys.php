<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
include_once (APPPATH.'controllers/Utilities/PdfMaster/GeneratePdf.php');
class BaselineSurveys extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Miscellaneous/PorticusBaseline/porticusBaseline_model');


    }

    public function index()
    {
        $data = array(

            'title' => 'Porticus Baseline Assessments | WACFO',

        );

        $data['data_set'] = $this->porticusBaseline_model->fetch();

        $this->template->load('default', 'Miscellaneous/Surveys/Data/baseline-survey-data-list', $data);

    }

    public function create(){

        $data = array(
            'title' => 'New Porticus Baseline Assessment',
        );

        # Setting the values input by the user
        $name_of_respondent = $this->input->post('name_of_respondent');
        $village_of_respondent = $this->input->post('village_of_respondent');
        $age_of_respondent = $this->input->post('age_of_respondent');
        $gender_of_respondent = $this->input->post('gender_of_respondent');
        $name_of_disabled = $this->input->post('name_of_disabled');
        $age_of_disabled = $this->input->post('age_of_disabled');
        $gender_of_disabled = $this->input->post('gender_of_disabled');
        $category_of_disability = $this->input->post('category_of_disability');
        $name_of_disability = $this->input->post('name_of_disability');
        $marital_status_of_respondent = $this->input->post('marital_status_of_respondent');
        $level_of_education_of_respondent = $this->input->post('level_of_education_of_respondent');
        $occupation_of_respondent = $this->input->post('occupation_of_respondent');
        $monthly_household_income = $this->input->post('monthly_household_income');
        $feeling_of_respondent = $this->input->post('feeling_of_respondent');
        $family_members_support = $this->input->post('family_members_support');
        $feeling_of_family_members = $this->input->post('feeling_of_family_members');
        $nature_of_support_given = $this->input->post('nature_of_support_given');
        $reason_why_not_supported = $this->input->post('reason_why_not_supported');
        $received_rehabilitation_services = $this->input->post('received_rehabilitation_services');
        $gets_help_from = $this->input->post('gets_help_from');

        $kind_of_treatment_received = $this->input->post('kind_of_treatment_received');
//        $kind_of_treatment_received = implode($kind_of_treatment_received);

        $cost_of_the_treatment = $this->input->post('cost_of_the_treatment');
        $cost_of_treatment_in_figures = $this->input->post('cost_of_treatment_in_figures');
        $duration_of_the_treatment = $this->input->post('duration_of_the_treatment');
        $attended_regularly = $this->input->post('attended_regularly');

        $reason_stopped_attending = $this->input->post('reason_stopped_attending');

        $perception_of_quality_of_service = $this->input->post('perception_of_quality_of_service');
        $received_training_on_disability = $this->input->post('received_training_on_disability');
        $name_of_trainer = $this->input->post('name_of_trainer');
        $training_involved = $this->input->post('training_involved');
        $use_of_training_knowledge = $this->input->post('use_of_training_knowledge');

        $challenges_faced_caring_for_the_disabled = $this->input->post('challenges_faced_caring_for_the_disabled');

        $strengths_of_the_disabled_child = $this->input->post('strengths_of_the_disabled_child');
        $weaknesses_of_the_disabled_child = $this->input->post('weaknesses_of_the_disabled_child');
        $hope_for_the_disabled_child = $this->input->post('hope_for_the_disabled_child');

        $help_required_from_the_organisation = $this->input->post('help_required_from_the_organisation');

        $frequency_of_attending_the_treatment = $this->input->post('frequency_of_attending_the_treatment');
        $understanding_of_the_term_disability = $this->input->post('understanding_of_the_term_disability');
        $list_of_known_disabilities = $this->input->post('list_of_known_disabilities');
        $causes_of_the_known_disabilities = $this->input->post('causes_of_the_known_disabilities');
        $prevention_of_the_known_disabilities = $this->input->post('prevention_of_the_known_disabilities');

        # Performing validation of input
        $this->form_validation->set_rules('name_of_respondent', 'Name of the Respondent', 'required');
        $this->form_validation->set_rules('village_of_respondent', 'Village of the Respondent', 'required');
        $this->form_validation->set_rules('gender_of_respondent', 'Gender of the Respondent', 'required');;
        $this->form_validation->set_rules('age_of_respondent', 'Age of the Respondent', 'required');
        $this->form_validation->set_rules('name_of_disabled', 'Name of the disabled person', 'required');
        $this->form_validation->set_rules('age_of_disabled', 'Age of the disabled person', 'required');
        $this->form_validation->set_rules('gender_of_disabled', 'Gender of the disabled person', 'required');
        $this->form_validation->set_rules('category_of_disability', 'Category of the disability', 'required');
        $this->form_validation->set_rules('name_of_disability', 'Name of the Disability', 'required');
        $this->form_validation->set_rules('marital_status_of_respondent', 'Marital Status of the Respondent', 'required');
        $this->form_validation->set_rules('level_of_education_of_respondent', 'Level of education of the respondent', 'required');
        $this->form_validation->set_rules('occupation_of_respondent', 'Occupation of the respondent', 'required');
        $this->form_validation->set_rules('monthly_household_income', 'Monthly household of the respondent', 'required');
        $this->form_validation->set_rules('feeling_of_respondent', 'Feeling of the respondent', 'required');
        $this->form_validation->set_rules('feeling_of_family_members', 'Feeling of the family members', 'required');
        $this->form_validation->set_rules('received_training_on_disability', 'Have you ever received training on disability', 'required');
        $this->form_validation->set_rules('frequency_of_attending_the_treatment', 'How often did you attend the treatment', 'required');

        if ($this->input->post('family_members_support') == 1) {
            $this->form_validation->set_rules('nature_of_support_given', 'Nature of the support given', 'required');
        } else {
            $this->form_validation->set_rules('reason_why_not_supported', 'Reason why the family is unable to support the disabled person', 'required');
        }

        $this->form_validation->set_rules('received_rehabilitation_services', 'Has the child received rehabilitation services', 'required');
        if ($this->input->post('received_rehabilitation_services') == 1) {
            $this->form_validation->set_rules('gets_help_from', 'Where you receive help from', 'required');
        }

//        $this->form_validation->set_rules('kind_of_treatment_received', 'The kind of treatment received', 'required');
        $this->form_validation->set_rules('cost_of_the_treatment', 'Cost of treatment', 'required');

        if ($this->input->post('cost_of_the_treatment') == 'charged') {
            $this->form_validation->set_rules('cost_of_treatment_in_figures', 'Cost of treatment in figures', 'required');
        } else {
            $cost_of_treatment_in_figures = 0;
        }

        $this->form_validation->set_rules('duration_of_the_treatment', 'How long was the treatment', 'required');
        $this->form_validation->set_rules('attended_regularly', 'Did you attend regularly', 'required');

        if ($this->input->post('attended_regularly') == 0) {
//            $this->form_validation->set_rules('reason_stopped_attending', 'Why did you stop attending', 'required');
        }
        $this->form_validation->set_rules('perception_of_quality_of_service', 'How did you perceive the quality of service', 'required');
        $this->form_validation->set_rules('received_training_on_disability', 'Have you ever received training on disability', 'required');

        if ($this->input->post('received_training_on_disability') == 1) {

            $this->form_validation->set_rules('name_of_trainer', 'Who provided the training', 'required');
            $this->form_validation->set_rules('training_involved', 'What did the training involve', 'required');
            $this->form_validation->set_rules('use_of_training_knowledge', 'How have you used the knowledge you gained from the training', 'required');
        } else {

//            $this->form_validation->set_rules('challenges_faced_caring_for_the_disabled', 'What are the greatest challenges you face in providing care to the disabled child', 'required');
        }

        $this->form_validation->set_rules('strengths_of_the_disabled_child', 'What are the strengths of the disabled child or member in the family', 'required');
        $this->form_validation->set_rules('weaknesses_of_the_disabled_child', 'What are the weaknesses of the disabled member in the family', 'required');
        $this->form_validation->set_rules('hope_for_the_disabled_child', 'What do you hope for your disabled child or family member', 'required');
//        $this->form_validation->set_rules('help_required_from_the_organisation', 'What do you want the organization to help you with', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Miscellaneous/Surveys/Registration/porticus-baseline-survey-questionnaire', $data);


        } else {
            $field_data = array(
                'NAME_OF_RESPONDENT' => $name_of_respondent,
                'AGE' => $age_of_respondent,
                'VILLAGE' => $village_of_respondent,
                'GENDER' => $gender_of_respondent,
                'NAME_OF_VULNERABLE' => $name_of_disabled,
                'GENDER_OF_VULNERABLE' => $gender_of_disabled,
                'AGE_OF_VULNERABLE' => $age_of_disabled,
                'CATEGORY_OF_DISABILITY' => $category_of_disability,
                'NAME_OF_DISABILITY' => $name_of_disability,
                'MARITAL_STATUS' => $marital_status_of_respondent,
                'LEVEL_OF_EDUCATION' => $level_of_education_of_respondent,
                'OCCUPATION' => $occupation_of_respondent,
                'HOUSEHOLD_MONTHLY_INCOME' => $monthly_household_income,
                'DEFINITION_OF_DISABILITY' => $understanding_of_the_term_disability,
                'LIST_OF_DISABILITIES_KNOWN' => $list_of_known_disabilities,
                'CAUSES_OF_DISABILITIES_KNOWN' => $causes_of_the_known_disabilities,
                'WAYS_OF_PREVENTION' => $prevention_of_the_known_disabilities,
                'FEELING_OF_HAVING_A_VULNERABLE' => $feeling_of_respondent,
                'FEELING_OF_THE_COMMUNITY' => $feeling_of_family_members,
                'VULNERABLE_SUPPORTED' => $family_members_support,
                'SUPPORT_GIVEN' => $nature_of_support_given,
                'WHY_NOT_SUPPORTED' => $reason_why_not_supported,
                'REHABILITATION_RECEIVED' => $received_rehabilitation_services,
                'PLACE_OF_REHABILITATION' => $gets_help_from,
                'KIND_OF_TREATMENT_RECEIVED' => implode(', ', $kind_of_treatment_received),
                'COST_OF_TREATMENT' => $cost_of_treatment_in_figures,
                'FREQUENCY_OF_ATTENDANCE' => $frequency_of_attending_the_treatment,
                'DURATION_OF_THE_TREATMENT' => $duration_of_the_treatment,
                'REGULAR_ATTENDANCE' => $attended_regularly,
                'REASON_FOR_NOT_ATTENDING_REGULARLY' => implode(', ', $reason_stopped_attending),
                'QUALITY_OF_SERVICE' => $perception_of_quality_of_service,
                'TRAINING_RECEIVED' => $received_training_on_disability,
                'NAME_OF_TRAINER' => $name_of_trainer,
                'TRAINING_WAS_ABOUT' => $training_involved,
                'HELP_OF_THE_TRAINING' => $use_of_training_knowledge,
                'CHALLENGES_FACED_IN_CARING' => implode(', ', $challenges_faced_caring_for_the_disabled),
                'STRENGTHS_OF_VULNERABLE' => $strengths_of_the_disabled_child,
                'WEAKNESSES_OF_VULNERABLE' => $weaknesses_of_the_disabled_child,
                'HOPE_FOR_THE_VULNERABLE' => $hope_for_the_disabled_child,
                'ORGANIZATION_HELP_NEEDED' => implode(',', $help_required_from_the_organisation),
            );

//            print_r($field_data);

            $result = $this->porticusBaseline_model->insert_record($field_data);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }
            redirect(base_url('miscellaneous%20baseline%20surveys'));

        }
    }

    public function edit($record_id){
        echo 'OK';

    }

    public function delete($record_id){

    }

    public function details(){

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Porticus Baseline Survey Details';

            $data['baseline_survey_info'] =  $this->porticusBaseline_model->fetch_single_record($row_id);
            $this->template->load('default','Miscellaneous/Surveys/Data/baseline_survey_details',$data);
        }
    }

    public function generate_pdf_document(){

        $html_string = '
            <table border="1" align="center" width="400" style="border-collapse: collapse;">
            <tr><td>Name : </td><td>Name</td></tr>
            <tr><td>Email : </td><td>Email</td></tr>
            <tr><td>Age : </td><td>21</td></tr>
            <tr><td>Country : </td><td>Uganda</td></tr>
            </table>
        ';

        //Get output html
//        $html = $this->output->get_output();
//        $html = '<h2>Data</h2>';

        //Load html content
        $this->pdf->loadHtml($html_string);

        //Set Paper size and orientation
        $this->pdf->setPaper('A4', 'portrait');

        // Render HTML as PDF
        $this->pdf->render();

        //Output the pdf
        $this->pdf->stream("",array("Attachment" => false));

        exit(0);

    }

}
?>