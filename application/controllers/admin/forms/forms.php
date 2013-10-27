<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/forms_view');
    }

}