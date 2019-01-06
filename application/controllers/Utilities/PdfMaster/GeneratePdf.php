<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 7:55 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/MainController.php');

class GeneratePdf extends MainController{

    public function __construct($html)
    {
        parent::__construct();

        //Get output html
//        $html = $this->output->get_output();

        //Load the pdf library
        $this->load->library('Pdf');

        //Load html content
        $this->dompdf->loadHtml($html);

        //Set Paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');

        // Render HTML as PDF
        $this->dompdf->render();

        //Output the pdf
        $this->dompdf->stream("",array("Attachment" => false));

        exit(0);
    }

}
?>