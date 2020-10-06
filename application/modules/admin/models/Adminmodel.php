<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Adminmodel extends CI_Model
{
    var $gallery_path;
    function __construct()
    {
        parent::__construct();
        $this->gallery_path = base_url('/uploads');
    }

    function checkLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->db
            ->get_where('user_registration', array('email' => $email, 'password' => md5($password)));
        $q = $data->row();
        // $q = $data->row();
        // print_r($data);
        // exit;
        if ($data->num_rows() > 0) {
            $sessionData = array(
                'uid' => $q->uid,
                'role' => $q->role,
                'name' => $q->name,
                'userID' => $q->userID,
            );
            // print_r($data);exit;
            $this->session->set_userdata('user_logged_in', $sessionData);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Update Admin
    function upadteAdmin()
    {
        // print_r($_POST);die;
        $Id = $this->input->post('Id');
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['password'] = md5($this->input->post('password'));
        $formArray['contact'] = $this->input->post('contact');
        $formArray['wallet'] = $this->input->post('wallet');
        $formArray['show_pass'] = $this->input->post('password');
        if (!is_dir('./uploads/')) {
            mkdir('./uploads/');
        }
        $config['file_name'] = rand(1000, 1000000);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $_FILES['userfiles']['name'] = $_FILES['userfile']['name'];
        $_FILES['userfiles']['type'] = $_FILES['userfile']['type'];
        $_FILES['userfiles']['tmp_name'] = $_FILES['userfile']['tmp_name'];
        $_FILES['userfiles']['size'] = $_FILES['userfile']['size'];
        $_FILES['userfiles']['error'] = $_FILES['userfile']['error'];
        if ($this->upload->do_upload('userfiles')) {
            $data = $this->upload->data();
            // print_r($data);exit;
            $imgPath = "uploads/" . $data['file_name'];
            // echo $imgPath;exit;
            $formArray['user_profile'] = $imgPath;
            $matchData = $this->db->get_where('user_registration', array('uid' => $Id))->row();
            // print_r($matchData);exit;
            if (!empty($matchData)) {
                unlink($matchData->user_profile);
            }
            $this->db->where('uid', $Id);
            $query = $this->db->update('user_registration', $formArray);
            // print_r($query);exit;
            if ($query) {
                $this->session->set_userdata('success','Admin Updated Successfully !!');
                redirect(base_url().'edit-admin');
            } else {
                $this->session->set_userdata('error','Some error Occurred');
                redirect(base_url().'edit-admin');
            }
        } else {
            $this->db->where('uid', $Id);
            $query = $this->db->update('user_registration', $formArray);
            if ($query) {
                $this->session->set_userdata('success','Admin Updated Successfully !!');
                redirect(base_url().'edit-admin');
            } else {
                $this->session->set_userdata('error','Some error Occurred');
                redirect(base_url().'edit-admin');
            }
        }
    }

    // User Creatin Started

    function UserSave($array)
    {
        $this->db->insert('user_registration', $array);
        // print_r($array);die;
    }

    function GetUsers()
    {
        $this->db->select('*')
            ->where('uid !=', '')
            ->from('user_registration');
        $q = $this->db->order_by('uid', 'desc')
            ->get();
        return $q->result();
    }

    function getUserByAjax($id)
    {
        $q = $this->db
            ->select('*')
            ->get_where('user_registration', ['userID' => $id])
            ->result();
        if (!empty($q)) {
            echo $q[0]->userID;
        } else {
            echo "Id Not Matched";
        }

        //  print_r($q);die;
    }

    function UserUppdate($uId, $array)
    {
        $q = $this->db->where('uid', $uId)
            ->update('user_registration', $array);
        if ($q) {
            $this->session->set_flashdata('success', 'User Updated Successfully !!');
            redirect(base_url() . 'user-details');
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'edit-user');
        }
    }

    function delUser($id)
    {
        $status = $this->uri->segment(3);
        $this->db->where('uid', $id)
            ->update('user_registration',array('is_delete'=>$status,'status' =>'0'));
    }

    function UpUserPassword($id, $array)
    {
        $q =  $this->db->where('uid', $id)
            ->update('user_registration', $array);
        if ($q) {
            $this->session->set_flashdata('success', 'New Password Genrated Successfully !!');
            redirect(base_url() . 'user-details');
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'edit-password');
        }
    }

    // function getSlotsData($uId)
    // {
    //     $this->db->select('t1.*,t3.*,t2.*');
    //     $this->db->from('purchased_slots t1');
    //     $this->db->join('user_registration t2', 't2.uid = t1.user_id', 'FULL');
    //     $this->db->join('manage_slots t3', 't3.id  = t1.slotID ', 'FULL');
    //     $this->db->where('t2.uid', $uId);

    //     $q = $this->db->get();
    //     $result = $q->result();
    //     // return $result;
    //     print_r($result);
    //     die;
    // }

    // User Creation Endded

    // For Get Data Multiple Time

    function getData($select, $where, $table)
    {
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);

        $result = $query->result_array();
        return $result;
    }

    // End

    // Slots Creation Started

    function getSlot()
    {
        $q = $this->db->select('*')
            ->where('sid !=', '')
            ->from('manage_slots')
            ->get()
            ->result();
        return $q;
        // print_r($q);die;
    }

    function saveSlots()
    {
        $array = array(
            'slot_name' => $this->input->post('slot_name'),
            'slot_value' => $this->input->post('slot_value'),
            'status' => 1
        );
        // print_r($_POST);die;
        $q = $this->db->insert('manage_slots', $array);
        
        return $q;
    }

    function UpSlots($id, $array)
    {
        $q = $this->db->where('sid', $id)
            ->update('manage_slots', $array);
        if ($q) {

            $this->session->set_flashdata('success', 'Slot Updated Successfully !!');
            redirect(base_url() . 'slots-detail');
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'edit-slots');
        }
    }

    function deleteSlots($id)
    {
        $this->db->where('sid', $id)
            ->delete('manage_slots');
    }

    // Slots Creation Endded


    // X-Three Creation Started

    function xThreeAdd($array)
    {
        $this->db->insert('x_three', $array);
    }

    // X-Three Creation Ended
    

    // Get Transaction Detail's

    function getTransaction()
    {
        $this->db->select('t1.*,t2.*');
        $q = $this->db->from('user_registration t1')
                     ->join('transactions_details t2','t2.user_ID = t1.userID')
                     ->order_by('wid','DESC')
                     ->get()
                     ->result();
        return $q;
    }

    function changeStatus($wId)
    {
        $this->db->select('t1.*,t2.*');
        $this->db->from('user_registration t1')
                 ->join('transactions_details t2','t2.user_ID = t1.userID');
        $q = $this->db->where('wid',$wId)
                      ->get()
                      ->result();
        return $q;
    }

    function updateTransaction()
    {
        $wid = $this->input->post('wid');
        $amt = $this->input->post('amount');
        $request_amt = $this->input->post('request_amt');
        $statuss = $this->input->post('status');
        $uId = $this->input->post('uid');
        $amt1 = $amt + $request_amt;

        $updateStatus = array(
            'req_status	' =>$statuss,
        );
        // print_r($updateStatus);exit;
        if($statuss == 1){
            $updateWallet = array(
                'wallet' =>$amt1,
            );
            // print_r($updateWallet);exit;
            $status = $this->db->where('uid',$uId)
                           ->update('user_registration',$updateWallet);
        }
        $status = $this->db->where('wid',$wid)
                           ->update('transactions_details',$updateStatus);
        if($status){
            if($statuss == 0){
                $this->session->set_flashdata('warning', 'You do not change the request status. Please go to the transaction request editing section !!');
                redirect(base_url() . 'manage-transaction');
            }elseif($statuss == 1){
                $this->session->set_flashdata('success', 'Request Approved Successfully !!');
                redirect(base_url() . 'manage-transaction');
            }elseif($statuss == 2){
                $this->session->set_flashdata('success', 'Request Declined Successfully!!');
                redirect(base_url() . 'manage-transaction');
            }
            
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'edit-transactions/'.$wid);
        }

        // $Fetch = $this->db->where('userID',)
    }

    function show_debit_credit()
    {
        // SELECT * FROM `transactions_details` as t1 LEFT JOIN user_registration as t2 on t2.uid = t1.debit WHERE debit = uid OR credit = uid ORDER BY wid DESC



        $q = $this->db->select('t1.*,t2.*')
            ->from('transactions_details t1')
            ->join('user_registration  t2','t2.uid = t1.debit','LEFT')
            ->where(array('debit' => 'uid','credit' => 'uid'))
            ->order_by('wid','DESC')
            ->get();
        
            return $q->result();

    }

    function wallet_reuquest()
    {
        $q = $this->db->select('*')
            ->from('wallet_request')
            ->order_by('rqid', 'DESC')
            ->get();
        return $q->result();
    }

    function CountAllUser()
    {
        $q = $this->db->select('*')
            ->from('user_registration')
            ->get();
        return $q->num_rows();
    }

    function todayUsers()
    {
        $this->db->select('*')
             ->from('user_registration')
             ->where('join_at',now())
             ->get();
    }

    function show_reuquest($UserId)
    {
        $q = $this->db->select('*')
                  ->from('wallet_request')
                  ->where('rq_userID',$UserId)
                  ->order_by('rqid','DESC')
                  ->get();
        return $q->result();
    }

    function update_request($rqid)
    {
        $UserID = $this->uri->segment(3);
        $Amount = $this->uri->segment(4);
        $Status = $this->uri->segment(5);

        if ($Status == 1) {

            $adminwallet = $this->db->get_where('user_registration', array('uid' => 1))->row();
            $lessWallet = $adminwallet->wallet - $Amount;

            $AdminWalletUp =  $this->db->where('uid', 1)
                ->update('user_registration', array('wallet' => $lessWallet));
            if ($AdminWalletUp) {
                $wallet = $this->db->get_where('user_registration', array('uid' => $UserID))->row();
                $AppAmt = $Amount + $wallet->wallet;

                $usWalletUp = $this->db->where('uid', $UserID)
                    ->update('user_registration', array('wallet' => $AppAmt));
                if($usWalletUp){
                    $Update = $this->db->where('rqid', $rqid)
                        ->update('wallet_request', array('wallet_status' => $Status));
                
                    $this->session->set_flashdata('success', 'Wallet Request Approved Successfully !!');
                    redirect(base_url() . 'dashboard');
                }
                
            }
        } elseif ($Status == 2) {
            $Update = $this->db->where('rqid', $rqid)
                        ->update('wallet_request', array('wallet_status' => $Status));
            $this->session->set_flashdata('success', 'Wallet Request Declined Successfully !!');
            redirect(base_url() . 'dashboard');
        } else {
            $this->session->set_flashdata('error', 'Some error Occurred !!');
            redirect(base_url() . 'dashboard');
        }
    }
    
    

    // function parentName($parent_id)
    // {
    //     $q = $this->db->query("SELECT name FROM `user_registration` WHERE user_name = $parent_id");
    //     return $q->result();
    // }
}
