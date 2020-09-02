<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // -----Check session for authenticate user---
        if (!$this->session->userdata('userLoggedIn')) {
            redirect(base_url('user-login'));
        }
        $this->load->model('DashboardModel');
    }

    // ---Main Dashboard---
    public function index()
    {
        $data['title'] = 'User Dashboard';
        $template = 'report';
        $this->header_and_footer($template, $data);
    }
    // --------load Template-----
    public function header_and_footer($template, $data)
    {
        $this->load->view('userTemplate/header', $data);
        $this->load->view('userTemplate/sidebar', $data);
        $this->load->view($template, $data);
        $this->load->view('userTemplate/footer', $data);
    }

    // ---X3 Breanch---
    public function x3Branch()
    {
        $data['title'] = 'User Dashboard';
        $template = 'x3Branch';
        $this->header_and_footer($template, $data);
    }
    // ---X4 Breanch---
    public function x4Branch()
    {
        $data['title'] = 'User Dashboard';
        $template = 'x4Branch';
        $this->header_and_footer($template, $data);
    }
    // ---X4 Breanch---
    public function partnerTree()
    {
        $data['title'] = 'User Dashboard';
        $template = 'partnerTree';
        $this->header_and_footer($template, $data);
    }
    // ---Session unset----
    public function logOut()
    {
        $this->session->unset_userdata('userLoggedIn');
        redirect(base_url('user-login'));
    }
}
