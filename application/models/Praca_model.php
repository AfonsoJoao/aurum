<?php
class Praca_model extends CI_Model{

	public function addPraca($dados = NULL){
		if($dados != NULL){
			$this->db->insert('praca', $dados);
		}
	}

	public function getPraca($id = false){
		if($id === false){
			$query = $this->db->get('praca');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('praca', array('idPraca' => $id));
			return$query->row_array();
		} 
		
	}

	public function editPraca($dados = NULL, $id = NULL){
		if($dados != NULL && $id != NULL){
			$this->db->update('praca', $dados, array('idPraca' => $id));
		}
	}

	public function apagarPraca($id = NULL){
		if($id != NULL){
			$this->db->delete('praca', array('idPraca' => $id));
		}
	}
}