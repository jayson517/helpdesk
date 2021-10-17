<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technicalsupport_model extends CI_Model
{


/**
 * ============================== Get Lab Record  ==============================
 * Return 30
 */

	public function getLabRecord($data)
	{	

		if(is_array($data))
		{

			$this->db 	->select('accreNo, facilityNo, adr, facilityName')
						->from('acr_application')
						->like($data)
						// ->group_by('facilityNo')
						->order_by('approvedDt', 'DESC')
						->limit(30);

			return $this->db->get()->result();

		}
		else
		{
			return "NR";
		}
	}

/**
 * ============================== Get Lab Record ==============================
 * Return 1
 */

	public function getLabDetails($data)
	{
		// $central_db = $this->load->database("central_server", true);

		$this->db	->select('accreNo, facilityNo, adr, facilityName')
					->from('acr_application')
					->where($data)
					->order_by('approvedDt', 'DESC')
					->limit(1);
					
		return $this->db->get()->result();
	}

/**
 * ============================== Employee Records ==============================
 */

	public function get_employee_details($data)
	{
		// $central_db = $this->load->database("central_server", true);

		$this->db->select('a.accreno, a.accrestatus, a.appno, a.userid, 
				b.empstatus, b.emptype, b.userid, b.empdesignation,  
				c.emptitle, c.empno, c.empfname, c.empmname, c.emplname,
				d.userpasswd')
			->from('ref_facility as a')
			->join('acr_employee as b', 'a.appno = b.appno', 'inner')
			->join('ref_employee as c', 'b.empno = c.empno', 'inner')
			->join('sna_users as d', 'a.userid = d.userid')
			->where('a.facilityno', $data);

		if($query = $this->db->get()->result())
		{
			return $query;
		}
		else
		{
			return false;
		}
	}


}

?>