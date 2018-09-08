<?php
	class m_merk extends CI_Model{
		function get_data(){
			return $this->db->get('merk');
		}
		
		function save_data($data){
			$this->db->insert("merk",$data);
		}
		
		function update_data($where,$data){
			$this->db->where($where);
			$this->db->update("merk",$data);
		}
		
		function delete_data($where){
			$this->db->where($where);
			$this->db->delete("merk");
		}
		
		function get_merk($filter){
		$query = $this->db->query("select namamerk from merk where kodemerk='$filter'");
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