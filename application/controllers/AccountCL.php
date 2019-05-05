<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigCL extends CI_Controller {
	public function __construct()
	{
                parent::__construct();
		$this->load->model('ConfigModel');
	}
	public function index($data = [])
	{
        // // login
        // //
        // $isLoggedIn = false;
        // if($isLoggedIn) {

        // } else {
        //     $this->load->view('admin');
        // }
        $pageName = "Your account";
        $subView = "accounts/account";
        $data['pageName'] = $pageName;
        $data['subView'] = $subView;
        $this->load->view('admin',$data);
        }

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */