<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usermodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function canLogin()
    {
        $userID = $this->input->post('userID');
        $password = $this->input->post('password');

        $data = $this->db
            ->get_where('tbl_user', array('userID' => $userID, 'password' => md5($password)));

        if ($data->num_rows() > 0) {
            $q = $data->row();
            $sessionData = array(
                'id' => $q->id,
                'role' => $q->role,
                'name' => $q->name,
            );
            $this->session->set_userdata('userLoggedIn', $sessionData);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
