<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/gallery_view');
    }

}