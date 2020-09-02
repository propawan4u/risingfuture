<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usermodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // function checkLogin()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $data = $this->db
    //         ->get_where('users', array('email' => $email, 'password' => md5($password)));
    //     $q = $data->result();
    //     if ($data->num_rows() > 0) {
    //         $sessionData = array(
    //             'id' => $q->id,
    //             'role' => $q->role,
    //             'name' => $q->name,
    //         );
    //         $this->session->set_userdata('user_logged_in', $sessionData);
    //         return TRUE;
    //     } else {
    //         return FALSE;
    //     }
    // }
}
