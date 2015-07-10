<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kakou
 *
 * This is a kakou document
 *
 * @package     CodeIgniter
 * @subpackage  Kakou Rest Server
 * @category    Controller
 * @author      Fire
*/


class Kakou extends Admin_Controller
{
    public function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('kakou');
    }

}