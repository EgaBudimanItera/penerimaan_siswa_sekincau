<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobil extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("m_mobil");
		$this->load->model("m_kategori");
		$this->load->model("m_login");
		$this->load->model("m_merk");
	}

	public function index(){
		$this->load->database();
		$data["page"]="mobil";
		$data["daftar"]= $this->m_mobil->get_mobil();
		$data["daftarkategori"]= $this->m_kategori->get_data()->result();
		$data["daftarmerk"]= $this->m_merk->get_data()->result();

		$username = $this->session->userdata('nama');
		$where = array(
			'username' => $username);		
		$data["dataadmin"]= $this->m_login->getadmin($where)->result();
		
		$this->load->view('admin/index',$data);	
	}
	
	public function save(){
		$config['upload_path']          = './fotomobil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$namafile = $_FILES['gambar']['name'];
		
		$kodemobil = $this->input->post('kodemobil');
		$jenismobil = $this->input->post('jenismobil');
		$hargasewa = $this->input->post('hargasewa');
		$deskripsi = $this->input->post('deskripsi');
		$kodekategori = $this->input->post('kodekategori');
		$promo = $this->input->post('promo');
		$kodemerk = $this->input->post('kodemerk');
		$data = array(
			'kodemobil' => $kodemobil,
			'jenismobil' => $jenismobil,
			'gambar' => $namafile,
			'hargasewa' => $hargasewa,
			'deskripsi' => $deskripsi,
			'kodekategori' => $kodekategori,
			'promo' => $promo,
			'kodemerk' => $kodemerk
		);		
		
		$this->load->library('upload', $config);
		$this->m_mobil->save_data($data);
		
		if(!$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			redirect('admin/mobil');
		}else{
			$data = array('upload_data' => $this->upload->data());
			redirect('admin/mobil');
		}
	}
	
	public function update()
	{
		$config['upload_path']          = './fotomobil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		
		if(!empty($_FILES['gambar']['name']))
		{
			$namafile = $_FILES['gambar']['name'];
			$kodemobil = $this->input->post('kodemobil');
			$jenismobil = $this->input->post('jenismobil');
			$hargasewa = $this->input->post('hargasewa');
			$deskripsi = $this->input->post('deskripsi');
			$kodekategori = $this->input->post('kodekategori');
			$promo = $this->input->post('promo');
			$kodemerk = $this->input->post('kodemerk');
			$data = array(
				'kodemobil' => $kodemobil,
				'jenismobil' => $jenismobil,
				'gambar' => $namafile,
				'hargasewa' => $hargasewa,
				'deskripsi' => $deskripsi,
				'kodekategori' => $kodekategori,
				'promo' => $promo,
				'kodemerk' => $kodemerk
			);	
			
			$where = array(
				'kodemobil' => $kodemobil
			);		
			$this->load->library('upload', $config);
			$this->m_mobil->update_data($where,$data);
		}
		else
		{
			$kodemobil = $this->input->post('kodemobil');
			$jenismobil = $this->input->post('jenismobil');
			$hargasewa = $this->input->post('hargasewa');
			$deskripsi = $this->input->post('deskripsi');
			$kodekategori = $this->input->post('kodekategori');
			$promo = $this->input->post('promo');
			$kodemerk = $this->input->post('kodemerk');
			$data = array(
				'kodemobil' => $kodemobil,
				'jenismobil' => $jenismobil,
				'hargasewa' => $hargasewa,
				'deskripsi' => $deskripsi,
				'kodekategori' => $kodekategori,
				'promo' => $promo,
				'kodemerk' => $kodemerk
			);			
			
			$where = array(
				'kodemobil' => $kodemobil
			);		
			
			$this->load->library('upload', $config);
			$this->m_mobil->update_data($where,$data);
		}
		
		if(!$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			redirect('admin/mobil');
		}else{
			$data = array('upload_data' => $this->upload->data());
			redirect('admin/mobil');
		}
	}
	
	public function delete()
	{
		$kodemobil = $this->input->post('kodemobil');
		
		$where = array(
			'kodemobil' => $kodemobil
		);
		
		$this->m_mobil->delete_data($where);
		redirect('admin/mobil');
	}
}
?>