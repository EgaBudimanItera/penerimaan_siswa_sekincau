<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model('M_pendaftaran');
	}
	
	public function index(){
		$data=array(
		   'page'=>'home',
		   'nis'=>$this->M_pendaftaran->nis(),
		);
		// $data["page"]="home";
		// $data["daftarkategori"]= $this->m_kategori->get_data()->result();
		// $data["daftarmerk"]= $this->m_merk->get_data()->result();
		// $data["lastmobil"]= $this->m_mobil->get_last();
		// $data["randmobil"]= $this->m_mobil->get_random();
		// $data["jumlahnya"]=$this->m_produk->jumlahbeli($this->session->userdata('nama'));
		// $data["cart"]=$this->m_produk->cartnya($this->session->userdata('nama'));
		// $da=$this
		$this->load->view('index',$data);	
	}
}
