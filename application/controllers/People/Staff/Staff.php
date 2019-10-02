<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Staff extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

       // Load the models for this controller
        $this->load->model('People/Staff/staff_model');
        $this->load->model('Settings/departments_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Staff | WACFO',

        );

        $data = array(

            'title' => 'Membership | WACFO',

        );
        $data['staff_list'] = $this->staff_model->fetch();


        $this->template->load('default', 'People/Staff/Data/staff-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Register New Staff Member',
        );

        #Fetching the relevant data for registering a staff member

        $data['department_list'] = $this->departments_model->fetch();

        # Performing validation of input
        $this->form_validation->set_rules('staff_name', 'Name of the Staff', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Staff/Registration/staff-registration-form', $data);
        } else {
            $staff_name = $this->input->post('staff_name');
            $staff_position = $this->input->post('staff_position');
            $staff_department = $this->input->post('staff_department');
            $staff_telephone = $this->input->post('staff_telephone');
            $staff_email = $this->input->post('staff_email');

            # Modifying the staff telephone
            $staff_telephone = '256' . $staff_telephone;

            #Generating a new id for the staff
            $staff_id = $this->departments_model->generate_new_staff_id($staff_department);

            $field_data = array(
                'NAME' => $staff_name,
                'ROLE' => $staff_position,
                'DEPARTMENT	' => $staff_department,
                'EMAIL_ADDRESS' => $staff_email,
                'TELEPHONE' => $staff_telephone,
                'STAFF_ID' => $staff_id,
            );

            $this->staff_model->insert_record($field_data);

            redirect('staff');
        }


    }

    public function edit(){
        $record_id = $this->uri->segment(3);
        $data = array(
            'title' => 'Edit Details of Staff Member',
            'row_id' => $record_id,
        );

        #Fetching the relevant data for registering a staff member

        $data['department_list'] = $this->departments_model->fetch();
        $data['default_value_array'] = $this->staff_model->fetch_single_row_data_to_edit($record_id);

        # Performing validation of input
        $this->form_validation->set_rules('staff_name', 'Name of the Staff', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Staff/Modification/staff-registration-edit', $data);
        } else {
            $staff_name = $this->input->post('staff_name');
            $staff_position = $this->input->post('staff_position');
            $staff_department = $this->input->post('staff_department');
            $staff_telephone = $this->input->post('staff_telephone');
            $staff_email = $this->input->post('staff_email');

            # Modifying the staff telephone
            $staff_telephone = '256' . $staff_telephone;

            $department_changed = $this->staff_model->check_if_the_department_changed($record_id, $staff_department);

//            if($department_changed){
//
//
//                #Generating a new id for the staff
//                $staff_id = $this->departments_model->generate_new_staff_id($staff_department);

            $field_data = array(
                'NAME' => $staff_name,
                'ROLE' => $staff_position,
                'DEPARTMENT	' => $staff_department,
                'EMAIL_ADDRESS' => $staff_email,
                'TELEPHONE' => $staff_telephone,
//                    'STAFF_ID' => $staff_id,
            );
//            }else{
//
//                $field_data = array(
//                    'NAME' => $staff_name,
//                    'ROLE' => $staff_position,
//                    'EMAIL_ADDRESS' => $staff_email,
//                    'TELEPHONE' => $staff_telephone,
//                );
//            }

            $this->staff_model->update_record($record_id, $field_data);

            redirect('staff');
        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Staff Details';

            $data['staff_info'] =  $this->staff_model->fetch_single_record($row_id);
            $this->template->load('default','People/Staff/Data/staff_details',$data);
        }

    }

    public function generate_pdf_document(){
        echo $this->uri->segment(3);

        if ($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $group_info = $this->staff_model->fetch_single_record($row_id);

            $html_content = '<h3>About ' . $row_id . '</h3>';
            $html_content .= $group_info;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("" . $row_id . ".pdf", array("Attachment" => 0));
        }

    }

    public function generate_detailed_pdf(){

    }

    public function filter_data(){
        $data['title'] = 'Filter Data in this table';
        $this->template->load('default', 'People/Staff/Data/filter-data', $data);
    }

}
?>