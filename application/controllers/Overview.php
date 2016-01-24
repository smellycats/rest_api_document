<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Overview
 *
 * This is Overview document
 *
 * @package     CodeIgniter
 * @category    Controller
 * @author      Fire
*/


class Overview extends Admin_Controller
{
    public function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('overview');
    }

}