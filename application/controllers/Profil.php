<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

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
		$get = $this->db->get_where('siswa', array('email' => $this->session->userdata('username')));
		$data = array(
			'page' => 'profil_siswa',
			'link' => 'profil_siswa',
			// 'script' => 'script/script_profil'
			'data' => $get 
		);
		$this->load->view('template/wrapper', $data);
	}

	public function update_siswa(){
		$this->load->library('image_lib');
		$this->load->library('upload');

		$pasfoto = NULL;
		$ijazah = NULL;
		$skhu = NULL;
		$skl = NULL;

		if(!empty($_FILES['pas_photo']['name'])){
			$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|PDF';
            $config['max_size']             = '2048';
            $config['file_name'] = 'pas_photo_'.date('YmdHis');
            $this->upload->initialize($config);
            if($this->upload->do_upload('pas_photo')){
            	$upload_data = $this->upload->data();
            	$pasfoto = $upload_data['file_name'];
            }
		}

		if(!empty($_FILES['ijazah']['name'])){
			$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|PDF';
            $config['max_size']             = '2048';
            $config['file_name'] = 'ijazah'.date('YmdHis');
            $this->upload->initialize($config);
            if($this->upload->do_upload('ijazah')){
            	$upload_data = $this->upload->data();
            	$ijazah = $upload_data['file_name'];
            }
		}

		if(!empty($_FILES['skhu']['name'])){
			$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|PDF';
            $config['max_size']             = '2048';
            $config['file_name'] = 'skhu'.date('YmdHis');
            $this->upload->initialize($config);
            if($this->upload->do_upload('skhu')){
            	$upload_data = $this->upload->data();
            	$skhu = $upload_data['file_name'];
            }
		}

		if(!empty($_FILES['skl']['name'])){
			$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|PDF';
            $config['max_size']             = '2048';
            $config['file_name'] = 'skl'.date('YmdHis');
            $this->upload->initialize($config);
            if($this->upload->do_upload('skl')){
            	$upload_data = $this->upload->data();
            	$skl = $upload_data['file_name'];
            }
		}

		$data = array(
			'nis' => $this->input->post('nisn', true),
			'namasiswa' => $this->input->post('nama', true),
			'tempatlahir' => $this->input->post('tempat_lahir', true),
			'tgllahir' => $this->input->post('tanggal_lahir', true),
			'jk' => $this->input->post('jk', true),
			'agama' => $this->input->post('agama', true),
			'notelp' => $this->input->post('no_hp', true),
			'alamat' => $this->input->post('alamat', true),
			'email' => $this->input->post('email', true),
			'asalsmp' => $this->input->post('asal_smp', true),
			'alamatsmp' => $this->input->post('alamat_smp', true),
			'nilaiun' => $this->input->post('nilai_un', true),
			'namaayah' => $this->input->post('nama_ayah', true),
			'pendidikanayah' => $this->input->post('pendidikan_ayah', true),
			'pekerjaanayah' => $this->input->post('pekerjaan_ayah', true),
			'penghasilanayah' => $this->input->post('penghasilan_ayah', true),
			'namaibu' => $this->input->post('nama_ibu', true),
			'pendidikanibu' => $this->input->post('pendidikan_ibu', true),
			'pekerjaanibu' => $this->input->post('pekerjaan_ibu', true),
			'penghasilanibu' => $this->input->post('penghasilan_ibu', true),
			'pasfoto' => $pasfoto,
			'ijasah' => $ijazah,
			'skhu' => $skhu,
			'skl' => $skl,
		);

		$this->db->where('email', $this->session->userdata('username'));
		$update = $this->db->update('siswa', $data);
		if($update){
			echo '<script>alert("Data Berhasil disimpan");window.location = "'.base_url().'profil";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal disimpan");window.location = "'.base_url().'profil";</script>';
			exit();
		}

	}

	public function pendaftaran(){
		$get = $this->db->get('periode');
		$data = array(
			'page' => 'pendaftaran_sekolah',
			'link' => 'pendaftaran',
			'script' => 'script/script_profil',
			'data' => $get 
		);
		$this->load->view('template/wrapper', $data);
	}

	public function proses_daftar($idperiode){
		$cek = $this->db->get_where('pendaftaran', array('email' => $this->session->userdata('username')));
		if($cek->num_rows() != 0){
			echo '<script>alert("Anda sudah mendaftar pada periode ini");window.location = "'.base_url().'profil";</script>';
			exit();
		}
		$data = array(
			'idperiode' => $idperiode,
			'tgldaftar' => date('Y-m-d'),
			'email' => $this->session->userdata('username'),
			'statusdaftar' => 0,
			'statusbayar' => 0
		);
		$simpan = $this->db->insert('pendaftaran', $data);
		if($simpan){
			echo '<script>alert("Anda berhasil mendaftar pada periode ini");window.location = "'.base_url().'profil/pendaftaran";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal disimpan");window.location = "'.base_url().'profil";</script>';
			exit();
		}
	}

	public function pendaftaran_anda(){
		$email = $this->session->userdata('username');
		$get = $this->db->query("select * from pendaftaran left join periode on periode.idperiode = pendaftaran.idperiode where pendaftaran.email = '$email'");
		$data = array(
			'page' => 'pendaftaran_anda',
			'link' => 'pendaftaran_anda',
			'script' => 'script/script_profil',
			'data' => $get
		);
		$this->load->view('template/wrapper', $data);
	}

	public function upload_bukti_bayar($id){
		$get = $this->db->get_where('pembayaran', array('nodaftar' => $id));
		$data = array(
			'page' => 'upload_bukti_bayar',
			'link' => 'pendaftaran_anda',
			'script' => 'script/script_profil',
			'idpendaftar' => $id,
			'data' => $get
		);
		$this->load->view('template/wrapper', $data);
	}

	public function proses_upload_bukti_bayar(){
		$this->load->library('image_lib');
		$this->load->library('upload');

		if(!empty($_FILES['bukti_bayar']['name'])){
			$config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|PDF';
            $config['max_size']             = '2048';
            $config['file_name'] = 'bukti_bayar_'.$this->input->post('idpendaftar', true).'_'.date('YmdHis');
            $this->upload->initialize($config);
            if($this->upload->do_upload('bukti_bayar')){
            	$upload_data = $this->upload->data();
            	$bukti_bayar = $upload_data['file_name'];
            }
		}
		$idpendaftar = $this->input->post('idpendaftar', true);
		$data = array(
			'nodaftar' => $this->input->post('idpendaftar', true),
			'tglbayar' => date('Y-m-d'),
			'jumlah' => $this->input->post('jumlah_bayar', true),
			'nama_file' => $bukti_bayar,
			'keterangan' => $this->input->post('keterangan', true),
			'status' => 'menunggu verifikasi'
		);
		if($this->input->post('aksi', true) == 'tambah'){
			$simpan = $this->db->insert('pembayaran', $data);
		}else{
			$get_idbayar = $this->db->get_where('pembayaran', array('nodaftar' => $this->input->post('idpendaftar', true)));
			$this->db->where(array('nobayar' => $get_idbayar->row()->nobayar));
			$simpan = $this->db->update('pembayaran', $data);
		}
		
		if($simpan){
			echo '<script>alert("Berhasil upload bukti bayar");window.location = "'.base_url().'profil/upload_bukti_bayar/'.$idpendaftar.'";</script>';
			exit();
		}else{
			echo '<script>alert("Gagal");window.location = "'.base_url().'profil";</script>';
			exit();
		}

	}
}