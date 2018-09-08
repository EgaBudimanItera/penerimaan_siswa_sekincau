<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
        $this->load->model("m_mobil");
		$this->load->model("m_kategori");
		$this->load->model("m_merk");
		$this->load->model("m_register");
		$this->load->model("m_produk");
	}
	
	public function index(){
		$data["page"]="register";
		$data["daftarkategori"]= $this->m_kategori->get_data()->result();
		$data["daftarmerk"]= $this->m_merk->get_data()->result();
		$data["daftarmobil"]= $this->m_mobil->get_data()->result();
		
		$this->load->view('index',$data);	
	}
	
	public function add(){
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		$password = $this->input->post('password');
		if($konfirmasi_password==$password)
		{
			$id_user = date("Ymdgis");
			$nama_awal = $this->input->post('nama_awal');
			$nama_akhir = $this->input->post('nama_akhir');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$fax = $this->input->post('fax');
			$alamat = $this->input->post('alamat');
			$kota = $this->input->post('kota');
			$kode_pos = $this->input->post('kode_pos');
			$negara = $this->input->post('negara');
			$provinsi = $this->input->post('provinsi');
			$username = $this->input->post('username');
			
			$data = array(
				'id_user' => $id_user,
				'nama_awal' => $nama_awal,
				'nama_akhir' => $nama_akhir,
				'email' => $email,
				'phone' => $phone,
				'fax' => $fax,
				'alamat' => $alamat,
				'kota' => $kota,
				'kode_pos' => $kode_pos,
				'negara' => $negara,
				'provinsi' => $provinsi,
				'username' => $username,
				'password' => $password
			);
			$this->m_register->save_data($data);
			$data["page"]="register";
			$data["daftarkategori"]= $this->m_kategori->get_data()->result();
			$data["daftarmerk"]= $this->m_merk->get_data()->result();
			$data["daftarmobil"]= $this->m_mobil->get_data()->result();
			$this->load->view('index',$data);
			echo "<script>alert('anda berhasil diregister');</script>";
		}
		else
		{
			$data["page"]="register";
			$data["daftarkategori"]= $this->m_kategori->get_data()->result();
			$data["daftarmerk"]= $this->m_merk->get_data()->result();
			$data["daftarmobil"]= $this->m_mobil->get_data()->result();
			$this->load->view('index',$data);
			echo "<script>alert('password baru tidak sama');</script>";
		}
	}
}
?>