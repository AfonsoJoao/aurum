<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
class Praca extends MY_Controller{
		
	public function __construct(){
        parent::__construct();
        $this->load->model('Praca_model', 'praca');
    }

    public function index(){
        $dados['pracas'] = $this->praca->getPraca();
        $this->template->load('template', 'praca/listar', $dados);

    }

	public function adicionar(){
		$dados = array();
        if(!empty($this->input->post('nome'))){
            $data['nome'] = $this->input->post('nome');
            $data['observacao'] = $this->input->post('observacao');
            $this->praca->addPraca($data);
        }
		$this->template->load('template', 'praca/add', $dados);			
	}	

	 public function editar($id = NULL){
        if(!empty($this->input->post('nome'))){
            $data['nome'] = $this->input->post('nome');
            $data['observacao'] = $this->input->post('observacao');
            $this->praca->editPraca($data, $id);
        }

        $query = $this->praca->getPraca($id);

        $dados['praca'] = $query;
        $this->template->load('template', 'praca/edit', $dados);
    }

    public function apagar($id = NULL){
        $query = $this->praca->getPraca($id);
        if ($query != NULL) {
            $this->praca->apagarPraca($id);
        }

    }
}

?>