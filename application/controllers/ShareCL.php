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
	public function Share($Key)
	{
		$rs=$this->ShareModel->GetShared($Key);
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