<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/tour_view');
    }

}