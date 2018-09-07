<?php
class Endereco_model extends CI_Model{

	public function addEndereco($dados = NULL){
		if($dados != NULL){
			$this->db->insert('endereco', $dados);
		}
	}

	public function getEndereco($id = false){
		if($id === false){
			$query = $this->db->get('endereco');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('endereco', array('idendereco' => $id));
			return$query->row_array();
		} 
		
	}

	public function editEndereco($dados = NULL, $id = NULL){
		if($dados != NULL && $id != NULL){
			$this->db->update('endereco', $dados, array('idendereco' => $id));
		}
	}

	public function apagarEndereco($id = NULL){
		if($id != NULL){
			$this->db->delete('endereco', array('idendereco' => $id));
		}
	}
}