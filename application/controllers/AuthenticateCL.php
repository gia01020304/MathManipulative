<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticateCL extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UsersModel');
	}
	public function Login()
	{
		header('Content-Type: application/json');
		$this->form_validation->set_rules('UserName', 'User Name', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			$arr = array(
				"success"=>false,
				"msg"=>validation_errors()
			);  
			echo json_encode( $arr);
			return;
		}

		$rs=$this->UsersModel->CheckAccount(
			$this->input->post('UserName'),
			$this->input->post('Password')
		);
		if($rs==null){
			$arr = array(
				"success"=>false,
				"msg"=>"User Name or Password incorrect"
			); 
		}else{
			$view=$this->load->view('Authen/usermanager','',true);
			$arr = array(
				"success"=>true,
				"msg"=>"Login success",
				"data"=>$view
			); 
		}
		$this->session->set_userdata('logged_in', $rs->username);
		echo json_encode( $arr);
	}

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */