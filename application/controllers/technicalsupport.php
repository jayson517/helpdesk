<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technicalsupport extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}


/**
 * ============================== DTL Lab Details ==============================
 * Return 30
 */

	public function check_lab_record()
	{
		$facilityNo = $this->input->post('facilityNo');
		$accreNo = $this->input->post('accreNo');
		$facilityName = $this->input->post('facilityName');
		$adr = $this->input->post('adr');

		if(!$facilityNo == null)
		{
			$data_input = array(
				'facilityNo'	=>	$facilityNo
			);
		}
		else if(!$accreNo ==  null)
		{
			$data_input = array(
				'accreNo'	=>	$accreNo
			);
		}
		else
		{
			if(!$facilityName ==  null && !$adr == null)
			{
				$data_input = array(
					'facilityName'	=>	$facilityName,
					'adr'			=>	$adr
				);
			}
			else if(!$facilityName ==  null && $adr == null)
			{
				$data_input = array(
					'facilityName'	=>	$facilityName
				);
			}
			else if($facilityName ==  null && !$adr == null)
			{
				$data_input = array(
					'adr'	=>	$adr
				);
			}
			else
			{
				$data_input = array(
					'NR'	=>	"No Result"
				);
			}

		}

		if($data_result = $this->getLabRec($data_input))
		{
			$data = array(
				'result'	=>	$data_result,
				'response'	=>	'success'
			);
		}

		echo json_encode($data);


	}

	public function getLabRec($data_input)
	{
		$this->load->model('technicalsupport_model');
		return $this->technicalsupport_model->getLabRecord($data_input);

	}

	public function getLabId($id = null)
	{

	}

/**
 * ============================== Get Lab Details ==============================
 * Return 1
 */

	public function trans()
	{
		$idVal = $this->input->get_post('id');
		
		if(!$idVal == null)
		{
			$data_input = array(
				'facilityNo'	=>	$idVal
			);

			$this->load->model('technicalsupport_model');
			if($data['results'] = $this->technicalsupport_model->getLabDetails($data_input))
			{
				$this->load->view('technicalsupport/phonecalls/pc_register', $data);	
			}
		}
		else
		{
			return show_404();
			die();
		}
	}

/**
 * ============================== Get Employee Details ==============================
 */

	public function get_empDetails(){

		if($this->input->is_ajax_request()){

			$ajax_data = $this->input->post('facilityNo');
			$this->load->model('technicalsupport_model');

			if($data_result = $this->technicalsupport_model->get_employee_details($ajax_data)){
				
				$data = array(
					'response'	=>	'success',
					'result'	=>	$data_result
				);

			}else{
				$data = array(
					'response'	=>	'failed',
					'result'	=>	$data_result
				);
			}
			
			echo json_encode($data);
		}else{
			show_404();
		}
	}


}