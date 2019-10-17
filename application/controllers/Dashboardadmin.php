<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','PernikahanModel','PencarianModel','TanggapanModel'));
        
	}
	public function index()
	{
		$data=array(
			'page'=>'admin/beranda',
			'link'=>'dashboard',
			'warga'=>$this->WargaModel->getCount()->result(),
			'pernikahan'=>$this->PernikahanModel->getCount()->result(),
			'pencarian'=>$this->PencarianModel->getCount()->result(),
			'tanggapan'=>$this->TanggapanModel->getCount()->result()
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
}