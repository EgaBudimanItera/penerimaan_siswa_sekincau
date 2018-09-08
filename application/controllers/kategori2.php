<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kategori2 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("m_mobil");
		$this->load->model("m_kategori");
		$this->load->model("m_merk");
		$this->load->model("m_produk");
	}
	
	public function index($filter,$pg){
		$data["page"]="kategori2";
		$data["daftarkategori"]= $this->m_kategori->get_data()->result();
		$data["daftarmerk"]= $this->m_merk->get_data()->result();
		$data["daftarmobil"]= $this->m_mobil->get9_kategori($filter,$pg);
		$data["kategori"] = $this->m_kategori->get_kategori($filter);
		$data["count"] = $this->m_mobil->mobilkategori($filter);
		
		$this->load->view('index',$data);	
	}
}
?>