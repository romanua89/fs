<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grid extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/grid_view');
    }

}