<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("m_mobil");
		$this->load->model("m_kategori");
		$this->load->model("m_merk");
		$this->load->model("m_produk");
	}
	
	public function index(){
		$data["page"]="home";
		$data["daftarkategori"]= $this->m_kategori->get_data()->result();
		$data["daftarmerk"]= $this->m_merk->get_data()->result();
		$data["lastmobil"]= $this->m_mobil->get_last();
		$data["randmobil"]= $this->m_mobil->get_random();
		$data["jumlahnya"]=$this->m_produk->jumlahbeli($this->session->userdata('nama'));
		$data["cart"]=$this->m_produk->cartnya($this->session->userdata('nama'));
		
		$this->load->view('index',$data);	
	}
}
?>