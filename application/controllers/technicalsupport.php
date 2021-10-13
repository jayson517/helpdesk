<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technicalsupport extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

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

	public function trans($id = null)
	{
		$data['id'] = $id;
		$this->load->view('technicalsupport/phonecalls/encodePhoneCall', $data);
	}


}