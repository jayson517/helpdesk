<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technicalsupport_model extends CI_Model
{
	public function getLabRecord($data)
	{	
		if(is_array($data))
		{
			$this->db 	->select('accreNo, facilityNo, adr, facilityName')
						->from('acr_application')
						->like($data);

			return $this->db->get()->result();

		}
		else
		{
			return "NR";
		}
	}
}

?>