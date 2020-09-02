<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // -----Check session for authenticate user---
        if (!$this->session->userdata('user_logged_in')) {
            redirect(base_url('login'));
        }
        $this->load->model('Adminmodel');
    }

    // ---Main Dashboard---
    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $template = 'dashboard';
        $this->header_and_footer($template, $data);
    }
    // --------load Template-----
    function header_and_footer($template, $data)
    {
        $this->load->view('admintemplate/header', $data);
        $this->load->view('admintemplate/sidebar', $data);
        $this->load->view($template, $data);
        $this->load->view('admintemplate/footer', $data);
    }

    // ---Session unset----
    public function logOut()
    {
        $this->session->unset_userdata('user_logged_in');
        redirect(base_url('login'));
    }
}
