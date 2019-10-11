<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function index()
	{
		$data=array(
			'page'=>'admin/penduduk/listpenduduk',
			'link'=>'mempelai'
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
}
