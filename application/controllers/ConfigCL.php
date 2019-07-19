<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ConfigCL extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ConfigModel');
        $this->load->model('UsersModel');
        $this->load->model('ShareModel');
    }
    public function index($data = [])
    {
        if (!isset($this->session->userdata['logged_in'])) {
            header("Location: AuthenticateCL/adminIndex");
        } else {
            // get user by id
            // check role
            $id = $this->session->userdata['id_user'];
            $user = $this->UsersModel->GetUserById($id);
            if (!empty($user) && $user->role == 0) { // Normal
                header("Location: AccountCL");
            } else if (!empty($user) && $user->role == 1) { // Admin
                $pageName = "Config page";
                $subView = "admins/config";
                $data['pageName'] = $pageName;
                $data['subView'] = $subView;
                $data['webpage'] = $this->getwebpageAddress();
                $data['helpLink'] = $this->gethelpLinkAddress();
                $this->load->view('admin', $data);
            }
        }
        $this->load->model('ConfigModel');
        $this->load->model('ShareModel');
    }
    public function getViewMyFile()
    {
        if (!isset($this->session->userdata['logged_in'])) {
            redirect('AuthenticateCL/adminIndex', 'refresh');
        }
        $idUser = $this->session->userdata['id_user'];
        $rs = $this->ShareModel->GetAllOfUser($idUser);
        $temp = $this->getwebpageAddress();
        $domain = substr($temp, -1) == '/' ? substr($temp, 0, -1) : $temp;
        foreach ($rs as $value) {
            $value->url = $domain . '/s/' . $value->key;
        }
        $data['pageName'] = 'My manipulations';
        $data['subView'] = 'admins/myfile';
        $data['shares'] = $rs;
        $this->load->view('admin', $data);
    }
    public function save()
    {
        // save file
        $rs = true;
        $check = empty($_FILES["logo"]["tmp_name"]);
        if ($check !== true) {
            $rs = $this->saveImg($_FILES['logo']['name'], 'logo');
        }
        $check = empty($_FILES["favicon"]["tmp_name"]);
        if ($check !== true) {
            $rs = $this->saveImg($_FILES['favicon']['name'], 'favicon');
        }
        $datas['siteWebpageAdress'] = $this->input->post('siteWebpageAdress');
        $datas['siteHelpLinkAddress'] = $this->input->post('siteHelpLinkAddress');
        $rs = $this->saveData($datas);
        if ($rs === true) {
            $data['isSaveSuccessful'] = true;
            $this->index($data);
        } else {
            $data['isSaveSuccessful'] = false;
            $this->index($data);
        }
    }
    private function saveImg($file, $fileName)
    {
        $info = pathinfo($file);
        $ext = $info['extension'];
        $newname = $fileName . '.' . $ext;
        $target = './lib/images/' . $newname;
        $rs = move_uploaded_file($_FILES[$fileName]['tmp_name'], $target);
        return $rs;
    }
    private function saveData($datas)
    {
        $rs = false;
        foreach ($datas as $key => $value) {
            $rs = $this->ConfigModel->Update($key, $value);
        }
        return $rs;
    }
    private function getwebpageAddress()
    {
        $webpage = $this->ConfigModel->GetValues('siteWebpageAdress');
        if (!empty($webpage)) {
            return $webpage->value;
        }
        return "";
    }
    private function gethelpLinkAddress()
    {
        $helpLink = $this->ConfigModel->GetValues('siteHelpLinkAddress');
        if (!empty($helpLink)) {
            return $helpLink->value;
        }
        return "";
    }

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */
