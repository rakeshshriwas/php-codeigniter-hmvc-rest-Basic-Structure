<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	class User extends CI_Controller {

		public function __constractor(){
			parent::__constractor();
		}

		public function registration(){
			$data['title']         = 'Registration';
			$data['main_content']  = 'registration_view';
			$this->load->view('master_template', $data);
		}

		public function userslist(){
			$data['title']         = 'All Users';
			$data['main_content']  = 'userlist_view';
			$this->load->view('master_template', $data);
		}
	}
 ?>