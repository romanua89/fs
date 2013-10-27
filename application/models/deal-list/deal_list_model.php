<?php

class Deal_list_model extends CI_Model{

    function get_deals(){
        $query = $this->db->query('select * FROM deals');
        return $query->result_array();
    }


    function insert_deal($data){

        $this->db->insert('deals', $data);
    }


}



?>