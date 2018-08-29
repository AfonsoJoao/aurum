<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//responsavel por carregar paginas estaticas
class Admin extends CI_Controller {
    //pagina principal, carregando index de produtos
	public function index(){
        $this->load->model('admin_model', 'admin');

        $data['admins'] = $this->admin->getAdmin();

        $this->load->view('admin/listar', $data);
	}

    //adcionar adm
    public function add(){
        //chamando a model
        $this->load->model('admin_model', 'admin');
        $data = array();
        $this->load->view('admin/add', $data);

    }

    public function salvar(){
        if(!empty($this->input->post('login'))){
            $this->load->model('admin_model', 'admin');
            $data['login'] = $this->input->post('login');
            $data['senha'] = md5($this->input->post('senha'));
            $data['nome'] = $this->input->post('nome');

            if(!empty($this->input->post('id'))){
                $this->admin->editAdmin($data, $this->input->post('id'));
            }else{
                $this->admin->addAdmin($data);
            }

            //redirect("/");
        }
    }

    public function editar($id = NULL){
        if($id == NULL){
            redirect('/');
        }

        $this->load->model('admin_model', 'admin');

        $query = $this->admin->getAdminById(1);
        if ($query == NULL) {
            //redirect('/');
        }



        if(!empty($this->input->post('login'))){
            $this->load->model('admin_model', 'admin');
            $data['login'] = $this->input->post('login');
            $data['senha'] = md5($this->input->post('senha'));
            $data['nome'] = $this->input->post('nome');

            if(!empty($this->input->post('id'))){
                $this->admin->editAdmin($data, $this->input->post('id'));
            }
            redirect("/");
        }
        $data['produto'] = $query;
        $this->load->view('admin/edit', $data);
    }
}
