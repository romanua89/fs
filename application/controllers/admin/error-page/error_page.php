<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Erorr_page extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/error_page_view');
    }

}