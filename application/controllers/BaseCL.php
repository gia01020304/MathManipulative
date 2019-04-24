<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseCL extends CI_Controller {

	public function index()
	{
		$data["subview"]="Base/index";
		$this->load->view('Main', $data);
	}

}

/* End of file BaseCL.php */
/* Location: ./application/controllers/BaseCL.php */