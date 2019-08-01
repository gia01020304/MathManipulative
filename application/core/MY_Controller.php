<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ConfigModel');
        $this->checkWordpressLogin();
    }
    private function checkWordpressLogin() {
        if (function_exists("get_current_user_id")) {
            if (!get_current_user_id()) {
                //get landing page
                $landingPage = $this->ConfigModel->GetValues('landingPage');
                $this->load->helper('url');
                redirect($landingPage->value);
                exit(3);
            }
        } else {
            // header('HTTP/1.1 503 Service Unavailable.', true, 503);
            // echo 'Somthing go wrong with the wordpress load file';
            // exit(3); // EXIT_CONFIG
        }
    }
}
