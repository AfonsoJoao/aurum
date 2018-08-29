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

	public function getAdminById($id = NULL){
		if($id != NULL){
			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get("admin");
			return $query->row();
		}
	}
	public function editAdmin($dados = NULL, $id = NULL){
		if($dados != NULL && $id != NULL){
			$this->db->update('admin', $dados, array('id' => $id));
		}
	}

	public function apagarAdmin($id = NULL){
		if($id != NULL){
			$this->db->delete('admin', array('id' => $id));
		}
	}
}