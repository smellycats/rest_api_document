<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Cgs
 *
 * This is cgs document
 *
 * @package     CodeIgniter
 * @subpackage  Cgs Rest Server
 * @category    Controller
 * @author      Fire
*/


class Cgs extends Admin_Controller
{
    public function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('cgs');
    }

}