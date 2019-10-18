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
}
