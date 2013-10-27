<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback_msgs extends CI_Controller {

    function index(){

        $this->load->view('admin/main-pages/feedback_msgs_view');
    }

}