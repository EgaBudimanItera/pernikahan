<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('WargaModel','StatusNikah'));
        
	}
	public function index()
	{
		$data=array(
			'page'=>'admin/beranda',
			'link'=>'dashboard',
			
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
}