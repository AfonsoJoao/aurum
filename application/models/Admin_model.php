<?php
class Admin_model extends CI_Model{

	public function getAdmin($id = false){
		if($id === false){
			$query = $this->db->get('admin');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('admin', array('id' => $id));
			return$query->row_array();
		} 
		
	}

	public function addAdmin($dados = NULL){
		if($dados != NULL){
			$this->db->insert('admin', $dados);
		}
	}
}