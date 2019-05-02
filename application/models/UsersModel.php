<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

	private $table;
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

}

/* End of file UsersModel.php */
/* Location: ./application/models/UsersModel.php */