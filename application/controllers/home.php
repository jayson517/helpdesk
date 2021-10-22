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

	public function phoneCall()
	{
		$this->session->set_userdata("tsType", "Phone Call");
		$this->load->view('technicalsupport/phonecalls/phonecall');
	}

	public function hangouts()
	{
		$this->session->set_userdata("tsType", "Hangouts");
		$this->load->view('technicalsupport/hangEmailWalk/hangEmailWalk_main');
	}

	public function email() 
	{
		$this->session->set_userdata("tsType", "Email");
		$this->load->view('technicalsupport/hangEmailWalk/hangEmailWalk_main');
	}

	public function walk_in()
	{
		$this->session->set_userdata("tsType", "Walk-in");
		$this->load->view('technicalsupport/hangEmailWalk/hangEmailWalk_main');
	}

	public function pagination()
	{
		$this->load->view("pagination_view");
	}

	public function des_ts_sess()
	{
		$this->session->unset_userdata('tsType');
		$this->load->view('main_view');
	}


}
