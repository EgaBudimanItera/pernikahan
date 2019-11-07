<?php
class UserModel extends CI_Model 

{
	function cek_login($where){      
        return $this->db->get_where('tb_user',$where);
    }

    function listall() {
        return $query = $this->db->query("SELECT * FROM  tb_user");
    }


    public function hapus($iduser){
        $this->db->delete('tb_user', array('iduser' => $iduser)); 
        return true;
    }

    public function getdata($iduser){
        $this->db->select('*')->from('tb_user')->where(array('iduser'=>$iduser));
        return $query=$this->db->get();
    }

	public function simpan(){
        $data=array(
            'namalengkap'=>$this->input->post('namalengkap',true),
            'namauser'=>$this->input->post('namauser',true),
            'password'=>$this->input->post('password',true),
        );
    
        $this->db->insert('tb_user', $data);
        return true;
    }

    public function ubah(){
        $data=array(
            'namalengkap'=>$this->input->post('namalengkap',true),
            'namauser'=>$this->input->post('namauser',true),
            'password'=>$this->input->post('password',true),
        );
    
        $this->db->where('iduser', $this->input->post('iduser',true));
        $this->db->update('tb_user', $data); 
        return true;
    }
    
    public function reset($iduser){
        $data=array(
            'password'=>123,
        );
    
        $this->db->where('iduser', $iduser);
        $this->db->update('tb_user', $data); 
        return true;
    }
}