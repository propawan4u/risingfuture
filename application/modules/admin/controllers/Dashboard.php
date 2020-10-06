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
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    // ---Main Dashboard---
    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $template = 'dashboard';
        $data['wallet_request'] = $this->Adminmodel->wallet_reuquest();
        $data['CountAll'] = $this->Adminmodel->CountAllUser();
        $this->header_and_footer($template, $data);
    }
    // ---Session unset----

    public function logOut()
    {
        $this->session->unset_userdata('user_logged_in');
        redirect(base_url('login'));
    }

    // -- Edit Admin--
    function edit_admin()
    {
        $userData = $this->session->userdata('user_logged_in');
        // print_r($userData);
        echo $userID = $userData['uid'];
        // exit;
        $data['title'] = 'Edit Admin Profile';
        $template = 'edit_admin';
        $field_array = array('uid ' =>$userID);
        $get = $this->Adminmodel->getData('*',$field_array,'user_registration');
        $data['getAdmin'] = $get[0];
        $this->header_and_footer($template,$data);
    }

    // Update Admin
    function UpAdmin()
    {
        $this->form_validation->set_rules('name','Name');
        $this->form_validation->set_rules('email','E-mail','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('contact','Contact','required|exact_length[10]');

        if($this->form_validation->run() == FALSE){
            $this->edit_admin();
        }else{
            $this->Adminmodel->upadteAdmin($_POST);
        }
    }

    // User Registration

    function user_registration()
    {
        $data['title'] = 'User Registration';
        $template = 'user_registration';
        $field_array = array('id !=' => '');
        $data['getSlot'] = $this->Adminmodel->getData('*', $field_array, 'manage_slots');
        $this->header_and_footer($template, $data);
    }

    function user_form()
    {
        $data['title'] = 'User Registration';
        $template = 'user_form';
        $uId = $this->uri->segment(2);
        //$data['fetch'] = $this->Adminmodel->getSlotsData($uId);
        // print_r($uId);
        // die;
        $this->header_and_footer($template, $data);
    }

    function saveUser()
    {
        // print_r($_POST);die;
        $this->form_validation->set_rules('user_email', 'User E-mail', 'required|is_unique[user_registration.email]');
        // $this->form_validation->set_rules('user_password','User Password','required|exact_length[8]|numeric');
        $this->form_validation->set_rules('user_contact', 'User Contact', 'required|numeric|exact_length[10]|is_unique[user_registration.contact]');
        $this->form_validation->set_rules('btc_address', 'BTC Address');
        $this->form_validation->set_rules('parent_id', 'Parent Id', 'required|numeric');

        $userId = rand(1111, 9999);
        $Pass = rand(11111, 99999);
        // print_r($_FILES);die;

        $filename = $_FILES['userfile']['name'];
        $tmpfile = $_FILES['userfile']['tmp_name'];
        $target_dir = "./uploads/";
        $imgname = mt_rand(9, 99) . date('Ymd') . $filename;
        //  print_r($imgname);die;	
        $target_file = $target_dir . $imgname;

        if (move_uploaded_file($tmpfile, $target_file)) {
            $img = $imgname;
        } else {
            return 0;
        }

        $array = array(
            'role' => 2,
            'email' => $this->input->post('user_email'),
            'password' => md5($Pass),
            'show_pass' => $Pass,
            'contact' => $this->input->post('user_contact'),
            'status' => 1,
            'userID' => $userId,
            'parent_id' => $this->input->post('parent_id'),
            'btc_address' => $this->input->post('btc_address'),
            'profile' => $img,
        );

        $InSlot = array(
            'slotID ' => $this->input->post('add_slots'),
            'status' => 1,
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Some error Occurred');
            $this->user_form();
        } else {
            $add = $this->Adminmodel->UserSave($array);
            $addSlot = $this->Adminmodel->xThreeAdd($InSlot);
            $this->session->set_flashdata('success', 'User Added Successfully !!');
            redirect(base_url() . 'user-details');
            // print_r($_POST);die;

        }
    }

    function user_details()
    {
        $data['title'] = 'User Details';
        $template = 'user_details';
        $data['user_get'] = $this->Adminmodel->GetUsers();
        $parent_id = $this->uri->segment(2);
        // $data['get'] = $this->Adminmodel->parentName($parent_id);
        $this->header_and_footer($template, $data);
    }

    function getNameByAjax()
    {
        // print($_POST);die;
        $Id = $this->input->post('parent_id');
        $get = $this->Adminmodel->getUserByAjax($Id);
        // print_r($get);
        // die;
        // echo $get[0]->name; 
    }

    function user_delete()
    {
        $Id = $this->uri->segment(2);
        $data['del'] = $this->Adminmodel->delUser($Id);
        if ($del) {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'user-details');
        } else {
            $this->session->set_flashdata('success', 'User Deleted Successfully !!');
            redirect(base_url() . 'user-details');
        }
    }

    function edit_user()
    {
        $data['title'] = 'Edit User';
        $template = 'edit_user';
        $uId = $this->uri->segment(2);
        $field_array = array('uid' => $uId);
        $data['fetch'] = $this->Adminmodel->getData('*', $field_array, 'user_registration');
        // print_r($data['fetch']);die;
        $this->header_and_footer($template, $data);
    }

    function user_up()
    {

        $UpIns = array(
            'status' => $this->input->post('status'),
            'contact' => $this->input->post('contact'),
        );
        // print_r($UpIns);die;
        $uId = $this->input->post('uid');
        $data['Up'] = $this->Adminmodel->UserUppdate($uId, $UpIns);
        if ($Up) {
            // print_r($_POST);die;
            $this->session->set_flashdata('success', 'User Updated Successfully !!');
            redirect(base_url() . 'user-details');
        } else {
            $this->session->set_flashdata('error', 'Some error Occcurred !!');
            redirect(base_url() . 'edit-user/' . $uId);
        }
    }

    function edit_password()
    {
        $data['title'] = 'Edit Password';
        $template = 'edit_password';
        $Id = $this->uri->segment(2);
        $field_array = array('uid' => $Id);
        $data['fetch'] = $this->Adminmodel->getData('*', $field_array, 'user_registration');
        $this->header_and_footer($template, $data);
    }

    function update_password()
    {
        $Id = $this->input->post('uid');
        $pass = $this->input->post('password');
        $array = array(
            'password' => md5($pass),
            'show_pass' => $pass,
        );
        $upPass = $this->Adminmodel->UpUserPassword($Id, $array);
        // print_r($upPass);die;
        if ($upPass) {
            $this->session->set_flashdata('success', 'Password Create Successfully !!');
            redirect(base_url() . 'user-details');
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'edit-password/' . $Id);
        }
    }



    // Show Child's Start

    function show_child_list()
    {
        $data['title'] = '';
        $template = 'show_childs';
        $uName = $this->uri->segment(2);
        $field_array = array('parent_id' => $uName);
        $data['user_get'] = $this->Adminmodel->getData('*', $field_array, 'user_registration');
        // print_r($data['user_get']);
        // die;
        $this->header_and_footer($template, $data);
    }

    // Show Childs Endded


    // Slots Creation

    function slots_details()
    {
        $data['title'] = 'Manage Slots';
        $template = 'manage_slots';
        $data['get_slot'] = $this->Adminmodel->getSlot();
        // print_r($data['get_slot']);die;
        $this->header_and_footer($template, $data);
    }

    function add_slots()
    {
        $data['title'] = 'Add Slots';
        $template = 'add_slots';
        $this->header_and_footer($template, $data);
    }

    function save_slots()
    {

        $this->form_validation->set_rules('slot_name', 'Slot Name', 'required|alpha|is_unique[manage_slots.slot_name]');
        $this->form_validation->set_rules('slot_value', 'Slot Value', 'required|numeric|is_unique[manage_slots.slot_value]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Some error Occurred');
            $this->add_slots();
        } else {
            // print_r($_POST);die;
            $InsSlot = $this->Adminmodel->saveSlots($_POST);
            $this->session->set_flashdata('success', 'Slot Added Successfully !!');
            redirect(base_url().'slots-detail');
        }
    }

    function edit_slots()
    {
        $data['title'] = 'Edit Slots';
        $template = 'edit_slots';
        $Id = $this->uri->segment(2);
        $field_array = array('sid' => $Id);
        $data['fetch'] = $this->Adminmodel->getData('*', $field_array, 'manage_slots');
        // print_r($data['fetch']);die;
        $this->header_and_footer($template, $data);
    }

    function upSlots()
    {
        $array = array(
            'slot_name' => $this->input->post('slot_name'),
            'slot_value' => $this->input->post('slot_value'),
            'status' => $this->input->post('status'),
        );
        // print_r($array);die;
        $Id  = $this->input->post('id');
        $UpSlots = $this->Adminmodel->UpSlots($Id, $array);
        if ($UpSlots) {
            // print_r($_POST);die;
            $this->session->set_flashdata('success', 'User Updated Successfully !!');
            redirect(base_url() . 'slots-detail');
        } else {
            $this->session->set_flashdata('error', 'Some error Occcurred !!');
            redirect(base_url() . 'edit-slots/' . $Id);
        }
    }

    function delSlots()
    {
        $Id = $this->uri->segment(2);
        $Del = $this->Adminmodel->deleteSlots($Id);
        if (!$Del) {
            $this->session->set_flashdata('success', 'Slot Deleted Successfully !!');
            redirect(base_url() . 'slots-detail');
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'slots-detail');
        }
    }

    // Manage Transaction

    function transaction_details()
    {
        $data['title'] = 'Manage Transactions';
        $template = 'manage_transaction';
        $data['Transaction_details'] = $this->Adminmodel->getTransaction();
        // print_r($data['Transaction_details']);exit; 
        $this->header_and_footer($template,$data);
    } 

    function edit_transaction_status()
    {
        $data['title'] = 'Edit Transaction';
        $template = 'edit_transaction_status';
        $wId = $this->uri->segment(2);
        $getstatus = $this->Adminmodel->changeStatus($wId);
        $data['getStatus'] = $getstatus[0];

        // print_r($data['getStatus']);die;
        $this->header_and_footer($template,$data);
    }

    function update_transaction()
    {
        $Fetch = $this->Adminmodel->updateTransaction($_POST);
    }

    function show_debit_credit()
    {
        $data['title'] = 'Show Debit or Credit Details';
        $template = 'manage_debit_credit';
        $data['debit'] = $this->Adminmodel->show_debit_credit();
        $this->header_and_footer($template,$data);
    }

    function show_reuquest()
    {
        $UserId = $this->uri->segment(2);
        $data['title'] = 'Update Wallet Request';
        $template = 'update_wallet';
        $gett = $this->Adminmodel->show_reuquest($UserId);

        $data['getRequest'] = $gett[0];
        $this->header_and_footer($template,$data);
    }

    function update_request()
    {
        $rqid = $this->uri->segment(2);
        $this->Adminmodel->update_request($rqid);
    }


    // --------load Template-----
    function header_and_footer($template, $data)
    {
        $this->load->view('admintemplate/header', $data);
        $this->load->view('admintemplate/sidebar', $data);
        $this->load->view($template, $data);
        $this->load->view('admintemplate/footer', $data);
    }
}
