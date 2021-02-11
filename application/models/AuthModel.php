<?php
/**
 * Created by IntelliJ IDEA.
 * User: None Pc
 * Date: 11/02/2021
 * Time: 13:57
 */

class AuthModel extends CI_Model
{

    function adduser($data){
        $this->db->insert('user', $data);
    }

    function get(){
        $this->db->select('*')
            ->from('user');

        return $this->db->get()->result();
    }
}