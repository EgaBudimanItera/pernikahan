<?php
class StatusNikah extends CI_Model 
{
	
	

	function simpan(){
        
        $data=array(
            'namastatus'=>$this->input->post('namastatus',true),
        );
        
        
        $this->db->insert('tb_statusnikah', $data);
        return true;
    }

    

    function listall(){
        $this->db->select('*')->from('tb_statusnikah');
        return $query=$this->db->get();
    }
}