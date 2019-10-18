<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pernikahan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','StatusNikah','PernikahanModel','UserModel'));
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

	public function index(){
		$data=array(
			'page'=>'admin/pernikahan/listpernikahan',
			'link'=>'pernikahan',
			'isi'=>$this->PernikahanModel->listall()->result()			
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
	// ==================start add Data=========
	public function formtambah(){
		$data=array(
			'page'=>'admin/pernikahan/tambah',
			'link'=>'pernikahan',
			'cowo'=>$this->WargaModel->getGender('Laki-Laki')->result(),
			'cewe'=>$this->WargaModel->getGender('Perempuan')->result(),
			
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function simpan(){
		$simpan=$this->PernikahanModel->simpan();
		if($simpan){
			echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'pernikahan";</script>';
		}	
		else{
			echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'pernikahan/formtambah";</script>';
		}
	}
	// ================end add Data=================

	// ===============detail data==================
	public function formdetail($idnikah)
	{
		$data=array(
			'page'=>'admin/pernikahan/detail',
			'link'=>'pernikahan',
			'statusnikah'=>$this->StatusNikah->listall()->result(),
			'isi'=>$this->PernikahanModel->getdata($idnikah)->row(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
	// ===============end detail data=================
	public function ubah(){
		$ubah=$this->PernikahanModel->ubah();
		
		if($ubah){
			echo '<script>alert("Data Berhasil Diubah");window.location = "'.base_url().'pernikahan";</script>';
		}	
		else{
			echo '<script>alert("Data Gagal Diubah");window.location = "'.base_url().'pernikahan?>";</script>';
		}
	}
	// ===========hapus data========================
	public function hapus($idnikah){
		$hapus=$this->PernikahanModel->hapus($idnikah);
		if($hapus){
			echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'pernikahan";</script>';
		}	
		else{
			echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'pernikahan?>";</script>';
			
		}
	}
	// =============end hapus data==================
}