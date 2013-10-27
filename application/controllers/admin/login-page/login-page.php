<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_page extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/login_page_view');
    }

}