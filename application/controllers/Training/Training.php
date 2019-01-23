<style>
    .page_break {
        page-break-before: always;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Training extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Trainings/training_model');
        $this->load->model('Trainings/courses_model');
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/Membership/membership_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Training | WACFO',

        );

        $data['data_set'] = $this->training_model->fetch();
        $data['courses'] = $this->courses_model->fetch();
        $data['topics'] = $this->courses_model->fetch_modules();

        $this->template->load('default', 'Training/Trainings/Data/trainings-data-list', $data);

    }

    public function edit(){
        $data = array(
            'title' => 'Edit Training Details',
        );

        $record_id = $this->uri->segment(3);
        $data['row_id'] = $record_id;
        $data['default_value_array'] = $this->training_model->fetch_single_row_data_to_edit($record_id);

        #Fetching the necessary data
        $data['courses_list'] = $this->courses_model->fetch();
        $data['topics'] = $this->courses_model->fetch_modules();

        # Performing Validation Checks
        $this->form_validation->set_rules('training_course', 'Course', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Training/Trainings/Modification/edit-training-registration-form', $data);
        } else {
            $training_course = $this->input->post('training_course');
            $training_module = $this->input->post('training_module');
            $objective_of_the_training = $this->input->post('objective_of_the_training');
            $date_of_the_training = $this->input->post('date_of_the_training');
            $venue_of_the_training = $this->input->post('venue_of_the_training');
            $name_of_trainer = $this->input->post('name_of_trainer');
            $trainer_is_staff = $this->input->post('trainer_is_staff');

            if ($trainer_is_staff) {
                $trainer_is_staff = 1;
            } else {
                $trainer_is_staff = 0;
            }

            $field_data = array(
                'DATE_OF_TRAINING' => $date_of_the_training,
                'COURSE' => $training_course,
                'TOPIC' => $training_module,
                'OBJECTIVE' => $objective_of_the_training,
                'VENUE' => $venue_of_the_training,
                'GROUP_INTENDED' => "",
                'CONDUCTED_BY' => $name_of_trainer,
                'IS_STAFF' => $trainer_is_staff,
            );

            $this->training_model->update_record($record_id, $field_data);

            redirect('trainings');

        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Training Details';

            $data['training_info'] =  $this->training_model->fetch_single_record($row_id);
            $this->template->load('default','Training/Trainings/Data/training_details',$data);
        }

    }

    public function create(){
        $data = array(
            'title' => 'New Training',
        );

        #Fetching the necessary data
        $data['courses_list'] = $this->courses_model->fetch();

        # Performing Validation Checks
        $this->form_validation->set_rules('training_course', 'Course', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Training/Trainings/Registration/new-training-registration-form', $data);
        } else {
            $training_course = $this->input->post('training_course');
            $training_module = $this->input->post('training_module');
            $objective_of_the_training = $this->input->post('objective_of_the_training');
            $date_of_the_training = $this->input->post('date_of_the_training');
            $venue_of_the_training = $this->input->post('venue_of_the_training');
            $name_of_trainer = $this->input->post('name_of_trainer');
            $trainer_is_staff = $this->input->post('trainer_is_staff');

            if ($trainer_is_staff) {
                $trainer_is_staff = 1;
            } else {
                $trainer_is_staff = 0;
            }

            $field_data = array(
                'DATE_OF_TRAINING' => $date_of_the_training,
                'COURSE' => $training_course,
                'TOPIC' => $training_module,
                'OBJECTIVE' => $objective_of_the_training,
                'VENUE' => $venue_of_the_training,
                'GROUP_INTENDED' => "",
                'CONDUCTED_BY' => $name_of_trainer,
                'IS_STAFF' => $trainer_is_staff,
            );

            $this->training_model->insert_record($field_data);

            redirect('trainings');

        }
    }

    public function generate_attendance_sheet_pdf()
    {
        $record_id = $this->uri->segment(3);
//        echo $record_id;
        # Feting information regarding the training
        $training_data = $this->training_model->fetch_single_row_data_to_edit($record_id);

        foreach ($training_data->result() as $data) {
            $date_of_training = $data->DATE_OF_TRAINING;
            $course_code = $data->COURSE;
            $topic = $data->TOPIC;
            $objective = $data->OBJECTIVE;
            $venue = $data->VENUE;
        }

        $topic_name = $this->courses_model->get_name_of_topic($topic);

        $groups_intended = $this->courses_model->fetch_course_target_groups($course_code);

        foreach ($groups_intended->result() as $group) {
            $target_group = $group->GROUP_TRAINED;
        }

        $target_group = explode(',', $target_group);
//        print_r($target_group);

        $livelihoodgroups = $this->grouping_model->get_groups_under_this_category($target_group);

//        print_r($livelihoodgroups->result());
        $html_content = '';
        foreach ($livelihoodgroups->result() as $group) {

            $group_members = $this->membership_model->prepare_list_of_members_for_this_group($group->GROUP_ID);

//            echo $group_members;

            if (!empty($group_members)) {

                $html_content .= '<h3>GROUP:  ' . $group->NAME . '</h3>';
                $html_content .= $group_members;
//            $html_content .= '<div class="page_break"></div>';
//            echo $html_content;
            }

        }
        echo $html_content;
        $this->pdf->loadHtml($html_content);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();

        $this->pdf->stream("" . $record_id . ".pdf", array("Attachment" => 1));

        if (headers_sent($f, $l)) {
            echo $f, '<br/>', $l, '<br/>';
            die('now detect line');
        }

    }

    public function generate_detailed_pdf(){

    }

}
?>