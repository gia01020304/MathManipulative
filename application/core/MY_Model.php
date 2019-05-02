<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $table;
	public function Add($data)
	{
		$this->db->insert($this->table, $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}		

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */