<?php
	class m_kategori extends CI_Model{
		function get_data(){
			return $this->db->get('kategori');
		}
		
		function save_data($data){
			$this->db->insert("kategori",$data);
		}
		
		function update_data($where,$data){
			$this->db->where($where);
			$this->db->update("kategori",$data);
		}
		
		function delete_data($where){
			$this->db->where($where);
			$this->db->delete("kategori");
		}
		
		function get_kategori($filter){
		$query = $this->db->query("select namakategori from kategori where kodekategori='$filter'");
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