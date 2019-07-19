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
                if (!isset($this->session->userdata['logged_in'])) {
                      redirect('AuthenticateCL/adminIndex','refresh');
                }
                $pageName = "Your account";
                $subView = "accounts/account";
                $data['pageName'] = $pageName;
                $data['subView'] = $subView;
                $userId = $this->session->userdata['id_user'];
                $user = $this->UsersModel->GetUserById($userId);
                $data['user'] = $user;
                $this->load->view('admin',$data);
        }
        public function saveUserAccount() {
                $userId = $this->session->userdata['id_user'];
                $userName = $this->session->userdata['logged_in'];
                $oldPassword = $this->input->post('oldpassword');
                $newPassword = $this->input->post('newpassword');
                $checkAccountCorrectRs = $this->UsersModel->CheckAccount($userName, $oldPassword);
                if($checkAccountCorrectRs) {
                        $updatedRs = $this->UsersModel->UpdateUser($userId, $newPassword);
                        if($updatedRs) {
                                $data['isSaveSuccessful'] = true;
                                $data['message'] = 'Saved successfully!';
                        }
                } else {
                        // return message
                        $data['isSaveSuccessful'] = false;
                        $data['message'] = 'Old password is not correct, please try again.';
                }
                $this->index($data);
        }

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */