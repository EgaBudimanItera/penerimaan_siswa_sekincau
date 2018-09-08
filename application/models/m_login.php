<?php 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	function getadmin($where){
		return $this->db->get_where("admin",$where);
	}
	
	function getuser($where){
		return $this->db->get_where("user",$where);
	}
	
	function updateuser($where,$data){
		$this->db->where($where);
		$this->db->update("user",$data);
	}
	
	function updateprofile($where,$data){
		$this->db->where($where);
		$this->db->update("admin",$data);
	}
	
	function updatefoto($where,$data){
		$this->db->where($where);
		$this->db->update("admin",$data);
	}
	
	function updatepassword($where,$data){
		$this->db->where($where);
		$this->db->update("admin",$data);
	}
}
?>
