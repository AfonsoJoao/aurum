<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Praca extends MY_Controller{
		public function adicionar(){
			$data = array();
			$this->template->load('template', 'praca/add', $data);			
		}	
		

	}

?>