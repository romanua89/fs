<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {


    function index()
    {
        echo 'first';
        //$this->load->view('main_pages/home_page_view');





        $this->output->enable_profiler(TRUE);
    }




}

