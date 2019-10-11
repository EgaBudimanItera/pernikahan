<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','StatusNikah'));
        
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

	public function formtambah()
	{
		$data=array(
			'page'=>'admin/penduduk/tambah',
			'link'=>'mempelai',
			'statusnikah'=>$this->StatusNikah->listall()->result(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
}
