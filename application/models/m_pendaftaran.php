<?php
	class m_register extends CI_Model{
		function get_data(){
			return $this->db->get('user');
		}
		
		function save_data($data){
			$this->db->insert("user",$data);
		}
		
		function update_data($where,$data){
			$this->db->where($where);
			$this->db->update("user",$data);
		}
		
		function delete_data($where){
			$this->db->where($where);
			$this->db->delete("user");
		}
	}
?>