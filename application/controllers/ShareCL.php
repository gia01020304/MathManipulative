<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShareCL extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShareModel');
	}
	public function index()
	{
		
	}
	public function ChangeStatusShare()
	{
		header('Content-Type: application/json');
		if (!isset($this->session->userdata['logged_in'])) {
			$arr = array(
				"success"=>false,
				"msg"=>"You need to login to use the function!"
			);  
			echo json_encode( $arr);
			return;
		}
		$idFile=$this->input->post('idFile');
		$status=$this->input->post('status');
		$rs=$this->ShareModel->ChangeStatusShare($idFile,$status);
		if ($rs) {
			$arr = array(
				"success"=>true,
				"msg"=>''
			);  
		}else{
			$arr = array(
				"success"=>false,
				"msg"=>''
			);  
		}
		echo json_encode( $arr);
		return;
	}
	public function UpdateShare()
	{
		header('Content-Type: application/json');
		if (!isset($this->session->userdata['logged_in'])) {
			$arr = array(
				"success"=>false,
				"msg"=>"You need to login to use the function!"
			);  
			echo json_encode( $arr);
			return;
		}
		$this->form_validation->set_rules('FileName', 'File Name', 'required');
		if($this->form_validation->run() == FALSE){
			$arr = array(
				"success"=>false,
				"msg"=>validation_errors()
			);  
			echo json_encode( $arr);
			return;
		}
		$FileName=$this->input->post('FileName');
		$idUser=$this->session->userdata['id_user'];
		$rs=$this->ShareModel->ShareFile(
			$FileName,
			$idUser
		);
		if ($rs) {
			$share=$this->ShareModel->CheckExistFile($idUser,$FileName);
			$arr = array(
				"success"=>true,
				"msg"=>"Share Success",
				"data"=>site_url('s/').$share->key
			); 
		}else{
			$arr = array(
				"success"=>false,
				"msg"=>"Share Error"
			); 
		}
		echo json_encode($arr);
	}
	public function SaveShare()
	{
		header('Content-Type: application/json');
		if (!isset($this->session->userdata['logged_in'])) {
			$arr = array(
				"success"=>false,
				"msg"=>"You need to login to use the function!"
			);  
			echo json_encode( $arr);
			return;
		}
		$this->form_validation->set_rules('FileName', 'File Name', 'required');
		if($this->form_validation->run() == FALSE){
			$arr = array(
				"success"=>false,
				"msg"=>validation_errors()
			);  
			echo json_encode( $arr);
			return;
		}


		$key=random_string('alnum', 8);
		$isNewFile=$this->input->post('IsNewFile');


		if ($isNewFile==="true") {
			$checkExistFile=$this->ShareModel->CheckExistFile(
				$this->session->userdata['id_user'],
				$this->input->post('FileName')
			);
			if ($checkExistFile!=null) {
				$arr = array(
					"success"=>false,
					"msg"=>"File Name already exist"
				);  
				echo json_encode( $arr);
				return;
			}
			$rs=$this->ShareModel->SaveShare(
				$key,
				$this->input->post('value'),
				$this->input->post('FileName'),
				$this->session->userdata['id_user']
			);
		}else{
			$rs=$this->ShareModel->UpdateSaveFile(
				$this->input->post('FileName'),
				$this->session->userdata['id_user'],
				$this->input->post('value')
			);
		}
		
		if ($rs) {
			$arr = array(
				"success"=>true,
				"msg"=>"Save File Success",
				"data"=>$this->input->post('FileName')
			); 
		}else{
			$arr = array(
				"success"=>false,
				"msg"=>"Save Error"
			); 
		}
		echo json_encode($arr);

	}
	public function Share($Key)
	{
		$rs=$this->ShareModel->GetShared($Key);
		if (!array_key_exists('id_user', $this->session->userdata)) {
			$rs->name='Untitled';
		}else{
			if ($this->session->userdata['id_user']==$rs->iduser) {
				$rs->isshare=1;
			}
		}
		$data["shared"]=$rs;
		$data["subview"]="Base/index";
		$this->load->view('Main', $data);
		
	}
	public function GetAllOfUser()
	{
		header('Content-Type: application/json');
		$idUser=$this->session->userdata['id_user'];
		$rs=$this->ShareModel->GetAllOfUser($idUser);
		$data["urls"]=$rs;
		$view=$this->load->view('Share/index', $data, true);
		$arr = array(
			"success"=>true,
			"msg"=>"",
			"data"=>$view
		);
		echo json_encode( $arr);

	}
	public function AddShare()
	{
		header('Content-Type: application/json');
		if (!isset($this->session->userdata['logged_in'])) {
			$arr = array(
				"success"=>false,
				"msg"=>"You need to login to use the function!"
			);  
			echo json_encode( $arr);
			return;
		}
		$key=random_string('alnum', 8);
		$idUser=$this->session->userdata['id_user'];
		$value=$this->input->post('value');
		$rs=$this->ShareModel->AddShare(
			$key,$value,$idUser
		);

		if ($rs) {
			$share=new stdClass();
			$share->key=$key;
			$data["urls"][]=$share;
			$arr = array(
				"success"=>true,
				"msg"=>"",
				"data"=>$this->load->view('Share/index', $data, true)
			);  
		}else{
			$arr = array(
				"success"=>false,
				"msg"=>""
			); 
		}
		echo json_encode( $arr);
	}

}

/* End of file ShareCL.php */
/* Location: ./application/controllers/ShareCL.php */