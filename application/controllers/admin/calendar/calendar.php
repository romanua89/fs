<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/calendar_view');
    }

}