<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model', 'admin');
    }
	public function index(){
        $dados['admins'] = $this->admin->getAdmin();
        $this->template->load('template', 'admin/listar', $dados);

    }

    //adcionar adm
    public function adicionar(){
        $dados = array();
        if(!empty($this->input->post('login'))){
            $data['login'] = $this->input->post('login');
            $data['senha'] = md5($this->input->post('senha'));
            $data['nome'] = $this->input->post('nome');
            $data['email'] = $this->input->post('email');
            $this->admin->addAdmin($data);
            
        }
        $this->template->load('template', 'admin/add', $dados);

    }
    
    public function editar($id = NULL){
        $query = $this->admin->getAdminById($id);

        if(!empty($this->input->post('login'))){
            $data['login'] = $this->input->post('login');
            $data['senha'] = md5($this->input->post('senha'));
            $data['nome'] = $this->input->post('nome');

            if(!empty($this->input->post('id'))){
                $this->admin->editAdmin($data, $this->input->post('id'));
                $query = $this->admin->getAdminById($id);
            }
        }

        $data['admin'] = $query;

         $this->template->load('template', 'admin/edit', $data);
    }

    public function apagar($id = NULL){
        $query = $this->admin->getAdminById($id);
        if ($query != NULL) {
            $this->admin->apagarAdmin($id);
            redirect('/');
        }

    }
}
