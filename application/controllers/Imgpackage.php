<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Imgpackage
 *
 * This is Imgpackage document
 *
 * @package     CodeIgniter
 * @subpackage  Cgs Rest Server
 * @category    Controller
 * @author      Fire
*/


class Imgpackage extends Admin_Controller
{
    public function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('imgpackage');
    }

}