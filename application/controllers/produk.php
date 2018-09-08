<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("m_mobil");
		$this->load->model("m_kategori");
		$this->load->model("m_merk");
		$this->load->model("m_produk");
	}
		
	public function index($filter){
		$data["page"]="produk";
		$data["daftarkategori"]= $this->m_kategori->get_data()->result();
		$data["daftarmerk"]= $this->m_merk->get_data()->result();
		$data["dataproduk"]= $this->m_mobil->get_mobil($filter);
		$data["randmobil"]= $this->m_mobil->get_random();
		
		$this->load->view('index',$data);	
	}	
	
	public function sewa($filter){
		$kodepemesanan = date("Ymdgis");
		$tanggalpemesanan = date("Y-m-d");
		$kodemobil = $filter;
		$username = $this->session->userdata('nama');
		$jumlahhari = 1;
		$uangmuka = 0;
		$buktitransfer = "";
		$totalbiaya = $this->input->post('biaya');
		$sisapembayaran = $this->input->post('biaya');
		
		$data = array(
			'kodepemesanan' => $kodepemesanan,
			'tanggalpemesanan' => $tanggalpemesanan,
			'kodemobil' => $kodemobil,
			'username' => $username,
			'jumlahhari' => $jumlahhari,
			'uangmuka' => $uangmuka,
			'buktitransfer' => $buktitransfer,
			'totalbiaya' => $totalbiaya,
			'sisapembayaran' => $sisapembayaran
		);
		$this->m_produk->save_data($data);
		
		$data["page"]="produk";
		$data["daftarkategori"]= $this->m_kategori->get_data()->result();
		$data["daftarmerk"]= $this->m_merk->get_data()->result();
		$data["dataproduk"]= $this->m_mobil->get_mobil($filter);
		$data["randmobil"]= $this->m_mobil->get_random();
		
		redirect("produk/index/".$filter);	
	}	
}
?>