<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Api extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('standard_model');
    }

	public function index_get() {
		$this->response('hello');
	}

}



?>