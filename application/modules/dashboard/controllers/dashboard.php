<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Dashboard extends CI_Controller {

		public function __constractor(){
			parent::__constractor();
		}

		public function index(){
			
			$data['title']        = 'Dashboard';
			$data['main_content'] = 'dashboard_view';
			$this->load->view('master_template', $data);
		}
	}

 ?>