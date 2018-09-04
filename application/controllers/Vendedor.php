<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Vendedor extends MY_Controller{
		public function index(){     		

       		 $data['vendedores'] = array('nome' => 'Gabriel','cpf' => '068.121.121-22');
       		 $this->template->load('template', 'vendedor/listar', $data);
    	}
		public function add(){
			$data = array();
			$this->template->load('template', 'vendedor/add', $data);
		}	
		

	}

?>