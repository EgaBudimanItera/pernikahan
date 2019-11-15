<?php
class WargaModel extends CI_Model 
{
	public function simpan(){

        $config ['upload_path'] = './assets/';
        $config ['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
        $config ['max_size'] = '2048';
        $this->load->library('upload');
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('foto')){
            echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a> '.$this->upload->display_errors().'</div>';
            exit();
        }
        else {
            $upload_data = $this->upload->data();
            $data=array(
                'nik'=>$this->input->post('nik',true),
                'namalengkap'=>$this->input->post('namalengkap',true),
                // 'no_ktp'=>$this->input->post('no_ktp',true),
                // 'umur'=>$this->input->post('umur',true),
                'tanggallahir'=>$this->input->post('tanggallahir',true),
                'pekerjaan'=>$this->input->post('pekerjaan',true),
                'pendidikan'=>$this->input->post('pendidikan',true),
                'alamat'=>$this->input->post('alamat',true),
                'jk'=>$this->input->post('jk',true),
                'statusnikah'=>$this->input->post('statusnikah',true),
                'statuslain'=>$this->input->post('statuslain',true),
                'foto'=>$upload_data['file_name'],
            );
        
            $this->db->insert('tb_warga', $data);
            return true;
        }
    }
    public function ubah(){
        $config ['upload_path'] = './assets/';
        $config ['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
        $config ['max_size'] = '2048';
        $this->load->library('upload');
        $this->upload->initialize($config);
        $namafile='';
        
        if(!$this->upload->do_upload('foto')){
            echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a> '.$this->upload->display_errors().'</div>';
            exit();
        }

        if($this->upload->do_upload('foto')){
            $upload_data = $this->upload->data();
            $namafile=$upload_data['file_name'];
        } else {
            $namafile=$this->input->post('foto2',true);
        }
            
        $data=array(
            
            'namalengkap'=>$this->input->post('namalengkap',true),
            // 'no_ktp'=>$this->input->post('no_ktp',true),
            // 'umur'=>$this->input->post('umur',true),
            'tanggallahir'=>$this->input->post('tanggallahir',true),
            'pekerjaan'=>$this->input->post('pekerjaan',true),
            'pendidikan'=>$this->input->post('pendidikan',true),
            'alamat'=>$this->input->post('alamat',true),
            'jk'=>$this->input->post('jk',true),
            'statusnikah'=>$this->input->post('statusnikah',true),
            'statuslain'=>$this->input->post('statuslain',true),
            'foto'=>$namafile,
        );
    
        
        $this->db->where('nik', $this->input->post('nik',true));
        $this->db->update('tb_warga', $data); 
        return true;
    }

    public function hapus($nik){
        $this->db->delete('tb_warga', array('nik' => $nik)); 
        return true;
    }

    public function ceknik($nik){	    
	return $query = $this->db->query("SELECT * FROM  tb_warga WHERE nik = '$nik'");
    }

    public function listall(){
        $this->db->select('*')->from('tb_warga');
        return $query=$this->db->get();
    }

    public function getdata($nik){
        $this->db->select('*')->from('tb_warga')->where(array('nik'=>$nik));
        return $query=$this->db->get();
    }

    public function getGender($tipe){
        $this->db->select('*')->from('tb_warga')->where(array('jk'=>$tipe));
        return $query=$this->db->get();
    }

	function getRandomData() {
		return $query = $this->db->query("SELECT * FROM  tb_warga ORDER BY RAND() LIMIT 0,8");
    }

	function getCount() {
		return $query = $this->db->query("SELECT COUNT(*) as jumlah FROM  tb_warga");
    }
}
