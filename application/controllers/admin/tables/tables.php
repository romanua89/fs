<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tables extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/tables_view');
    }

}