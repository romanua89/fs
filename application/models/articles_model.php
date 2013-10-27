<?php

class Articles_model extends CI_Model
{

    function get_articles()
    {
        $query = $this->db->query('SELECT * FROM articles');
        return $query->result_array();
    }

    function add_article($data)
    {
        $this->db->insert('articles', $data);
    }

    function edit_article($data)
    {
        $this->db->where('id', 1);
        $this->db->update('articles', $data);
    }

    function del_article($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');
    }



}

?>