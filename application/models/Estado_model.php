<?php
class Estado_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }
        
        public function getEstados(){
            $this->db->order_by("nome", "asc");
            $consulta = $this->db->get("estado");   
            return $consulta;
        }


        public function select_estado(){
	        $estados = $this->getEstados();
	        $option = "<option value=''></option>";
	        foreach($estados -> result() as $linha) {
	            $option .= "<option value='$linha->idEstado'>$linha->nome</option>"; 
	        }
	        return $option;
        }
}
?>