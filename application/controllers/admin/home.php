<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("m_login");
	}

	public function index(){
		$data["page"]="home";
		$username = $this->session->userdata('nama');
		$where = array(
			'username' => $username);		
		$data["dataadmin"]= $this->m_login->getadmin($where)->result();
		
		$this->load->view('admin/index',$data);	
	}
}
?>