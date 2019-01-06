<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:30 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**


 * CodeIgniter PDF Library
 *
 * Generate PDF's in your CodeIgniter applications.
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          Chris Harvey
 * @license         MIT License
 * @link            https://github.com/chrisnharvey/CodeIgniter-PDF-Generator-Library



 */

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Pdf extends Dompdf{

    public function __construct()
    {
        parent::__construct();
//        require_once dirname(__FILE__).'/dompdf/autoload.inc.php';
//
//        // Instantiate and use the dompdf class
//        $pdf = new DOMPDF();
//
//        $CI =& get_instance();
//
//        $CI -> dompdf = $pdf;

    }

}