<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata()) {

		// } else {

		// }
	}

	public function index()
	{
		$this->load->view('main_view');
	}

	public function logout()
	{
		// $this->session->sess_destroy();
		// redirect('/','refresh');
	}


}
