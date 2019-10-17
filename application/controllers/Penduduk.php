<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','StatusNikah','UserModel'));
		if($this->session->userdata('status') != "login"){
		    echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'login";</script>';
		}else{
	       $iduser = $this->session->userdata('iduser');
	       $where=array('id_user'=>$iduser);
	       $cek=$this->UserModel->cek_login($where)->num_rows(); 
	       if($cek == 0){
	           echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'login";</script>';
	       }
		}  
        
	}
	public function index()
	{
		$data=array(
			'page'=>'admin/penduduk/listpenduduk',
			'link'=>'mempelai',
			'isi'=>$this->WargaModel->listall()->result(),
			'jumlah'=>$this->WargaModel->ceknik('1123')->num_rows(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
// =================Start add Data======================
	public function formtambah() {
		$data=array(
			'page'=>'admin/penduduk/tambah',
			'link'=>'mempelai',
			'statusnikah'=>$this->StatusNikah->listall()->result(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function simpan(){
		$jumlahnik=$this->WargaModel->ceknik($this->input->post('nik',true))->num_rows();
		
		if($jumlahnik=='0'){
			$simpan=$this->WargaModel->simpan();
				if($simpan){
					echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'penduduk";</script>';
				}	
				else{
					echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'penduduk/formtambah";</script>';
				}
		}else{
			echo '<script>alert("Data Gagal Disimpan!! NIK Sudah Terdaftar");window.location = "'.base_url().'penduduk/formtambah";</script>';
		}
	}
	// ======================End ADD Data========================

	// ======================start Edit Data==========================

	public function formubah($nik)
	{
		$data=array(
			'page'=>'admin/penduduk/ubah',
			'link'=>'mempelai',
			'statusnikah'=>$this->StatusNikah->listall()->result(),
			'isi'=>$this->WargaModel->getdata($nik)->row(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function ubah(){
		$ubah=$this->WargaModel->ubah();
		if($ubah){
			echo '<script>alert("Data Berhasil Diubah");window.location = "'.base_url().'penduduk";</script>';
		}	
		else{
			echo '<script>alert("Data Gagal Diubah");window.location = "'.base_url().'penduduk?>";</script>';
		}
	}
	// ======================End Edit Data==========================


	//==============start hapus data=================

	public function hapus($nik){
		$hapus=$this->WargaModel->hapus($nik);
		if($hapus){
         	echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'penduduk";</script>';
      	}	
      	else{
         	echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'penduduk?>";</script>';
         
      	}
	}

	//========================end hapus data================


	//==============get Penduduk=================
	public function getPenduduk($nik){
		$data=$this->WargaModel->getdata($nik)->row_array();
        echo json_encode($data);
	}
	// ==========end get Penduduk=================
}
