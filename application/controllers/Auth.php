<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

    public function login() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $password = $this->input->post('password');
            if(trim($password) == "mmousa@mrg6423") {
                $this->session->set_userdata('login', 'TRUE');
                redirect('/mrgAdmin', 'refresh');
            }
        } else {
            return $this->load->view('admin/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/auth/login', 'refresh');
    }


}