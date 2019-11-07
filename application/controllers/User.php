<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('UserModel'));
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
	
	public function index() {
		$data=array(
			'page'=>'admin/user/listuser',
			'link'=>'user',
			'isi'=>$this->UserModel->listall()->result(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function formtambah() {
		$data=array(
			'page'=>'admin/user/tambah',
			'link'=>'user',
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function simpan(){		
		$simpan=$this->UserModel->simpan();

		if($simpan){
			echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'user";</script>';
		}	
		else{
			echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'user/formtambah";</script>';
		}
	}

	public function formubah($iduser)
	{
		$data=array(
			'page'=>'admin/user/ubah',
			'link'=>'user',
			'isi'=>$this->UserModel->getdata($iduser)->row(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function ubah(){
		$ubah=$this->UserModel->ubah();
		if($ubah){
			echo '<script>alert("Data Berhasil Diubah");window.location = "'.base_url().'user";</script>';
		}	
		else{
			echo '<script>alert("Data Gagal Diubah");window.location = "'.base_url().'user?>";</script>';
		}
	}

	public function hapus($iduser){
		$hapus=$this->UserModel->hapus($iduser);
		if($hapus){
				echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'user";</script>';
		}
		else{
			echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'user?>";</script>';
		}
	}

	public function reset($iduser){
		$hapus=$this->UserModel->reset($iduser);
		if($hapus){
				echo '<script>alert("Password Berhasil Direset");window.location = "'.base_url().'user";</script>';
		}
		else{
			echo '<script>alert("Password Gagal Direset");window.location = "'.base_url().'user?>";</script>';
		}
	}
}
