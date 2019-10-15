<?php
class PernikahanModel extends CI_Model 
{

	function listall(){
		return $this->db->query('SELECT idnikah,niksuami,(select namalengkap from tb_warga b where b.nik=a.niksuami)as namasuami,nikistri,(select namalengkap from tb_warga c where c.nik=a.nikistri)as namaistri,tglnikah,penghulu,statusnikah,lokasinikah from tb_pernikahan a');
	}

	function simpan(){
		$data=array(
			'niksuami'=>$this->input->post('niksuami',true),
			'nikistri'=>$this->input->post('nikistri',true),
			'tglnikah'=>$this->input->post('tglnikah',true),
			'penghulu'=>$this->input->post('penghulu',true),
			'statusnikah'=>'2',
			'lokasinikah'=>$this->input->post('lokasinikah',true),
		);

		$this->db->insert('tb_pernikahan', $data);
		return true;
	}

	function ubah() {
		$status = $this->input->post('statusnikah',true);

		$this->db->set('p.statusnikah', $status);
		$this->db->where('p.idnikah', $this->input->post('idnikah', true));
		$this->db->update('tb_pernikahan as p');
		
		$this->db->set('wl.statusnikah', $status);
		$this->db->where('wl.nik', $this->input->post('niksuami', true));
		$this->db->update('tb_warga as wl');
		
		$this->db->set('wp.statusnikah', $status);
		$this->db->where('wp.nik', $this->input->post('nikistri', true));
		$this->db->update('tb_warga as wp');

		return true;
	}

	public function hapus($idnikah){
		$this->db->delete('tb_pernikahan', array('idnikah' => $idnikah)); 
		return true;
	}

	function getdata($idnikah) {
		return $this->db->query(
			'SELECT 
					p.*, 
					wl.nik AS niksuami, wl.namalengkap AS namasuami, wl.foto AS fotosuami, wl.alamat AS alamatsuami, 
					wp.nik AS nikistri, wp.namalengkap AS namaistri, wp.foto AS fotoistri, wp.alamat AS alamatsuami
				FROM 
					tb_pernikahan p 
					INNER JOIN 
						tb_warga wl ON p.niksuami = wl.nik 
					INNER JOIN 
						tb_warga wp ON p.nikistri = wp.nik
				WHERE p.idnikah = '.$idnikah.'
			'
		);
	}

}