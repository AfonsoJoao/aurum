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
            $cidades = $this->getCidadeByEstado($estado);
            $option = "<option value=''></option>";
            foreach($cidades -> result() as $linha) {
                $option .= "<option value='$linha->idCidade'>$linha->nome</option>"; 
            }
            return  $option;
        }

        


}
?>