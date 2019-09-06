<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/15/19
 * Time: 9:59 AM
 */

include_once(APPPATH . 'controllers/AuthContentController.php');

class Support_outcome extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('People/support_model');
    }

    public function edit_support_outcome_content()
    {
        if (isset($_POST['row_id']) & isset($_POST['support_outcome'])) {
            $row_id = $_POST['row_id'];
            $support_outcome = $_POST['support_outcome'];
            $realisation_date = $_POST['realisation_date'];
            $support_type = $_POST['support_type'];

            $currentDate = date('Y-m-d');

            if (!empty($realisation_date)) {
                $field_data = array(
                    'SUPPORT_ID' => $row_id,
                    'BENEFICIARY' => $this->support_model->get_supported_entity_value($row_id),
                    'TYPE' => $support_type,
                    'OUTCOME' => $support_outcome,
                    'TIMESTAMP' => $realisation_date,
                );

            } else {

                $field_data = array(
                    'SUPPORT_ID' => $row_id,
                    'BENEFICIARY' => $this->support_model->get_supported_entity_value($row_id),
                    'TYPE' => $support_type,
                    'OUTCOME' => $support_outcome,
                    'TIMESTAMP' => $currentDate,
                );

            }

//            print_r($field_data);

            $this->support_model->insert($field_data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

}

?>