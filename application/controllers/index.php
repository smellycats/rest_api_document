<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Index
 *
 * This is a document
 *
 * @package		CodeIgniter
 * @subpackage	Cgs Rest Server
 * @category	Controller
 * @author		Fire
*/


class Index extends Admin_Controller
{
	  public function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }
    
    /**
     * decument index
     * 
     * @return void
     */
    public function index()
    {
        $this->load->view('index');
    }


}