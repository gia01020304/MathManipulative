<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShareModel extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table='shares';
	}

	public function UpdateSaveFile($FileName,$IdUSer,$Value)
	{
		$this->db->set('value', $Value);
		$this->db->where('name', $FileName);
		$this->db->where('iduser', $IdUSer);
		$this->db->update($this->table);
		return ($this->db->affected_rows() == -1) ? false : true;

	}
	public function ShareFile($FileName,$IdUSer)
	{
		$this->db->set('isshare', 1);
		$this->db->where('name', $FileName);
		$this->db->where('iduser', $IdUSer);
		$this->db->update($this->table);
		return ($this->db->affected_rows() == -1) ? false : true;
	}
	public function CheckExistFile($IdUSer,$FileName)
	{
		$this->db->where('iduser', $IdUSer);
		$this->db->where('name', $FileName);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;
	}
	public function  SaveShare($Key,$Value,$FileName,$IdUser)
	{
		$data=array(
			"key"=>$Key,
			"value"=>$Value,
			"iduser"=>$IdUser,
			'name'=>$FileName
		);
		return $this->Add($data);
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