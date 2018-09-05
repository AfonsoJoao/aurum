<?php
class Cidade_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }
        
        public function getCidadeByEstado($estado = null){
            if ($estado != null) {   
                return $this->db
                    ->where("estado", $estado)
                    ->order_by("nome")
                    ->get("cidade");
            }
        }


        public function select_cidade($estado = null){
            $cidades = $this->cidade->getCidade();
            $option = "<option value=''></option>";
            foreach($estados -> result() as $linha) {
                $option .= "<option value='$linha->idCidade'>$linha->nome</option>"; 
            }
            return $data['select_cidade'] = $option;
        }

        


}
?>