<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseCL extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
    }
	public function index()
	{
		$data["subview"]="Base/index";
		$menusItem = $this->MenuModel->GetMenuIsVisible();
		$menusString = "";
		foreach($menusItem as $value) {
			$menusString.= ',' . $value->key;
		}
		$data['menusString'] = $menusString;
		$this->load->view('Main', $data);
	}
}

/* End of file BaseCL.php */
/* Location: ./application/controllers/BaseCL.php */