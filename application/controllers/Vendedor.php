<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendedor extends MY_Controller{
		
	public function __construct(){
        parent::__construct();
        $this->load->model('Vendedor_model', 'vendedor');
        $this->load->model('Endereco_model', 'endereco');
    }

    public function index(){
        $dados['vendedores'] = $this->vendedor->getVendedor();
        $this->template->load('template', 'vendedor/listar', $dados);

    }

	public function adicionar(){
		$dados = array();
        if(!empty($this->input->post('nome'))){
        	$endereco['rua'] = $this->input->post('rua');
            $endereco['numero'] = $this->input->post('numero');
            $endereco['complemento'] = $this->input->post('complemento');
            $endereco['bairro'] = $this->input->post('bairro');
            $endereco['estado'] = $this->input->post('estado');
            $endereco['cidade'] = $this->input->post('cidade');
            $id = $this->endereco->addEndereco($endereco);

            $vendedor['nome'] = $this->input->post('nome');
            $vendedor['email'] = $this->input->post('email');
            $vendedor['cpf'] = $this->input->post('cpf');
            $vendedor['telefone'] = $this->input->post('telefone');
            $vendedor['endereco'] = $id;
             $this->vendedor->addVendedor($vendedor);
        }
		$this->template->load('template', 'vendedor/add', $dados);			
	}	

	 public function editar($id = NULL){
        
    }

    public function apagar($id = NULL){
        
    }
}

?>