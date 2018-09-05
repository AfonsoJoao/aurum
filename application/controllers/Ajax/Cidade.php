<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cidade extends CI_controller {

	function __construct(){
        parent::__construct();
    }

    public function getCidades(){
        $this->load->model("Cidade_model", 'cidade');
        $estado = $this->input->post('id_estado');

        echo $this->cidade->getCidadeByEstado($estado);
    }
        
}
