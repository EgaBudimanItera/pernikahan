<?php
class PernikahanModel extends CI_Model 
{

	function listall(){
        return $this->db->query('SELECT idnikah,niksuami,(select namalengkap from tb_warga b where b.nik=a.niksuami)as namasuami,nikistri,(select namalengkap from tb_warga c where c.nik=a.nikistri)as namaistri,tglnikah,penghulu,statusnikah,lokasinikah from tb_pernikahan a');
        
    }
}