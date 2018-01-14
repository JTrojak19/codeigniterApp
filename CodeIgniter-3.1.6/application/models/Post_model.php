<?php
/**
 * Created by PhpStorm.
 * User: joasi
 * Date: 13.01.2018
 * Time: 11:03
 */

class Post_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getPosts($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts', array('id' => $id));
        return $query->row_array();
    }
    public function createPost()
    {
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );
        print_r($data);
        return $this->db->insert('posts', $data);
    }
}