<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigModel extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table='config';
	}
	public function GetValues($key)
	{
		$this->db->where('key', $key);
		$query=$this->db->get($this->table);
		$rs=$query->row();
		return $rs;
	}
	public function Update($key,$value)
	{
		$data=array(
			"value"=>$value
		);
		$this->db->where('key',$key);
		return $this->db->update($this->table,$data);
	}
}

/* End of file ShareModel.php */
/* Location: ./application/models/ShareModel.php */