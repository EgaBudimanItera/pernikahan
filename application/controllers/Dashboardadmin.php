<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','PernikahanModel','PencarianModel','TanggapanModel','UserModel'));
		if($this->session->userdata('status') != "login"){
		    echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'login";</script>';
		}else{
	       $iduser = $this->session->userdata('iduser');
	       $where=array('iduser'=>$iduser);
	       $cek=$this->UserModel->cek_login($where)->num_rows(); 
	       if($cek == 0){
	           echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'login";</script>';
	       }
		}  
        
	}
	public function index()
	{
		$jumlah_pernikahan_per_bulan = $this->PencarianModel->jumlahPernikahan()->result();
		$arrData = [];
		for ($i=1; $i < 13; $i++) {
			$obj = [
				"bulan" => $i,
				"jumlah" => 0
			];

			foreach ($jumlah_pernikahan_per_bulan as $data) {
				if($i == $data->bulan) {
					$obj = [
						"bulan" => $data->bulan,
						"jumlah" => $data->jumlah
					];
				}
			}
			array_push($arrData, $obj);
		}

		$data=array(
			'page'=>'admin/beranda',
			'link'=>'dashboard',
			'warga'=>$this->WargaModel->getCount()->result(),
			'pernikahan'=>$this->PernikahanModel->getCount()->result(),
			'pencarian'=>$this->PencarianModel->getCount()->result(),
			'tanggapan'=>$this->TanggapanModel->getCount()->result(),
			'topsearch'=>$this->PencarianModel->topFiveSearch()->result(),
			'arrData' => $arrData
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
}