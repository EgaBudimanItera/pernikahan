<?php
class UserModel extends CI_Model 

{
	function cek_login($where){      
        return $this->db->get_where('tb_user',$where);
    }

    function listall() {
        return $query = $this->db->query("SELECT * FROM  tb_user");
    }
}