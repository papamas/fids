<?php
class Cd_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	
	function all()
	{
		$q = $this->db->query("SELECT * FROM cds");
		return $q;
	}
	
	function get_cd_by_id($id)
	{
		$q = $this->db->query("SELECT * FROM cds WHERE id = '$id' ");
		return $q;
	}
	
	function save($data) {	
	   $this->db->insert('cds', $data); 
	}
	
	
	function update($data,$id) {
	   $this->db->where('id', $id);
	   $this->db->update('cds', $data); 
	}
	
}

?>