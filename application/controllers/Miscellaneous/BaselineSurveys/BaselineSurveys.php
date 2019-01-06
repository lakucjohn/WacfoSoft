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

        $this->template->load('default','Miscellaneous/Surveys/Registration/porticus-baseline-survey-questionnaire',$data);
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