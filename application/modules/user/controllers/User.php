<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Usermodel');
    }

    // -----Load Public Page-----
    public function index()
    {
        $this->load->view('mlm/index');
    }

    // -------load user login page---------
    public function user_login()
    {
        if (empty($this->session->userdata('userLoggedIn'))) {
            $this->load->view('index');
        } else {
            redirect('user-dashboard');
        }
    }

    // -----------user authentication-------
    public function login()
    {
        $this->form_validation->set_rules('userID', 'UserID', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->user_login();
        } else {
            $chk = $this->Usermodel->canLogin($_POST);
            if ($chk) {
                $this->session->set_flashdata('success', 'User Logged in');
                redirect(base_url('user-dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Account ID or Password you entered is incorrect');
                redirect(base_url('user-login'));
            }
        }
    }
}
