<?php
class PencarianModel extends CI_Model {    
	function pencarian() {
		$nik = $this->input->post('nik');
		
		$data=array(
			'nikcari'=> $nik,
			'tglcari'=> date('Y-m-d H:i:s'),
		);

		$this->db->insert('tb_pencarian', $data);

		return $query = $this->db->query("SELECT * FROM  tb_warga WHERE nik LIKE '%$nik%'");
	}
    
	function detailpencarian($nik) {
		return $query = $this->db->query(
      "SELECT w.*, sn.namastatus
        FROM  tb_warga w INNER JOIN tb_statusnikah sn ON w.statusnikah = sn.idstatus
        WHERE w.nik='$nik'"
    );
  }
  
  function getIstri($nik, $status) {
    return $query = $this->db->query(
			"SELECT 
				p.*, 
				w.nik AS nik, w.namalengkap, w.foto, w.alamat
			FROM 
				tb_pernikahan p 
				INNER JOIN 
					tb_warga w ON p.nikistri = w.nik 
      WHERE p.niksuami = '$nik' AND p.statusnikah = '$status'
		");
  }

  function getSuami($nik, $status) {
    return $query = $this->db->query(
			"SELECT 
				p.*, 
				w.nik AS nik, w.namalengkap, w.foto, w.alamat
			FROM 
				tb_pernikahan p 
				INNER JOIN 
					tb_warga w ON p.niksuami = w.nik 
      WHERE p.nikistri = '$nik' AND p.statusnikah = '$status'
		");
	}
	
	function getAll() {		
    return $query = $this->db->query(
			"SELECT 
				*, COUNT(nikcari) AS pencarianterbanyak 
			FROM tb_pencarian 
				GROUP BY nikcari 
					ORDER BY pencarianterbanyak 
						DESC
		");
	}

	function getCount() {
		return $query = $this->db->query("SELECT COUNT(*) as jumlah FROM  tb_pencarian");
    }
}