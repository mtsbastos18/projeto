<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    /**
     * present master page includes header and footer
     * @param string $main_containt
     * @param array $data
     */
    function view($main_containt, $data = null)
    {
        $this->load->view('theme/header');
        $this->load->view($main_containt, $data);
    }
}
