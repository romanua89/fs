<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charts extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/charts_view');
    }

}