<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Groupings extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('People/Groupings/grouping_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Livelihood Groups | WACFO',

        );



            $data['group_list'] = $this->grouping_model->fetch();

            $this->template->load('default', 'People/Livelihood/Groupings/Data/groupings-data-list', $data);



    }

    public function details(){

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Group Details';

            $data['group_info'] =  $this->grouping_model->fetch_single_record($row_id);
            $this->template->load('default','People/Livelihood/Groupings/Data/group_details',$data);
        }
    }

    public function create(){
        $data = array(
            'title' => 'New Livelihood Group',
        );

        $this->template->load('default','People/Livelihood/Groupings/Registration/new-livelihood-grouping',$data);
    }

    public function edit(){

        $data['title'] = 'Edit Group Info';

    }

    public function generate_pdf_document(){

        if($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $group_info =  $this->grouping_model->fetch_single_record($row_id);

            $html_content = '<h3>About '.$row_id.'</h3>';
            $html_content .= $group_info;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("".$row_id.".pdf",array("Attachment"=>0));
        }

    }

}
?>