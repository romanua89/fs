<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Work_list extends CI_Controller{

    function index(){
        $this->load->model('deal-list/deal_list_model');
        $data['deals'] = $this->deal_list_model->get_deals();
        $this->load->view('main_pages/deals_view', $data);


        $this->output->enable_profiler(TRUE);
    }

    function add_deal_page(){
        $this->load->view('main_pages/add_deal_view');
    }




}
