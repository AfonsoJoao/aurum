<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$dados['erro'] = '';
		$this->load->view('login/login', $dados);
	}

	public function entrar(){
		if(!empty($this->input->post("usuario"))){
			$data['login'] = $this->input->post("usuario");
			$data['senha'] = md5($this->input->post("senha"));

			$this->load->model('admin_model', 'admin');
	        $query = $this->admin->login($data);

	        if (!empty($query)){
	            $this->session->set_userdata("logado",5);
				redirect(base_url('home'));
	        }else{
				$dados['erro'] = "Usuário/Senha incorretos";
				$this->load->view('login/login', $dados);
				return;
			}
		}
		$dados['erro'] = "Erro No Login";
		$this->load->view('login/login', $dados);
	}

	public function sair(){
		$this->session->unset_userdata("logado");
		redirect(base_url());
	}
}
