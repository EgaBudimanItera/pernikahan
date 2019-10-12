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

}