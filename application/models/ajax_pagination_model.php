<?php 

class Ajax_pagination_model extends CI_Model
{
	public function count_all()
	{
		$query = $this->db->get("acr_application");
		return $query->numb_rows();
	}

	public function fetch_details($limit, $start)
	{
		$output = '';
		$this->db 	->select("*")
					->from("acr_application")
					->order_by("facilityName", "ASC")
					->limit($limit, $start);
		$query = $this->db->get();
		return $query;

	}

}

 ?>