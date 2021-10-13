<?php 

class Contact_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	private $table = "acr_application";

	public function all($limit = 10)
	{
		$offset = $this->uri->segment(3);
		return $this->db->limit($limit, $offset)
					->get($this->table);
	}

	public function count()
	{
		return $this->db->count_all_results($this->table);
	}
}


 ?>