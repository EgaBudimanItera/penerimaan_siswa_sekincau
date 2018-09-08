<?php
	class m_produk extends CI_Model{
		function getproduk($filter){
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori");
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
		}
		
		function cartnya($filter){
		$query = $this->db->query("select kategori.*, merk.*, mobil.*, pemesanan.*, user.* from mobil, merk, kategori, pemesanan, user where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and pemesanan.kodemobil=mobil.kodemobil and user.username=pemesanan.username");
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
		}
		
		function jumlahbeli($filter){
		$query = $this->db->query("select count(mobil.kodemobil) as jumlah from mobil, merk, kategori, pemesanan, user where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and pemesanan.kodemobil=mobil.kodemobil and user.username=pemesanan.username");
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			//Mengirimkan data array hasil query
			return $query->result();
			//Function result() hampir sama dengan function mysql_fetch_array()
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}	
		}
		
		function save_data($username){
			$this->db->insert("pemesanan",$data);
		}
	}
?>