<?php
	class m_mobil extends CI_Model{
		function get_data(){
			return $this->db->get('mobil');
		}
		
		function save_data($data){
			$this->db->insert("mobil",$data);
		}
				
		function update_data($where,$data){
			$this->db->where($where);
			$this->db->update("mobil",$data);
		}
		
		function delete_data($where){
			$this->db->where($where);
			$this->db->delete("mobil");
		}
		
		function get_mobil(){
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
		
		function get_mobil2(){
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
		
		function get_last(){
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori limit 8");
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
		
		function get_random(){
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori order by rand() limit 3");
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
		
		function mobilkategori($filter){
		$query = $this->db->query("select count(mobil.jenismobil) as jumlah from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and kategori.kodekategori='$filter'");
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
		
		function mobilmerk($filter){
		$query = $this->db->query("select count(mobil.jenismobil) as jumlah from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and merk.kodemerk='$filter'");
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
		
		function get3_kategori($filter,$pg){
		$batas = $pg + 3;
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and kategori.kodekategori='$filter' limit $pg, $batas");
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
		
		function get9_kategori($filter,$pg){
		$batas = $pg + 9;
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and kategori.kodekategori='$filter' limit $pg, $batas");
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
		
		function get3_merk($filter,$pg){
		$batas = $pg + 3;
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and merk.kodemerk='$filter' limit $pg, $batas");
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
		
		function get9_merk($filter,$pg){
		$batas = $pg + 9;
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and merk.kodemerk='$filter' limit $pg, $batas");
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
		
		function get3_cari($filter){
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and mobil.jenismobil LIKE '%$filter%'");
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
		
		function get9_cari($filter){
		$query = $this->db->query("select kategori.*, merk.*, mobil.* from mobil, merk, kategori where merk.kodemerk=mobil.kodemerk and kategori.kodekategori=mobil.kodekategori and mobil.jenismobil LIKE '%$filter%'");
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
		
	}
?>