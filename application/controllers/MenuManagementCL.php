<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuManagementCL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('UsersModel');
    }
    public function index($data = [])
    {
        if (!isset($this->session->userdata['logged_in'])) {
            redirect('AuthenticateCL/adminIndex', 'refresh');
        }
        $pageName = "Menu management";
        $subView = "admins/menumanagement";
        $data['pageName'] = $pageName;
        $data['subView'] = $subView;
        $menus = $this->MenuModel->GetAll();
        $data['menus'] = $menus;
        $this->load->view('admin', $data);
    }
    public function saveMenu()
    {
        $visibleItemValue = $this->input->post('menu[]');
        $rs = $this->MenuModel->SetVisibleMenu($visibleItemValue);
        if ($rs) {
            $data['isSaveSuccessful'] = true;
        } else {
            $data['isSaveSuccessful'] = false;
        }
        $this->index($data);
    }
}
