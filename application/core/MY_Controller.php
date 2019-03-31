<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    function __construct() 
    {
        parent::__construct();

        if (!is_logged_in()){
            redirect('/login','refresh');
        }
    }
   
    function view($main_containt, $data = null)
    {
        $this->load->view('theme/header',$data);
        $this->load->view($main_containt, $data);
    }
}
