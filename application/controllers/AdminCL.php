<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCL extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UsersModel');
	}
	public function index()
	{
        // // login
        // //
        // $isLoggedIn = false;
        // if($isLoggedIn) {

        // } else {
        //     $this->load->view('admin');
        // }
        $this->load->view('admin');
	}

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */