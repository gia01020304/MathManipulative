<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCL extends CI_Controller {
	public function __construct()
	{
                parent::__construct();
                $this->load->model('ConfigModel');
                $this->load->model('UsersModel');
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
                if (!isset($this->session->userdata['logged_in'])) {
                      redirect('AuthenticateCL/adminIndex','refresh');
                }
                $pageName = "Your account";
                $subView = "accounts/account";
                $data['pageName'] = $pageName;
                $data['subView'] = $subView;
                $this->load->view('admin',$data);
        }

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */