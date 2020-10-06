<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usermodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function canLogin()
    {
        $userID = $this->input->post('userID');
        $password = $this->input->post('password');

        $data = $this->db
            ->get_where('user_registration', array('userID' => $userID, 'password' => md5($password)));

        if ($data->num_rows() > 0) {
            $q = $data->row();
            $sessionData = array(
                'uid' => $q->uid,
                'role' => $q->role,
                'name' => $q->name,
                'userID' => $q->userID
            );
            $this->session->set_userdata('userLoggedIn', $sessionData);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
