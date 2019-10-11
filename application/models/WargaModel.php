<?php
class WargaModel extends CI_Model 
{
	function simpan(){
        $data=array(
            'nik'=>$this->input->post('nik',true),
            'namalengkap'=>$this->input->post('namalengkap',true),
            'alamat'=>$this->input->post('alamat',true),
            'jk'=>$this->input->post('jk',true),
            'statusnikah'=>$this->input->post('statusnikah',true),
            'statuslain'=>$this->input->post('statuslain',true),
            'foto'=>''
        );
        
        $this->db->insert('tb_warga', $data);
        return true;
    }

    function ceknik($nik){
        $this->db->select('*')->from('tb_warga')->like('nik','$nik');
        return $query=$this->db->get();
    }

    function listall(){
        $this->db->select('*')->from('tb_warga');
        return $query=$this->db->get();
    }
}