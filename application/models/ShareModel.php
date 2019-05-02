<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShareModel extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table='shares';
	}
	public function GetShared($key)
	{
		$this->db->where('key', $key);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;
	}
	public function AddShare($Key,$Value,$IdUser)
	{
		$data=array(
			"key"=>$Key,
			"value"=>$Value,
			"iduser"=>$IdUser
		);
		return $this->Add($data);
	}
	public function GetAllOfUser($IdUser)
	{
		$this->db->where('iduser', $IdUser);
		$query=$this->db->get($this->table);
		return $query->result();
	}
}

/* End of file ShareModel.php */
/* Location: ./application/models/ShareModel.php */