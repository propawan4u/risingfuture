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
        // $this->load->helper('sendsms_helper');
    }

    // ---Main Dashboard---
    public function index()
    {
        $data['LogValue'] = $this->DashboardModel->getLogInValue();
        $data['title'] = 'User Dashboard';
        $template = 'report';
        $this->header_and_footer($template, $data);
    }
    // --------load Template-----
    public function header_and_footer($template, $data)
    {
        $data['LogValue'] = $this->DashboardModel->getLogInValue();
        $this->load->view('userTemplate/header', $data);
        $this->load->view('userTemplate/sidebar', $data);
        $this->load->view($template, $data);
        $this->load->view('userTemplate/footer', $data);
    }
    // --------partner profile------
    public function user_profile()
    {
        $data['userData'] = $this->DashboardModel->getUserDetails();
        $data['title'] = 'User Dashboard';
        $template = 'user_profile';
        $this->header_and_footer($template, $data);
    }
    // --------partner profile------
    public function update_user_profile()
    {
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('ac_number', 'Account Number', 'required|numeric|max_length[25]');
        $this->form_validation->set_rules('ifsc', 'E-mail', 'required');
        $this->form_validation->set_rules('ac_hld_name', 'Contact', 'required');
        $this->form_validation->set_rules('branch', 'Contact', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->user_profile();
        } else {
            $uid = $this->uri->segment(2);
            $this->DashboardModel->update_user_profile($uid, $_POST);
        }
    }

    // --------update password------
    public function upate_user_pass()
    {
        $data['title'] = 'User Dashboard';
        $template = 'edit_pass';
        $this->header_and_footer($template, $data);
    }

    // --------partner profile------
    public function update_user_credential()
    {
        $this->form_validation->set_rules('old_pass', 'Old Password', 'required');
        $this->form_validation->set_rules('new_pass', 'New Password', 'required');
        $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[new_pass]');

        if ($this->form_validation->run() == FALSE) {
            $this->upate_user_pass();
        } else {
            $this->DashboardModel->update_user_credential($_POST);
        }
    }
    
        // --------Transfer Wallet Balance------
    public function transfer_wallet_bal()
    {
        $this->form_validation->set_rules('partnerID', 'Partner ID', 'required|numeric|max_length[10]');
        $this->form_validation->set_rules('amount', 'Amount', 'required|numeric|max_length[4]');

        if ($this->form_validation->run() == FALSE) {
            $data['userData'] = $this->DashboardModel->getUserData();
            $data['title'] = 'User Dashboard';
            $template = 'transfer';
            $this->header_and_footer($template, $data);
        } else {
            $this->DashboardModel->transfer_wallet_bal($_POST);
        }
    }
    // ---X3 Breanch Start---
    public function x3Branch()
    {
        $data['slots'] = $this->DashboardModel->getSlots();
        $data['title'] = 'User Dashboard';
        $template = 'x3Branch';
        $this->header_and_footer($template, $data);
    }

    public function addNewPartner()
    {
        $uid = $this->session->userdata('userLoggedIn');
        $userid = $uid['uid'];
        $field_arry = array('uid' => $userid);
        $data['userWallet'] = $this->DashboardModel->getData('*', $field_arry, 'user_registration');
        $data['title'] = 'User Dashboard';
        $template = 'new_partner_regi';
        $this->header_and_footer($template, $data);
    }

    function save_user()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|is_unique[user_registration.email]');
        $this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[10]|is_unique[user_registration.contact]');

        if ($this->form_validation->run() == FALSE) {
            // echo "success";
            // exit;
            $this->addNewPartner();
        } else {
            $this->DashboardModel->AddUser($_POST);
        }
    }
    // ---X3 Breanch End---


    // ---X4 Breanch---
    public function x4Branch()
    {
        $data['getCyc'] = $this->DashboardModel->getCycX4();
        $data['getSlots_2'] = $this->DashboardModel->getSlot_2();
        $data['getSlots_3'] = $this->DashboardModel->getSlot_3();
        $data['getSlots_4'] = $this->DashboardModel->getSlot_4();
        $data['getSlots_5'] = $this->DashboardModel->getSlot_5();
        $data['getSlots_6'] = $this->DashboardModel->getSlot_6();
        $data['getSlots_7'] = $this->DashboardModel->getSlot_7();
        $data['getSlots_8'] = $this->DashboardModel->getSlot_8();
        $data['getSlots_9'] = $this->DashboardModel->getSlot_9();
        $data['getSlots_10'] = $this->DashboardModel->getSlot_10();
        $data['getSlots_11'] = $this->DashboardModel->getSlot_11();
        $data['getSlots_12'] = $this->DashboardModel->getSlot_12();
        $data['getSlots_13'] = $this->DashboardModel->getSlot_13();
        $data['getSlots_14'] = $this->DashboardModel->getSlot_14();
        $data['getSlots_15'] = $this->DashboardModel->getSlot_15();
        $data['getSlots_16'] = $this->DashboardModel->getSlot_16();
        $data['getAllSlots'] = $this->DashboardModel->getAllSlotsorUsers();
        $data['title'] = 'User Dashboard';
        $template = 'x4Branch';
        $this->header_and_footer($template, $data);
    }

    // ---X4 Breanch---
    public function partnerTreeX4()
    {
        $data['getX4Cycles1'] = $this->DashboardModel->getX4Cycles1();
        $data['getCyc'] = $this->DashboardModel->getCycX4();
        $data['title'] = 'User Dashboard';
        $template = 'partner_tree_x4';
        $this->header_and_footer($template, $data);
    }
    // --------get data by ajax----------
    // ---------getting data form cycle x4---------
    public function getX4Cycles()
    {
        $this->DashboardModel->getX4Cycles($_POST);
    }

    public function partnerTree()
    {
        $data['cycle'] = $this->DashboardModel->getCycle();
        $data['title'] = 'User Dashboard';
        $template = 'partnerTree';
        $this->header_and_footer($template, $data);
    }
    // ---X4 Breanch End---
    public function getDataByAjax()
    {
        $this->DashboardModel->getDataByAjax($_POST);
    }

    // ---Session unset----
    public function logOut()
    {
        $this->session->unset_userdata('userLoggedIn');
        redirect(base_url('user-login'));
    }

    // -----New Partner Regi for X4---
    public function x4PartnerRegi()
    {
        $uid = $this->session->userdata('userLoggedIn');
        $userid = $uid['uid'];
        $field_arry = array('uid' => $userid);
        $data['userWallet'] = $this->DashboardModel->getData('*', $field_arry, 'user_registration');

        $data['title'] = 'User Dashboard';
        $template = 'new_partner_regi_x4';
        $this->header_and_footer($template, $data);
    }
    // -----Save Partner for X4---
    public function register_user()
    {
        $this->form_validation->set_rules('email', 'E-mail', 'required|is_unique[user_registration.email]');
        $this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[10]|is_unique[user_registration.contact]');

        if ($this->form_validation->run() == FALSE) {
            // echo "success";
            // exit;
            $this->x4PartnerRegi();
        } else {
            $this->DashboardModel->AddUser2($_POST);
        }
    }
    
    // 25-09-20
    
    // Get Wallet Request
    function GetWalletRequest()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];
        $userId = $userData['userID'];

        $q = $this->db->select('*')
            ->from('wallet_request')
            ->where('rq_userID ', $uid)
            ->order_by('rqid ', 'DESC')
            ->get();
        return $q->result();
    }
    
    function by_balance_detail()
    {
        $data['title'] = 'Buy Balance';
        $template = 'by_balance';
        $data['getRequest'] = $this->DashboardModel->GetWalletRequesttoModel();
        // print_r($data['getRequest']);
        // exit;
        $this->header_and_footer($template, $data);
    }

    function Addtopuprequestt()
    {
        // print_r($_POST);
        // exit;
        $this->form_validation->set_rules('topup_type', 'Payment Type', 'required');
        $this->form_validation->set_rules('payment_utr', 'Payment UTR', 'required|numeric');
        $this->form_validation->set_rules('request_amount', 'Request Amount', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // print_r($_POST);
            $this->by_balance_detail();
        } else {
            // print_r($_POST);
            // exit;
            $this->DashboardModel->AddTopupRequest($_POST);
        }
    }
    // $this->DashboardModel->getPartners();
    
    // Direct Partner's 25-09-20

    function directPartners()
    {
        $data['title'] = 'Direct partners';
        $template = 'direct_partners';
        $data['getpartners'] = $this->DashboardModel->getPartners();
        // print_r($data['getpartners']);
        // exit;
        $this->header_and_footer($template, $data);
    }
    
    
     // ---All X4 Slots---
    public function SlotspartnerTreeX4()
    {
        $data['getX4slots1'] = $this->DashboardModel->getX4Slots1();
        // $data['getX4Slotss'] = $this->DashboardModel->getX4Slotss();
        // print_r($data['getX4slots1']);
        // exit;
        // $data['getCyc'] = $this->DashboardModel->getX4Slots();
        $data['title'] = 'User Dashboard';
        $template = 'getx4Slots';
        $this->header_and_footer($template, $data);
    }

    // --------Get Data by Ajax for All X4 Slots----------
    // ---------getting data form cycle x4---------
    public function getX4Slots()
    {
        $this->DashboardModel->getX4Slot($_POST);
    }
    
    
    


}
