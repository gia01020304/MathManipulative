<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table="users";
	}
	public function CheckAccount($UserName,$PassWord)
	{
		$this->db->where('username', $UserName);
		$this->db->where('password', $PassWord);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;
	}
	public function AddUser($Email,$UserName,$PassWord)
	{
		$data = array(
			'email'=>$Email,
			'username'=>$UserName,
			"password"=>$PassWord
		);
		return $this->Add($data);
	}
	public function CheckExistUserName($UserName)
	{
		$this->db->where('username', $UserName);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;	
	}
	public function CheckExistUserNameOrEmail($Email,$UserName)
	{
		$this->db->where('email', $Email);
		$this->db->or_where('username', $UserName);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;
	}
	public function GetUserById($id) {
		$this->db->where('id', $id);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;
	}
	public function UpdateUser($userId, $newPassword){
		$sql = "
        UPDATE users
        SET `password` = ?
        WHERE `id` = ?	
        ";
        $rs = $this->db->query($sql, [$newPassword,$userId]);
        return $rs;
	}

}

/* End of file UsersModel.php */
/* Location: ./application/models/UsersModel.php */