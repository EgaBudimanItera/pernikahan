<?php
class TanggapanModel extends CI_Model {
	function simpan(){
		$data=array(
			'nik'=>$this->input->post('nik',true),
			'namalengkap'=>$this->input->post('namalengkap',true),
			'isitanggapan'=>$this->input->post('isitanggapan',true),
		);

		$this->db->insert('tb_tanggapan', $data);
		return true;
	}
}