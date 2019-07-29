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
        // sonvc
        $wp_load_file_path = dirname(__file__) . '\..\..\..\wp-load.php';
        $wp_config_file_path = dirname(__file__) . '\..\..\..\wp-config.php';
        try {
            if (file_exists($wp_load_file_path)) {
                require_once $wp_load_file_path;
            }
            if (file_exists($wp_config_file_path)) {
                require_once $wp_config_file_path;
            }
        } catch(Exception $ex) {
            // do somethingsite_url
        }
        if (function_exists("get_current_user_id")) {
            if (!get_current_user_id()) {
                //get landing page
                $landingPage = $this->ConfigModel->GetValues('landingPage');
                $this->load->helper('url');
                //redirect($landingPage->value);
                //exit(3);
            }
        } else {
            header('HTTP/1.1 503 Service Unavailable.', true, 503);
            echo 'Somthing go wrong with the wordpress load file';
            exit(3); // EXIT_CONFIG
        }
    }
}
