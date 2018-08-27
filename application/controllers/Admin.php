<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//responsavel por carregar paginas estaticas
class Admin extends CI_Controller {
    //pagina principal, carregando index de produtos
	public function index(){
        $this->load->model('admin_model', 'admin');

        $data['admins'] = $this->admin->getAdmin();

        $this->load->view('template/header', $data);
        $this->load->view('admin/listar', $data);
        $this->load->view('template/footer', $data);
	}

    //adcionar adm
    public function add(){
        //chamando a model
        $this->load->model('admin_model', 'admin');
        $data = array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/add', $data);
        $this->load->view('template/footer', $data);

    }

    public function salvar(){
        if(!empty($this->input->post('login'))){
            $this->load->model('admin_model', 'admin');
            $data['login'] = $this->input->post('login');
            $data['senha'] = mds5($this->input->post('senha'));
            $data['nome'] = $this->input->post('nome');

            $this->admin->addAdmin($data);

            //redirect("/");
        }
    }
}
