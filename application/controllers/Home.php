<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model("Estado_model", 'estado');
        $this->load->model("Cidade_model", 'cidade');
    }
	public function index(){
		$data['select_estados'] = $this->estado->select_estado();
		


        $this->template->load('template', 'home', $data);

    }
}

