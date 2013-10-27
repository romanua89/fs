<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Icons extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/icons_view');
    }

}