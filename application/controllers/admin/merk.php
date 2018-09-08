<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merk extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("m_merk");
		$this->load->model("m_login");
	}

	public function index(){
		$data["page"]="merk";
		$data["daftar"]= $this->m_merk->get_data()->result();
		
		$username = $this->session->userdata('nama');
		$where = array(
			'username' => $username);		
		$data["dataadmin"]= $this->m_login->getadmin($where)->result();
		
		$this->load->view('admin/index',$data);	
	}
	
	public function save(){
		$kodemerk = $this->input->post('kodemerk');
		$namamerk = $this->input->post('namamerk');
		
		$data = array(
			'kodemerk' => $kodemerk,
			'namamerk' => $namamerk
		);
		$this->m_merk->save_data($data);
		redirect('admin/merk');
	}
	
	public function update()
	{
		$kodemerk = $this->input->post('kodemerk');
		$namamerk = $this->input->post('namamerk');
		$data = array(
			'namamerk' => $namamerk
		);
		
		$where = array(
			'kodemerk' => $kodemerk
		);
		
		$this->m_merk->update_data($where,$data);
		redirect('admin/merk');
	}
	
	public function delete()
	{
		$kodemerk = $this->input->post('kodemerk');
		
		$where = array(
			'kodemerk' => $kodemerk
		);
		
		$this->m_merk->delete_data($where);
		redirect('admin/merk');
	}
}
?>