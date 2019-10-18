<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('PencarianModel', 'PernikahanModel', 'WargaModel'));
	}
	
	public function index() {
		$data=array(
			'page'=>'umumtemplate/pencarian',
			'link'=>'/pencarian',
			'link2'=>'pencarian',
			'isi'=>$this->WargaModel->getRandomData()->result(),
		);
		$this->load->view('umumtemplate/pencarian',$data);
	}
	
	public function search() {
		$data=array(
			'page'=>'umumtemplate/hasilpencarian',
			'link'=>'/pencarian/search',
			'link2'=>'pencarian',
      		'isi'=>$this->PencarianModel->pencarian()->result(),
      		'keyword'=>$this->input->post('nik'),
    	);
    
		$this->load->view('umumtemplate/hasilpencarian',$data);
	}
	
	public function detail() {
    $nik = $_GET['nik'];
    $isi = $this->PencarianModel->detailpencarian($nik)->result();
    $jk = $isi[0]->jk;
    if($jk == "Laki-Laki"){
      $pasanganNikah = $this->PencarianModel->getIstri($nik, $status='2')->result();
      $pasanganCerai = $this->PencarianModel->getIstri($nik,  $status='5')->result();
    } else {
      $pasanganNikah = $this->PencarianModel->getSuami($nik,  $status='2')->result();
      $pasanganCerai = $this->PencarianModel->getSuami($nik,  $status='5')->result();
    }

		$data=array(
			'page'=>'umumtemplate/detailpencarian',
			'link'=>'/pencarian/detail',
			'link2'=>'pencarian',
      		'pasanganNikah'=>$pasanganNikah,
      		'pasanganCerai'=>$pasanganCerai,
      		'isi'=>$isi,
    	);
    
		$this->load->view('umumtemplate/detailpencarian',$data);
	}

	public function warga() {
		$data=array(
			'page'=>'admin/pencarian/listpencarian',
			'link'=>'pencarian/warga',
			'link2'=>'pencarian',
			'isi'=>$this->PencarianModel->getAll()->result(),
		);
		$this->load->view('admintemplate/wrapper',$data);
	}
  
}
