<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Adminmodel');
    }

    function index()
    {
        if (empty($this->session->userdata('user_logged_in'))) {
            $this->load->view('index');
        } else {
            redirect('dashboard');
        }
    }

    function login()
    {
        $Check = $this->Adminmodel->checkLogin($_POST);
        if ($Check) {
            $this->session->set_flashdata('success', 'Admin Logged in Successfully !!');
            redirect(base_url('dashboard'));
        } else {
            $this->session->set_flashdata('error', 'Some Error Occurred');
            redirect(base_url() . 'login');
        }
    }
}
