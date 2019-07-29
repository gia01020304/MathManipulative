<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticateCL extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UsersModel');
	}
	public function Register()
	{
		header('Content-Type: application/json');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('UserName', 'User Name', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('ConfirmPassword', 'Confirm Password', 'required|matches[Password]');
		if($this->form_validation->run() == FALSE){
			$arr = array(
				"success"=>false,
				"msg"=>validation_errors()
			);  
			echo json_encode( $arr);
			return;
		}
		$rs=$this->UsersModel->CheckExistUserName(
			$this->input->post('UserName')
		);
		if ($rs!=null) {
			$arr = array(
				"success"=>false,
				"msg"=>"User Name already exist!"
			); 
			echo json_encode( $arr);
			return; 
		}
		$rs=$this->UsersModel->AddUser(
			$this->input->post('Email'),
			$this->input->post('UserName'),
			$this->input->post('Password')
		);
		if ($rs==false) {
			$arr = array(
				"success"=>false,
				"msg"=>"Register Error",
			);
		}else{
			$arr = array(
				"success"=>true,
				"msg"=>"Register Suceess",
			);
		}
		echo json_encode( $arr);
		return;
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		$arr = array(
			"success"=>true,
			"msg"=>"",
			"data"=>$this->load->view('Authen/index','',true)
		);
		echo json_encode($arr);
		return;
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
			$this->session->set_userdata('logged_in', $rs->username);
			$this->session->set_userdata('id_user', $rs->id);
			$this->session->set_userdata('roler_user', $rs->role);
			$view=$this->load->view('Authen/usermanager','',true);
			$arr = array(
				"role_user"=>$rs->role,
				"success"=>true,
				"msg"=>"Login success",
				"data"=>$view
			); 
		}
		
		echo json_encode( $arr);
	}
	public function adminIndex() {
		$data['subView'] = 'admins/login';
		$data['pageName'] = 'Login';
		$this->load->view('admin',$data);
	}
	public function adminLogin() {
		$this->form_validation->set_rules('UserName', 'User Name', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			// $arr = array(
			// 	"success"=>false,
			// 	"msg"=>validation_errors()
			// );  
			// echo json_encode( $arr);
			return;
		}

		$rs=$this->UsersModel->CheckAccount(
			$this->input->post('UserName'),
			$this->input->post('Password')
		);
		if($rs==null){
			$data['subView'] = 'admins/login';
			$data['isSaveSuccessful'] = false;
			$this->load->view('admin', $data);
		}else{
			$this->session->set_userdata('logged_in', $rs->username);
			$this->session->set_userdata('id_user', $rs->id);
			header('Location:'. base_url() . 'ConfigCL');
		}
	}
}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */