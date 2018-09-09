<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'page' => 'dashboard',
			'link' => 'dashboard',
			'script' => 'script/script_dashboard' 
		);
		$this->load->view('template/wrapper', $data);
	}

	public function daftar(){
		$email = trim($this->input->post('email', true));
		$password = md5(trim($this->input->post('password', true)));
		$password1 = md5(trim($this->input->post('password1', true)));

		$cek_email = $this->db->get_where('user', array('username' => $email));
		if($cek_email->num_rows() != 0){
			echo '<script>alert("email sudah ada");window.location = "'.base_url().'";</script>';
			exit();
		}

		if($password1 != $password){
			echo '<script>alert("Password tidak cocok");window.location = "'.base_url().'";</script>';
			exit();
		}

		$data = array(
			'username' => $email,
			'password' => $password,
			'level' => 'siswa' 
		);
		$simpan = $this->db->insert('user', $data);
		$simpan1 = $this->db->insert('siswa', array('email' => $email));
		if($simpan){
			echo '<script>alert("Berhasil daftar, silahkan login dengan username dan password yang telah didaftarkan");window.location = "'.base_url().'";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal daftar");window.location = "'.base_url().'";</script>';
			exit();
		}
	}

	public function dasboard_login(){
		$data = array(
			'page' => 'dashboard_login',
			'link' => 'dashboard_login',
			'script' => 'script/script_dashboard' 
		);
		$this->load->view('template/wrapper', $data);
	}

	public function login(){
		$email = trim($this->input->post('email', true));
		$password = md5(trim($this->input->post('password', true)));

		$cek = $this->db->get_where('user', array('username' => $email, 'password' => $password));

		$this->session->set_userdata(
			array(
				'is_login' => true,
				'username' => $email,
				'level' => $cek->row()->level
			)
		);
		if($cek->num_rows() > 0){
			echo '<script>alert("User ditemukan, sedang menghubungkan");window.location = "'.base_url().'profil";</script>';
			exit();
		}else{
			echo '<script>alert("Username atau password salah");window.location = "'.base_url().'";</script>';
			exit();
		}
	}
}
