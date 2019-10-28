<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('PencarianModel', 'PernikahanModel', 'WargaModel'));
	}
	
	public function visimisi() {
		$data=array(
			'page'=>'umumtemplate/visimisi',
			'link'=>'/profil/visi dan Misi',
			'link2'=>'profil',
      		
    	);
    
		$this->load->view('umumtemplate/visimisi',$data);
	}

	public function sejarah() {
		$data=array(
			'page'=>'umumtemplate/sejarah',
			'link'=>'/pencarian/sejarah',
			'link2'=>'profil',
      		
    	);
    
		$this->load->view('umumtemplate/sejarah',$data);
	}

	public function lambang() {
		$data=array(
			'page'=>'umumtemplate/lambang',
			'link'=>'/pencarian/lambang',
			'link2'=>'profil',
      		
    	);
    
		$this->load->view('umumtemplate/lambang',$data);
	}

	public function struktur() {
		$data=array(
			'page'=>'umumtemplate/struktur',
			'link'=>'/pencarian/struktur',
			'link2'=>'profil',
      		
    	);
    
		$this->load->view('umumtemplate/struktur',$data);
	}
}