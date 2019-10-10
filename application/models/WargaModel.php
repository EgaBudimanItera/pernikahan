<?php
class WargaModel extends CI_Model 
{
	public $nik;
	public $namalengkap;
	public $alamat;
	public $jk;
	public $statusnikah;
	public $statuslain;
	public $foto;

	function simpan(){
        $this->nik=$this->input->post('nik',true);
        $this->namalengkap=$this->input->post('namalengkap',true);
        $this->alamat=$this->input->post('alamat',true);
        $this->jk=$this->input->post('jk',true);
        $this->statusnikah=$this->input->post('statusnikah',true);
        $this->statuslain="hidup";
        
        $this->db->insert('tb_warga', $this);
        return true;
    }
}