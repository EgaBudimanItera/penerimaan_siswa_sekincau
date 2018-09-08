<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("m_kategori");
		$this->load->model("m_login");
	}

	public function index(){
		$data["page"]="kategori";
		$data["daftar"]= $this->m_kategori->get_data()->result();
		
		$username = $this->session->userdata('nama');
		$where = array(
			'username' => $username);		
		$data["dataadmin"]= $this->m_login->getadmin($where)->result();
		
		$this->load->view('admin/index',$data);	
	}
	
	public function save(){
		$kodekategori = $this->input->post('kodekategori');
		$namakategori = $this->input->post('namakategori');
		
		$data = array(
			'kodekategori' => $kodekategori,
			'namakategori' => $namakategori
		);
		$this->m_kategori->save_data($data);
		redirect('admin/kategori');
	}
	
	public function update()
	{
		$kodekategori = $this->input->post('kodekategori');
		$namakategori = $this->input->post('namakategori');
		$data = array(
			'namakategori' => $namakategori
		);
		
		$where = array(
			'kodekategori' => $kodekategori
		);
		
		$this->m_kategori->update_data($where,$data);
		redirect('admin/kategori');
	}
	
	public function delete()
	{
		$kodekategori = $this->input->post('kodekategori');
		
		$where = array(
			'kodekategori' => $kodekategori
		);
		
		$this->m_kategori->delete_data($where);
		redirect('admin/kategori');
	}
	
	public function updateprofile()
	{
		$username = $this->session->userdata('nama');
		$namaadmin = $this->input->post('namaadmin');
		$alamatadmin = $this->input->post('alamatadmin');
		$jkadmin = $this->input->post('jkadmin');
		$teleponadmin = $this->input->post('teleponadmin');
				
		$data = array(
			'namaadmin' => $namaadmin,
			'alamatadmin' => $alamatadmin,
			'jkadmin' => $jkadmin,
			'teleponadmin' => $teleponadmin
		);
		$where = array(
			'username' => $username
		);		
		
		$this->m_login->updateprofile($where,$data);
		redirect('admin/home');
	}
	
	public function updatepassword()
	{
		$username = $this->session->userdata('nama');
		$passwordlama = $this->input->post('passwordlama');
		$passwordbaru = $this->input->post('passwordbaru');
		$konfirmasipassword = $this->input->post('konfirmasipassword');
		
		if($passwordlama!=$this->session->userdata('nama'))
		{
					
		}
		else if($passwordbaru!=$konfirmasipassword)
		{
			
		}
		else
		{
			$data = array(
				'password' => $konfirmasipassword
			);
			$where = array(
				'username' => $username
			);		
			$this->m_login->updatepassword($where,$data);
		}
		redirect('admin/home');
	}
	
	
	public function updatefoto()
	{
		if(!empty($_FILES['foto']['name']))
		{
			$config['upload_path']          = './fotoprofil/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$namafile = $_FILES['foto']['name'];
			$username = $this->session->userdata('nama');
				
			$data = array(
				'fotoadmin' => $namafile
			);
			$where = array(
				'username' => $username
			);	
			$this->load->library('upload', $config);
			$this->upload->do_upload('foto');
		$this->m_login->updatefoto($where,$data);	
		}
		redirect('admin/home');
	}
}
?>