<?php
class Vendedor_model extends CI_Model{

	public function addVendedor($dados = NULL){
		if($dados != NULL){
			$this->db->insert('vendedor', $dados);
		}
	}

	public function getVendedor($id = false){
		if($id === false){
			$query = $this->db->get('vendedor');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('vendedor', array('idvendedor' => $id));
			return$query->row_array();
		} 
		
	}

	public function editVendedor($dados = NULL, $id = NULL){
		if($dados != NULL && $id != NULL){
			$this->db->update('vendedor', $dados, array('idvendedor' => $id));
		}
	}

	public function apagarVendedor($id = NULL){
		if($id != NULL){
			$this->db->delete('vendedor', array('idvendedor' => $id));
		}
	}
}