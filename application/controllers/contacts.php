<?php 

class Contacts extends CI_Controller
{

	private $limit = 10;

	public function index()
	{
		$this->load->model('contact_model', 'contact');
		$this->load->library('pagination');
		$data['query'] = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();

		/**
		 * =================== Bootstrap ===================
		 */
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = '&laquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';

	    $config['last_link'] = '&raquo;';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';

	    $config['next_link'] = '&rarr;';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';

	    $config['prev_link'] = '&larr;';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';

	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';	    



		$config["total_rows"] = $total_rows;
		$config["page_url"] = $this->limit;
		$config["uri_segment"] = 3;
		$config["base_url"] = site_url('contacts/index');

		$this->pagination->initialize($config);

		$data['page_links'] = $this->pagination->create_links();
		$this->load->view('index', $data);
	}

/**
 * ========================= AJAX pagination =========================
 */

	public function ajax()
	{
		$this->load->model('contact_model', 'contact');
		$data['query'] = $this->contact->all($this->limit);
		$total_rows = $this->contact->count();

/**
 * ========================= Bootstrap =========================
 */
		
		$this->load->helper('app');
		$page_links = pagination($total_rows, $this->limit, "contacts/ajax");

		$this->load->library('pagination');

		$data['page_links'] = $this->pagination->create_links();
		$this->load->view('ajax', $data);
	}

}

 ?>