<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Connecting
 *
 * This is a connecting document
 *
 * @package     CodeIgniter
 * @subpackage  Connecting Rest Server
 * @category    Controller
 * @author      Fire
*/


class SMS extends Admin_Controller
{
    public function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('sms');
    }

}