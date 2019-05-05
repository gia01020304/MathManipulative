<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigCL extends CI_Controller {
	public function __construct()
	{
                parent::__construct();
                $this->load->model('ConfigModel');
                $this->load->model('ShareModel');
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
                $pageName = "Config page";
                $subView = "admins/config";
                $data['pageName'] = $pageName;
                $data['subView'] = $subView;
                $data['webpage'] = $this->getwebpageAddress();
                $data['helpLink'] = $this->gethelpLinkAddress();
                $this->load->view('admin',$data);
        }
        public function getViewMyFile()
        {
                $idUser=1;
                //$idUser=$this->session->userdata['id_user']

                $rs=$this->ShareModel->GetAllOfUser($idUser);

        }
        public function save(){
                // save file
                $rs = true;
                $check = empty($_FILES["logo"]["tmp_name"]);
                if($check !== true) {
                        $rs = $this->saveImg($_FILES['logo']['name'],'logo');
                }
                $check = empty($_FILES["favicon"]["tmp_name"]);
                if($check !== true){
                        $rs = $this->saveImg($_FILES['favicon']['name'],'favicon');
                }
                $datas['siteWebpageAdress'] = $this->input->post('siteWebpageAdress');
                $datas['siteHelpLinkAddress'] = $this->input->post('siteHelpLinkAddress');
                $rs = $this->saveData($datas);
                if($rs === true) {
                        $data['isSaveSuccessful'] = true;
                        $this->index($data);
                } else {
                        $data['isSaveSuccessful'] = false;
                        $this->index($data);
                }
        }
        private function saveImg($file, $fileName) {
                $info = pathinfo($file);
                $ext = $info['extension'];
                $newname = $fileName.'.'.$ext; 
                $target = './lib/images/'.$newname;
                $rs = move_uploaded_file( $_FILES[$fileName]['tmp_name'], $target);
                return $rs;
        }
        private function saveData($datas) {
                $rs = false;
                foreach($datas as $key=>$value) {
                        $rs = $this->ConfigModel->Update($key,$value);
                }
                return $rs;
        }
        private function getwebpageAddress() {
                $webpage = $this->ConfigModel->GetValues('siteWebpageAdress');
                return $webpage->value;
        }
        private function gethelpLinkAddress() {
                $helpLink = $this->ConfigModel->GetValues('siteHelpLinkAddress');
                return $helpLink->value;
        }

}

/* End of file AuthenticateCL.php */
/* Location: ./application/controllers/AuthenticateCL.php */