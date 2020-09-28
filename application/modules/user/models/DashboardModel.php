<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // -----Check session for authenticate user---
        if (!$this->session->userdata('userLoggedIn')) {
            redirect(base_url('user-login'));
        }
        $this->load->model('X4workingModel');
        // $this->load->helper('sendsms_helper');
    }



    // ---Getting Slots----
    public function getSlots()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];

        $data = $this->db
            ->select('t1.*,t2.*,t4.*,t5.*,t6.*')
            ->from('cycle t1')
            ->join('cycle_x3 t2', 't2.cx3id = t1.cid', 'INNER')
            ->join('user_registration t4', 't4.uid = t1.uID', 'INNER')
            ->join('purchased_slots t5', 't5.user_ID = t4.userID', 'LEFT')
            ->join('manage_slots t6', 't6.sid = t5.slotID', 'LEFT')
            ->order_by('t1.cid', 'DESC')
            ->limit(1)
            ->where(array('t1.uID' => $uid))
            ->get()
            ->result();

        if (!empty($data)) {

            return $data;
        }
    }

    // ---Getting Slots----
    public function getUserDetails()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];

        $data = $this->db
            ->select('t1.*,t2.*')
            ->from('user_registration t1')
            ->join('user_details t2', 't2.ur_ID = t1.uid', 'FULL')
            ->where('t1.uid', $uid)
            ->get()
            ->row();

        if (!empty($data)) {

            return $data;
        }
    }

    // ---------update user profile--------
    public function update_user_profile($uid)
    {
        $formArray = array(
            'ac_hld_name' => $this->input->post('ac_hld_name'),
            'bank_name' => $this->input->post('ifsc'),
            'ac_no' => $this->input->post('ac_number'),
            'ifsc' => $this->input->post('ac_hld_name'),
            'branch' => $this->input->post('branch')
        );

        $query = $this->db
            ->where('ur_ID', $uid)
            ->update('user_details', $formArray);
        if ($query) {
            $this->session->set_flashdata('success', 'Account details save successfully !!');
            redirect(base_url('user-profile'));
        }
    }
    // ---------update user password--------
    public function update_user_credential()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];

        $data = $this->db->get_where('user_registration', array('uid' => $uid))->row();
        if ($data->password == md5($this->input->post('old_pass'))) {
            $newPass = $this->input->post('new_pass');

            $query = $this->db
                ->where('uid', $uid)
                ->update('user_registration', array('password' => md5($newPass), 'show_pass' => $newPass));

            if ($query) {
                $this->session->set_flashdata('success', 'Password update successfully !!');
                redirect(base_url('security'));
            } else {
                $this->session->set_flashdata('error', 'Error during update !!');
                redirect(base_url('security'));
            }
        } else {
            $this->session->set_flashdata('error', 'Password not matched !!');
            redirect(base_url('security'));
        }
    }

    // ---Getting LogIn Values

    function getLogInValue()
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];

        $q = $this->db->select('t1.*,t2.*')
            ->from('user_registration t1')
            ->join('redeem_points t2', 't2.new_user_id = t1.userID ', 'LEFT')
            ->where('t1.uid', $uid)
            ->get()
            ->row();
        return $q;
    }

    // ---Getting Slots----
    public function getCycle()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];

        $data = $this->db
            ->select('t1.*,t2.*,t4.*,t5.*,t6.*')
            ->from('cycle t1')
            ->join('cycle_x3 t2', 't2.cx3id = t1.cid', 'INNER')
            ->join('user_registration t4', 't4.uid = t1.uID', 'INNER')
            ->join('purchased_slots t5', 't5.user_ID = t4.userID', 'LEFT')
            ->join('manage_slots t6', 't6.sid = t5.slotID', 'LEFT')
            ->where(array('t1.uID' => $uid))
            ->get()
            ->result();

        if (!empty($data)) {

            return $data;
        }
    }

    public function getDataByAjax()
    {

        $x3id = $this->input->post('x3id');

        $userData = $this->session->userdata('userLoggedIn');
        $userID = $userData['uid'];

        $data = $this->db
            ->get_where('cycle_x3', array('x3id' => $x3id))
            ->row();
        // print_r($data);
        // exit;
        if (!empty($data)) {
            echo "
            
                <li>
                  <a href='" . base_url('new-registration/1') . "'>
                    <div class='member-view-box'>
                      <div class='member-image'>
                        <img src='" .
                base_url('assets/uploads/user-added-1.png')
                . "' alt='Member'>
                        <div class='member-details'>
                          <small class='text-light'>" . $data->b1 . "</small>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='" . base_url('new-registration/1') . "'>
                    <div class='member-view-box'>
                      <div class='member-image'>
                        <img src='" . base_url('assets/uploads/user-added-1.png') . "' alt='Member'>
                        <div class='member-details'>
                          <small class='text-light'>" . $data->b2 . "</small>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='" . base_url('new-registration/1') . "'>
                    <div class='member-view-box'>
                      <div class='member-image'>
                        <img src='" . base_url('assets/uploads/user-added-1.png') . "' alt='Member'>
                        <div class='member-details'>
                          <small class='text-light'>" . $data->b3 . "</small>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
            
            ";
        }
    }

    // ---------getting data form cycle x4---------
    public function getCycX4()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];
        $cycleX4Data = $this->db
            ->select('t1.*,t3.*,t4.*')
            ->from('cycle t1')
            ->join('cycle_x4 t3', 't3.partnerID = t1.uID', 'LEFT')
            ->join('user_registration t4', 't4.uid = t1.uID', 'INNER')
            ->order_by('t1.cid', 'DESC')
            ->order_by('t3.x4id', 'DESC')
            ->limit(7)
            ->where(array('t4.uid' => $uid))
            ->get()
            ->result();

        // print_r($cycleX4Data);
        // exit;
        if (!empty($cycleX4Data)) {

            return $cycleX4Data;
        }
    }

    // ---------getting data form cycle x4---------
    public function getX4Cycles1()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];


        $cycleX4Data =
            $this->db
            ->select('t1.*,t2.userID')
            ->from('cycle_x4 t1')
            ->join('user_registration t2', 't2.uid = t1.partnerID', 'FULL')
            ->order_by('t1.x4id', 'DESC')
            ->where(array('uid' => $uid, 'level !=' => '', 'branch !=' => '', 'position !=' => ''))
            ->get()
            ->result();
        // $data = array_filter($cycleX4Data);
        // print_r(array_chunk($cycleX4Data, 6));
        // exit;

        if (!empty($cycleX4Data)) {

            return array_chunk($cycleX4Data, 6);
        }
    }
    // ---------getting data form cycle x4---------
    public function getX4Cycles()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];

        $key = $this->input->post('key');
        // echo $key;
        // exit;

        $cycleX4Data =
            $this->db
            ->select('t1.*,t2.userID')
            ->from('cycle_x4 t1')
            ->join('user_registration t2', 't2.uid = t1.partnerID', 'FULL')
            ->order_by('t1.x4id', 'ASC')
            ->where(array('uid' => $uid, 'level !=' => '', 'branch !=' => '', 'position !=' => ''))
            ->get()
            ->result();

        // print_r(array_chunk($cycleX4Data, 6));
        // exit;

        if (!empty($cycleX4Data)) {
            $cycData = array_chunk($cycleX4Data, 6);
            // return array_chunk($cycleX4Data, 6);
            echo json_encode($cycData[$key]);
        }
    }

    public function update_balance($amt)
    {
        if (!empty($amt)) {
            $uId = $this->session->userdata('userLoggedIn');
            $uid = $uId['uid'];

            // -----getting data from cycle_x3--------
            $data = $this->db
                ->where('uid', $uid)
                ->get('user_registration')
                ->row();
            $update_bal = $data->balance + $amt;
            $this->db
                ->where('uid', $uid)
                ->update('user_registration', array('balance' => $update_bal));
        }
    }

    public function insert_in_cycle_x4($newUserID, $newPartnerLastInsert)
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];

        $data = $this->db->select('t1.*,t2.*,t3.*,t4.*,t5.*,t6.*')
            ->from('cycle t1')
            ->join('cycle_x3 t2', 't2.cx3id = t1.cid', 'INNER')
            ->join('cycle_x4 t3', 't3.cx4id = t1.cid', 'LEFT')
            ->join('user_registration t4', 't4.uid = t1.uID', 'INNER')
            ->join('purchased_slots t5', 't5.user_ID = t4.userID', 'LEFT')
            ->join('manage_slots t6', 't6.sid = t5.slotID', 'LEFT')
            ->order_by('t1.cid', 'DESC')
            ->order_by('t3.x4id', 'DESC')
            ->where(array('t1.uID' => $uid, 't3.level !=' => '', 't3.branch !=' => '', 't3.position !=' => ''))
            ->get()
            ->row();

        if (empty($data)) {

            $data1 = $this->db
                ->order_by('cid', 'DESC')
                ->limit(1)
                ->get_where('cycle', array('uID' => $uid))
                ->row();

            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 1,
                'branch' => 'L',
                'position' => 1,
                'usr_id' => $newUserID
            );

            $updateQuex4 = $this->db
                ->where('cx4id', $data1->cid)
                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {
                $this->db->insert('cycle_x4', array('cx4id' => $data1->cid, 'partnerID' => $uid));
                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
                // redirect(base_url('user-dashboard'));
            }
        } else if ($data->level == 1 && $data->branch == 'L' && $data->position == 1 && !empty($newUserID)) {
            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 1,
                'branch' => 'R',
                'position' => 2,
                'usr_id' => $newUserID
            );

            $updateQuex4 = $this->db
                ->where('cx4id', $data->cx4id)
                ->limit(1)
                ->order_by('x4id', 'DESC')
                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {

                $data3 = $this->db
                    ->order_by('cid', 'DESC')
                    ->limit(1)
                    ->get_where('cycle', array('uID' => $uid))
                    ->row();

                $this->db->insert('cycle_x4', array('cx4id' => $data3->cid, 'partnerID' => $uid));
                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
                // redirect(base_url('user-dashboard'));
            }
        } else if ($data->level == 1 && $data->branch == 'R' && $data->position == 2 && !empty($newUserID)) {
            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 2,
                'branch' => 'L',
                'position' => 3,
                'usr_id' => $newUserID
            );

            $updateQuex4 = $this->db
                ->where('cx4id', $data->cx4id)
                ->limit(1)
                ->order_by('x4id', 'DESC')

                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {

                $data3 = $this->db
                    ->order_by('cid', 'DESC')
                    ->limit(1)
                    ->get_where('cycle', array('uID' => $uid))
                    ->row();
                $this->db->insert('cycle_x4', array('cx4id' => $data3->cid, 'partnerID' => $uid));
                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
                // redirect(base_url('user-dashboard'));
            }
        } else if ($data->level == 2 && $data->branch == 'L' && $data->position == 3 && !empty($newUserID)) {
            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 2,
                'branch' => 'R',
                'position' => 4,
                'usr_id' => $newUserID
            );
            $data3 = $this->db
                ->order_by('cid', 'DESC')
                ->limit(1)
                ->get_where('cycle', array('uID' => $uid))
                ->row();

            $updateQuex4 = $this->db
                ->where(array('cx4id' => $data3->cid))
                ->limit(1)
                ->order_by('cx4id', 'DESC')

                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {

                $data3 = $this->db
                    ->order_by('cid', 'DESC')
                    ->limit(1)
                    ->get_where('cycle', array('uID' => $uid))
                    ->row();
                $this->db->insert('cycle_x4', array('cx4id' => $data3->cid, 'partnerID' => $uid));
                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
                // redirect(base_url('user-dashboard'));
            }
        } else if ($data->level == 2 && $data->branch == 'R' && $data->position == 4 && !empty($newUserID)) {
            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 2,
                'branch' => 'L',
                'position' => 5,
                'usr_id' => $newUserID
            );

            $data3 = $this->db
                ->order_by('cid', 'DESC')
                ->limit(1)
                ->get_where('cycle', array('uID' => $uid))
                ->row();

            $updateQuex4 = $this->db
                ->where('cx4id', $data3->cid)
                ->limit(1)
                ->order_by('x4id', 'DESC')

                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {

                $this->db->insert('cycle_x4', array('cx4id' => $data3->cid, 'partnerID' => $uid));
                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
                // redirect(base_url('user-dashboard'));
            }
        } else if ($data->level == 2 && $data->branch == 'L' && $data->position == 5 && !empty($newUserID)) {
            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 2,
                'branch' => 'R',
                'position' => 6,
                'usr_id' => $newUserID
            );

            $updateQuex4 = $this->db
                ->where('cx4id', $data->cx4id)
                ->limit(1)
                ->order_by('x4id', 'DESC')
                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {

                $data3 = $this->db
                    ->order_by('cid', 'DESC')
                    ->limit(1)
                    ->get_where('cycle', array('uID' => $uid))
                    ->row();

                $this->db->insert('cycle_x4', array('cx4id' => $data3->cid, 'partnerID' => $uid));

                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
                // redirect(base_url('user-dashboard'));
            }
        } else if ($data->level == 2 && $data->branch == 'R' && $data->position == 6 && !empty($newUserID)) {
            $formArrayX4 = array(
                'partnerID' => $uid,
                'level' => 1,
                'branch' => 'L',
                'position' => 1,
                'usr_id' => $newUserID
            );
            $data2 = $this->db
                ->select('t1.*,t2.*')
                ->from('cycle_x4 t1')
                ->join('cycle t2', 't2.cid = t1.cx4id', 'INNER')
                ->order_by('x4id', 'DESC')
                ->limit(1)
                ->where(array('t2.uID' => $uid))
                ->get()
                ->row();
            $updateQuex4 = $this->db
                ->where('cx4id', $data2->cx4id)
                ->limit(1)
                ->order_by('x4id', 'DESC')
                ->update('cycle_x4', $formArrayX4);
            if ($updateQuex4) {
                $data3 = $this->db
                    ->order_by('cid', 'DESC')
                    ->limit(1)
                    ->get_where('cycle', array('uID' => $uid))
                    ->row();

                $this->db->insert('cycle_x4', array('cx4id' => $data3->cid, 'partnerID' => $uid));
                $this->update_balance(200);
                $this->trans_history(200, $newPartnerLastInsert, $uid);
            }
        }
        $this->session->set_flashdata('success', 'Partner registration successfully !!');
        redirect(base_url('user-dashboard'));
    }


    public function adminWorking()
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];
        $userID = $uId['userID'];

        $newUserId = rand(1111, 9999);
        $Pass = rand(11111, 99999);

        $cycleData = $this->db
            ->select('t1.*,t2.*,t3.*,t4.*,t5.*,t6.*')
            ->from('cycle t1')
            ->join('cycle_x3 t2', 't2.cx3id = t1.cid', 'INNER')
            ->join('cycle_x4 t3', 't3.cx4id = t1.cid', 'LEFT')
            ->join('user_registration t4', 't4.uid = t1.uID', 'INNER')
            ->join('purchased_slots t5', 't5.user_ID = t4.userID', 'LEFT')
            ->join('manage_slots t6', 't6.sid = t5.slotID', 'LEFT')
            ->order_by('t1.cid', 'DESC')
            ->where('t1.uID', $uid)
            ->get()
            ->row();

        if (!empty($cycleData)) {

            if ($cycleData->wallet >= $cycleData->slot_value) {

                $formArray = array(
                    'parent_id' => $userID,
                    'userID' => $newUserId,
                    'password' => md5($Pass),
                    'name' => $this->input->post('name'),
                    'role' => 2,
                    'email' => $this->input->post('email'),
                    'contact' => $this->input->post('contact'),
                );
                $msg = 'Hey this is pawan!!';
                $this->sendsms(6392452633, $msg);
                $query = $this->db->insert('user_registration', $formArray); //-----New Partner Registration----
                $newPartnerLastInsert = $this->db->insert_id();


                if ($query) {

                    $this->db->insert('user_details', array('ur_id' => $newPartnerLastInsert));

                    $insertSlotQuery = $this->db->insert('purchased_slots', array('user_ID' => $newUserId, 'slotID' => 1));

                    $this->db->insert('redeem_points', array('new_user_id' => $newUserId, 'points' => 100)); //-----Redeem points added here----

                    $walletAmount = ($cycleData->wallet - $cycleData->slot_value);

                    $trans = $this->db
                        ->where('uid', $uid)
                        ->update('user_registration', array('wallet' => $walletAmount)); //---updating existing Partner wallet--

                    if ($trans) {
                        $this->trans_history($cycleData->slot_value, $uid, $newPartnerLastInsert);
                        // ------------------New Partner Cycle created-----------
                        $amt_div = ($cycleData->slot_value - 100) / 2;
                        $cycleArray = array(
                            'uID' => $newPartnerLastInsert,
                            'x3' => $newUserId,
                            'x4' => $newUserId,
                            'amt_in_x3' => $amt_div, //---200/----
                            'amt_in_x4' => $amt_div, //----200/-----
                        );
                        $que1 = $this->db->insert('cycle', $cycleArray); //----insert cycle into cycle----
                        $lastCycID = $this->db->insert_id(); //-----------Getting last insert id-----
                        // ------------------New Partner Cycle_x3 created-----------

                        if ($que1) {
                            // --------update upline ac balance -----------
                            $updated_balance = $cycleData->balance + 100;

                            $que2 = $this->db
                                ->where('uid', $uid)
                                ->update('user_registration', array('balance' => $updated_balance)); //----100/- goes to admin----
                            if ($que2) {

                                $this->trans_history(100, $newPartnerLastInsert, $uid);

                                $cycleX3Array = array(
                                    'cx3id' => $lastCycID
                                );
                                $this->db->insert('cycle_x3', $cycleX3Array);
                                $this->db->insert('cycle_x4', array('cx4id' => $lastCycID, 'partnerID' => $newPartnerLastInsert));
                                // ----------------------------------------------------------------------------
                                if (empty($cycleData->b1)) {
                                    $formArrayX3 = array(
                                        'b1' => $newUserId
                                    );
                                    $updateQuex3 = $this->db
                                        ->where('cx3id', $cycleData->cx3id)
                                        ->update('cycle_x3', $formArrayX3);
                                    if ($updateQuex3) {

                                        $this->update_balance(200);
                                        $this->trans_history(200, $newPartnerLastInsert, $uid);

                                        $this->insert_in_cycle_x4($newUserId, $newPartnerLastInsert);
                                        redirect(base_url('user-dashboard'));
                                    }
                                } else  if (!empty($cycleData->b1) && empty($cycleData->b2)) {
                                    $formArrayX3 = array(
                                        'b2' => $newUserId
                                    );
                                    $updateQuex3 = $this->db
                                        ->where('cx3id', $cycleData->cx3id)
                                        ->update('cycle_x3', $formArrayX3);

                                    if ($updateQuex3) {
                                        $this->update_balance(200);
                                        $this->trans_history(200, $newPartnerLastInsert, $uid);


                                        $this->insert_in_cycle_x4($newUserId, $newPartnerLastInsert);
                                        redirect(base_url('user-dashboard'));
                                    }
                                } else  if (!empty($cycleData->b2) && empty($cycleData->b3)) {
                                    $formArrayX3 = array(
                                        'b3' => $newUserId
                                    );
                                    $updateQuex3 = $this->db
                                        ->where('cx3id', $cycleData->cx3id)
                                        ->update('cycle_x3', $formArrayX3);

                                    if ($updateQuex3) {
                                        $this->update_balance(200);
                                        $this->trans_history(200, $newPartnerLastInsert, $uid);

                                        $this->db->insert('cycle', array('uID' => $uid, 'x3' => $userID, 'x4' => $userID, 'amt_in_x3' => 200, 'amt_in_x4' => 200));
                                        $lastInsertedID = $this->db->insert_id();

                                        $this->db->insert('cycle_x3', array('cx3id' => $lastInsertedID));

                                        // ------------call x4 functin call here---------
                                        $this->insert_in_cycle_x4($newUserId, $newPartnerLastInsert);
                                        redirect(base_url('user-dashboard'));
                                    }
                                }
                                // --------------------------------------------------------------------------------
                            }
                        }
                    }
                }
            }
        }
    }

    public function sendsms($mob, $msg)
    {
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://rest-api.d7networks.com/secure/send",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "{\n\t\"to\":\"6392452633\",\n\t\"content\":\"Welcome to D7 sms , we will help you to talk with your customer effectively\",\n\t\"from\":\"SMSINFO\",\n\t\"dlr\":\"yes\",\n\t\"dlr-method\":\"GET\", \n\t\"dlr-level\":\"2\", \n\t\"dlr-url\":\"http://yourcustompostbackurl.com\"\n}",
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: application/x-www-form-urlencoded",
        //         "Authorization: Basic bW5teTk1NjQ6SUtTV3BoT2s="
        //     ),
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;
        // ----------------------------------------------------------------
        //Send sms to sender and reciever

        $senderId = "SKY";
        $route = 4;
        $campaign = "OTP";
        $sms = array(
            'message' => "Message : $msg",
            'to' => array($mob)
        );
        // //Prepare you post parameters
        $postData = array(
            'sender' => $senderId,
            'campaign' => $campaign,
            'route' => $route,
            'sms' => array($sms)
        );
        $postDataJson = json_encode($postData);

        // $url = "https://rest-api.d7networks.com/secure/send";

        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "$url",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => $postDataJson,
        //     CURLOPT_HTTPHEADER => array(
        //         "authkey: bW5teTk1NjQ6SUtTV3BoT2s=",
        //         "content-type: application/json"
        //     ),
        // ));
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);
        // //Send sms to sender and reciever

        // // $err="<h4 style='color:green'>Message Send successfully</h4>";
        // echo $response;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://http-api.d7networks.com/send?username=eliz3040&password=och02mhD
                  &dlr-method=POST&dlr-url=https://4ba60af1.ngrok.io/receive&dlr=yes&dlr-level=3&to=916392452633
                  &from=sky&content=This%20is%20the%20sample%20content%20sent%20to%20test%20",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postDataJson,
            
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        if(!empty($response)){

            echo $response;
        }
        
        exit;
    }

    public function AddUser()
    {
        // $this->X4workingModel->distribute_to_upline(100);

        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];
        $userID = $uId['userID'];

        $newUserId = rand(1111, 9999);
        $Pass = rand(11111, 99999);

        // -----getting data from cycle_x3--------
        $cycleData = $this->db
            ->select('t1.*,t2.*,t3.*,t4.*,t5.*')
            ->from('user_registration t1')
            ->join('cycle t2', 't2.uID = t1.uid', 'FULL')
            ->join('cycle_x3 t3', 't3.cx3id = t2.cid', 'FULL')
            ->join('purchased_slots t4', 't4.user_ID = t1.userID', 'FULL')
            ->join('manage_slots t5', 't5.sid = t4.slotID', 'FULL')
            ->order_by('x3id', 'DESC')
            ->limit(1)
            ->where(array('t1.uid' => $uid, 'slotID' => 1))
            ->get()
            ->row();

        // $data = $this->db
        //     ->select('t1.*,t2.*')
        //     ->from('cycle t1')
        //     ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'FULL')
        //     ->order_by('cid', 'DESC')
        //     ->limit(1)
        //     ->where(array('t1.uID' => $uid, 't2.level !=' => '', 't2.branch !=' => '', 't2.position !=' => ''))
        //     ->get()
        //     ->row();

        // $data = $this->db->select('t1.*,t2.*,t3.*,t4.*,t5.*,t6.*')
        //     ->from('cycle t1')
        //     ->join('cycle_x3 t2', 't2.cx3id = t1.cid', 'INNER')
        //     ->join('cycle_x4 t3', 't3.cx4id = t1.cid', 'LEFT')
        //     ->join('user_registration t4', 't4.uid = t1.uID', 'INNER')
        //     ->join('purchased_slots t5', 't5.user_ID = t4.userID', 'LEFT')
        //     ->join('manage_slots t6', 't6.sid = t5.slotID', 'LEFT')
        //     ->order_by('t1.cid', 'DESC')
        //     ->order_by('t3.x4id', 'DESC')
        //     ->where(array('t1.uID' => $uid, 't3.level !=' => '', 't3.branch !=' => '', 't3.position !=' => ''))
        //     ->get()
        //     ->row();

        // print_r($cycleData);
        // exit;

        if ($cycleData->role == 1) {

            $this->adminWorking();
        } else if ($cycleData->role == 2) {


            if (!empty($cycleData)) {
                if ($cycleData->wallet == "" or $cycleData->wallet == 0) {
                    $this->session->set_flashdata('error', 'Your wallet is empty. First topup your wallet');
                    redirect(base_url('user-dashboard'));
                }
                if ($cycleData->wallet >= $cycleData->slot_value) {

                    $formArray = array(
                        'parent_id' => $userID,
                        'userID' => $newUserId,
                        'password' => md5($Pass),
                        'name' => $this->input->post('name'),
                        'role' => 2,
                        'email' => $this->input->post('email'),
                        'contact' => $this->input->post('contact'),
                    );

                    $query = $this->db->insert('user_registration', $formArray); //-----New Partner Registration----
                    $newPartnerID = $this->db->insert_id();
                    // $this->X4workingModel->jumpPartner($newUserId, $newPartnerID); //---for testing purpose--

                    if ($query) {

                        $this->db->insert('user_details', array('ur_id' => $newPartnerID));
                        $this->db->insert('purchased_slots', array('user_ID' => $newUserId, 'slotID' => 1));
                        $this->db->insert('redeem_points', array('new_user_id' => $newUserId, 'points' => 100)); //-----Redeem points added here----

                        $walletAmount = ($cycleData->wallet - 500);

                        $trans = $this->db
                            ->where('uid', $uid)
                            ->update('user_registration', array('wallet' => $walletAmount)); //---updating existing Partner wallet--

                        if ($trans) {
                            $this->trans_history(500, $uid, $newPartnerID);
                            // ------------------New Partner Cycle created-----------
                            $amt_div = ($cycleData->slot_value - 100) / 2;
                            $cycleArray = array(
                                'uID' => $newPartnerID,
                                'x3' => $newUserId,
                                'x4' => $newUserId,
                                'amt_in_x3' => $amt_div, //---200/----
                                'amt_in_x4' => $amt_div, //----200/-----
                            );
                            $que1 = $this->db->insert('cycle', $cycleArray); //----insert cycle into cycle----
                            $lastCycID = $this->db->insert_id(); //-----------Getting last insert id-----

                            if ($que1) {
                                // --------update upline ac balance -----------
                                $admin = $this->db->get_where('user_registration', array('uid' => 1))->row();
                                $updated_admin_balance = $admin->balance + 100;

                                $que2 = $this->db
                                    ->where('uid', 1)
                                    ->update('user_registration', array('balance' => $updated_admin_balance)); //----100/- goes to admin----
                                if ($que2) {

                                    $this->trans_history(100, $newPartnerID, 1);

                                    $cycleX3Array = array(
                                        'cx3id' => $lastCycID
                                    );
                                    $this->db->insert('cycle_x3', $cycleX3Array);
                                    $this->db->insert('cycle_x4', array('cx4id' => $lastCycID, 'partnerID' => $newPartnerID));
                                    // ----------------------------------------Adding B1------------------------------------

                                    if (empty($cycleData->b1)) {
                                        $formArrayX3 = array(
                                            'b1' => $newUserId
                                        );
                                        $updateQuex3 = $this->db
                                            ->where('cx3id', $cycleData->cx3id)
                                            ->update('cycle_x3', $formArrayX3);
                                        if ($updateQuex3) {

                                            $this->update_balance(200);
                                            $this->trans_history(200, $newPartnerID, $uid);

                                            $this->X4workingModel->insert_in_cycle_x4_for_partners($newUserId, $newPartnerID);

                                            redirect(base_url('user-dashboard'));
                                        }
                                    } else if (!empty($cycleData->b1) && empty($cycleData->b2)) {
                                        $formArrayX3 = array(
                                            'b2' => $newUserId
                                        );
                                        $updateQuex3 = $this->db
                                            ->where('cx3id', $cycleData->cx3id)
                                            ->update('cycle_x3', $formArrayX3);

                                        if ($updateQuex3) {
                                            $this->update_balance(200);
                                            $this->trans_history(200, $newPartnerID, $uid);


                                            $this->X4workingModel->insert_in_cycle_x4_for_partners($newUserId, $newPartnerID);
                                            redirect(base_url('user-dashboard'));
                                        }
                                    } else  if (!empty($cycleData->b2) && empty($cycleData->b3)) {
                                        $formArrayX3 = array(
                                            'b3' => $newUserId
                                        );
                                        $updateQuex3 = $this->db
                                            ->where('cx3id', $cycleData->cx3id)
                                            ->update('cycle_x3', $formArrayX3);

                                        if ($updateQuex3) {
                                            $amt = 200;
                                            $amt_div = $amt / 2;

                                            $admin = $this->db->get_where('user_registration', array('uid' => 1))->row();
                                            $updated_admin_balance = $admin->balance + 100;
                                            $que2 = $this->db
                                                ->where('uid', 1)
                                                ->update('user_registration', array('balance' => $updated_admin_balance)); //----100/- goes to admin----

                                            $this->X4workingModel->distribute_to_upline($amt_div); //----amount divided into uplines upto 10 level---

                                            $this->trans_history(100, $newPartnerID, 1);

                                            $this->db->insert('cycle', array('uID' => $uid, 'x3' => $userID, 'x4' => $userID, 'amt_in_x3' => 200, 'amt_in_x4' => 200));
                                            $lastInsertedID = $this->db->insert_id();

                                            $this->db->insert('cycle_x3', array('cx3id' => $lastInsertedID));

                                            // ------------call x4 functin call here---------
                                            $this->X4workingModel->insert_in_cycle_x4_for_partners($newUserId, $newPartnerID);
                                            redirect(base_url('user-dashboard'));
                                        }
                                    }
                                    // --------------------------------------------------------------------------------
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    // --Transactions--
    public function trans_history($amt, $debit, $credit)
    {
        $uId = $this->session->userdata('userLoggedIn');
        $userID = $uId['userID'];
        $formArray = array(
            'debit' => $debit,
            'credit' => $credit,
            'request_amt' => $amt,
            'status' => 1
        );

        $this->db->insert('transactions_details', $formArray);
    }
    // --Redium Point--
    public function redeemPoints($id)
    {
        $data = $this->db->get_where('radium_point', array('urID' => $id));
        if ($data->num_rows() > 0) {
            $point = $data->row();
            $points = $point->points + 100;
            $this->db
                ->where('urID', $id)
                ->update('radium_point', array('points' => $points, 'urID' => $id));
        } else {
            $this->db->insert('radium_point', array('points' => 100, 'urID' => $id));
        }
    }

    // For Get Data Multiple Time
    public function getData($select, $where, $table)
    {
        $this->db->select($select);
        $this->db->where($where);
        $query = $this->db->get($table);

        $result = $query->result_array();
        return $result;
    }

    // End
    public function getx4UserData()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $userID = $userData['uid'];

        $data = $this->db->get('cycle_x4')->result();
        if (!empty($data)) {

            $this->db
                ->select('t1.*,t2.*,t3.*,t4.*')
                ->from('manage_slots t1')
                ->join('purchased_slots t2', 't2.slotID = t1.sid', 'FULL')
                ->join('user_registration t3', 't3.uid = t2.userID', 'FULL')
                ->join('cycle_x4 t4', 't4.parent_ID = t3.uid', 'FULL');
            $data = $this->db->where('uid', $userID)->order_by('x4id', 'DESC')->limit(1)->get()->row();
            if (!empty($data)) {
                return $data;
            }
        } else {

            $this->db
                ->select('t1.*,t2.*,t3.*')
                ->from('manage_slots t1')
                ->join('purchased_slots t2', 't2.slotID = t1.sid', 'FULL')
                ->join('user_registration t3', 't3.uid = t2.userID', 'FULL');
            $data = $this->db->where('uid', $userID)->limit(1)->get()->row();
            if (!empty($data)) {
                return $data;
            }
        }
    }

    // ------Get data by ajax request----
    public function getPartnerData()
    {
        // echo $this->input->post('pid');
        $data = $this->db->get_where('user_registration', array('userID' => $this->input->post('pid')));
        if ($data->num_rows() > 0) {
            echo json_encode($data->row());
        } else {
            $arr['error'] = "error";
            echo json_encode($arr);
        }
    }

    // ---------get user details---------
    public function getUserData()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];
        $data = $this->db->get_where('user_registration', array('uid' => $uid))->row();
        if ($data) {
            return $data;
        }
    }
    // ---------Transfering balance---------
    public function transfer_wallet_bal()
    {

        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];
        $date = date('Y-m-d');

        $data = $this->db->get_where('user_registration', array('uid' => $uid))->row();

        $db_date = date('Y-m-d', strtotime($data->updated_at));

        $partnerID = $this->input->post('partnerID');
        $amount = $this->input->post('amount');

        if ($data->wallet >= $amount) {
            // $data1 = $this->db->get_where('user_registration', array('uid' => $uid,'updated_at'=>$date);
            if ($data->wallet_transfer_limit < $data->set_wallet_trans_limit && $db_date == $date) {
                $partnerData = $this->db->get_where('user_registration', array('userID' => $partnerID))->row();
                $updatePartnerWallet = $partnerData->wallet + $amount;
                $upateUserWallet = $data->wallet - $amount;
                $updateTransLimit = $data->wallet_transfer_limit + $amount;
                // -------------
                if ($amount <= 2200) {

                    $query = $this->db->where('uid', $uid)->update('user_registration', array('wallet' => $upateUserWallet, 'wallet_transfer_limit' => $updateTransLimit)); // update from partner wallet
                    if ($query) {
                        $que = $this->db->where('userID', $partnerID)->update('user_registration', array('wallet' => $updatePartnerWallet)); //update to partner wallet
                        if ($que) {
                            $this->session->set_flashdata('success', 'Amount transfer successfully !!');
                            redirect(base_url('transfer'));
                        }
                    }
                } else {

                    $this->session->set_flashdata('warning', 'You can not transfer more than ₹2200/- !!');
                    redirect(base_url('transfer'));
                }
                // ---------------
            } else {
                $this->session->set_flashdata('warning', 'Your Daily limit Finished !!');
                redirect(base_url('transfer'));
            }
        } else {
            $this->session->set_flashdata('error', 'Insufficient wallet balance. Topup your wallet first !!');
            redirect(base_url('transfer'));
        }
    }

    // 25-09-20

    // Get Wallet Request
    function GetWalletRequesttoModel()
    {

        $userData = $this->session->userdata('userLoggedIn');
        $uid = $userData['uid'];
        $userId = $userData['userID'];

        $q = $this->db->select('*')
            ->from('wallet_request')
            ->where('rq_userID ', $uid)
            ->order_by('rqid ', 'DESC')
            ->get();
        if (!empty($q)) {
            return $q->result();
        }
    }

    // Add Topup Request
    function AddTopupRequest()
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];

        $formArray['rq_userID '] = $uid;
        $formArray['amount_type'] = $this->input->post('topup_type');
        $formArray['payment_utr'] = $this->input->post('payment_utr');
        $formArray['wallet_amt'] = $this->input->post('request_amount');

        if (!is_dir('./uploads')) {
            mkdir('./uploads');
        }
        $config['file_name'] = rand(1000, 1000000);
        $config['upload_path'] = './uploads';
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
            $imgPath = "uploads/" . $data['file_name'];
            $formArray['snapshot'] = $imgPath;
            $query = $this->db->insert('wallet_request', $formArray);
            if ($query) {
                $this->session->set_flashdata('success', 'Request Send Successfully to Admin !!');
                redirect(base_url() . 'by-balance');
            } else {
                $this->session->set_flashdata('warning', 'Some issue during adding Category');
                redirect(base_url() . 'by-balance');
            }
        } else {
            $query = $this->db->insert('wallet_request', $formArray);
            if ($query) {
                $this->session->set_flashdata('success', 'Request Send Successfully to Admin !!');
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', $error);
                redirect(base_url() . 'by-balance');
            } else {
                $this->session->set_flashdata('warning', 'Some error Occurre');
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', $error);
                redirect(base_url() . 'by-balance');
            }
        }
    }

    function getPartners()
    {
        $uId = $this->session->userdata('userLoggedIn');
        $userID = $uId['userID'];
        $q = $this->db->select('*')
            ->from('user_registration')
            ->where('parent_id', $userID)
            ->get();
        if (!empty($q)) {
            return $q->result();
        }
    }
}
