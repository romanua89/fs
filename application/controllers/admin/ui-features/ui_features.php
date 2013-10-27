<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ui_features extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/ui_features_view');
    }

}