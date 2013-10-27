<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_manager extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/file_manager_view');
    }

}