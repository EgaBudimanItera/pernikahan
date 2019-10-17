<?php
class TanggapanModel extends CI_Model {
  
  function listall(){
    $this->db->select('*')->from('tb_tanggapan');
    return $query=$this->db->get();
  }

	function simpan(){
		$data=array(
			'nik'=>$this->input->post('nik',true),
			'namalengkap'=>$this->input->post('namalengkap',true),
			'isitanggapan'=>$this->input->post('isitanggapan',true),
		);

		$this->db->insert('tb_tanggapan', $data);
		return true;
	}

	function getCount() {
		return $query = $this->db->query("SELECT COUNT(*) as jumlah FROM  tb_tanggapan");
    }
}