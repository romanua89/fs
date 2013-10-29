<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {


    function index()
    {
        $this->load->view('main_pages/feedback_view');

    }
    function add(){

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('text', 'text', 'required');

        if($this->form_validation->run()){
            $data['message'] = 'the email was sent';
            $this->load->view('main_pages/feedback_view', $data);
        }else{
            $this->load->view('main_pages/feedback_view');
        }


    }




}

