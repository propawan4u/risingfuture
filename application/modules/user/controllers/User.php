<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Usermodel');
    }

    function index()
    {
        if (empty($this->session->userdata('user_logged_in'))) {
            $this->load->view('index');
        } else {
            redirect('user-dashboard');
        }
    }

    function login()
    {
        $this->form_validation->set_rules('userID', 'UserID', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $chk = $this->Usermodel->canLogin($_POST);
            if ($chk) {
                $this->session->set_flashdata('success', 'User Logged in');
                redirect(base_url('user-dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
                redirect($this->index());
            }
        }
    }
}
