<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('UserModel'));
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
