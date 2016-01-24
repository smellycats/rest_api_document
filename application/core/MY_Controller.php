<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Admin Controller
 * 
 * 添加url helper 和header
 *
 * @package     CodeIgniter
 * @subpackage  Core
 * @category    Core
 * @author      Fire
*/
class Admin_Controller extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
         
        $this->load->helper('url');

        $this->load->config('myconfig');

        header('Cache-Control:public, max-age=60, s-maxage=60');
    }

 }