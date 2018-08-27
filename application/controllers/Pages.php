<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//responsavel por carregar paginas estaticas
class Pages extends CI_Controller {
        
	public function view($page = 'home'){
            //testando se a pagina existe
            if(!file_exists(APPPATH.'views/estaticas'.$page.'.php')){
               show_404();
            }
            $data['title'] = ucfirst($page);
            $this->load->view('template/header', $data);
            $this->load->view('estaticas/'.$page, $data);
            $this->load->view('template/footer', $data);
	}
}
