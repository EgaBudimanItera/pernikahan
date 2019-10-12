<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pernikahan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','StatusNikah','PernikahanModel'));
        
	}

	public function index(){
		$data=array(
			'page'=>'admin/pernikahan/listpernikahan',
			'link'=>'pernikahan',
			'isi'=>$this->PernikahanModel->listall()->result(),
			
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

	public function formtambah(){
		$data=array(
			'page'=>'admin/pernikahan/tambah',
			'link'=>'pernikahan',
			'cowo'=>$this->WargaModel->getGender('Laki-Laki')->result(),
			'cewe'=>$this->WargaModel->getGender('Perempuan')->result(),
			
		);
		$this->load->view('admintemplate/wrapper',$data);
	}

}