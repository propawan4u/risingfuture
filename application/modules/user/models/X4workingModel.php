<?php
defined('BASEPATH') or exit('No direct script access allowed');

class X4workingModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // -----Check session for authenticate user---
        if (!$this->session->userdata('userLoggedIn')) {
            redirect(base_url('user-login'));
        }
        // --------You Can not load DashboardModel Here--------
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
    public function update_balance_for_admin($amt)
    {
        if (!empty($amt)) {

            // -----getting data from cycle_x3--------
            $data = $this->db
                ->where('uid', 1)
                ->get('user_registration')
                ->row();
            $update_bal = $data->balance + $amt;
            $this->db
                ->where('uid', 1)
                ->update('user_registration', array('balance' => $update_bal));
        }
    }

    public function distribute_to_upline($amtbyb3)
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];
        $userID = $uId['userID'];

        $pArray[] = $userID;
        $amt = $amtbyb3;

        for ($i = 0; $i <= 9; $i++) {
            if (!empty($pArray[$i])) {

                $partnerData = $this->db
                    ->select('t1.parent_id')
                    ->from('user_registration t1')
                    ->where('userID', $pArray[$i])
                    ->get()
                    ->row();

                $pArray[] = $partnerData->parent_id;
                $data1 = $this->db->get_where('user_registration', array('userID' => $partnerData->parent_id))->row();

                $updated_bal = $data1->balance + 10;

                $amt -= 10;

                $this->db
                    ->where('userID', $data1->userID)
                    ->update('user_registration', array('balance' => $updated_bal));
            }
            if ($partnerData->parent_id == 1001) {
                break;
            }
        }

        if ($amt > 0) {
            $data11 = $this->db->get_where('user_registration', array('uid' => 1))->row();
            $updated_bal_for_admin = $data11->balance + $amt;

            $this->db
                ->where('uid', 1)
                ->update('user_registration', array('balance' => $updated_bal_for_admin));
        }
    }

    public function jumpPartner($newUserID, $newPartnerLastInsert)
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];
        $userID = $uId['userID'];
        // -----get parent id for existing part--------
        // $data = $this->db
        //     ->get_where('user_registration', array('uid <' => $uid))
        //     ->result();

        $parentID = $this->db
            ->select('t1.parent_id')
            ->from('user_registration t1')
            ->where('userID', $userID)
            ->get()
            ->row();

        $pArray[] = $parentID->parent_id;

        for ($i = 0; $i <= count($pArray); $i++) {
            if (!empty($pArray[$i])) {
                $partnerData = $this->db
                    ->select('t1.parent_id')
                    ->from('user_registration t1')
                    ->where('userID', $pArray[$i])
                    ->get()
                    ->row();

                $pArray[] = $partnerData->parent_id;

                if ($pArray[0] == $partnerData->parent_id) {
                    break;
                }
            }
        }

        // print_r($pArray);
        // exit;

        if (!empty($pArray)) {
            for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                $cycleData = $this->db->select('t1.cid,t2.*,t3.userID,t3.uid')
                    ->from('cycle t1')
                    ->join('cycle_x4 t2', 't2.partnerID = t1.uID', 'LEFT')
                    ->join('user_registration t3', 't3.uid = t1.uID', 'INNER')
                    ->order_by('t1.cid', 'DESC')
                    ->order_by('t2.x4id', 'DESC')
                    ->limit(1)
                    ->where(array('t3.userID' => $pArray[$i], 't2.level !=' => '', 't2.branch !=' => '', 't2.position !=' => ''))
                    ->get()
                    ->row();

                $uplineData[] = $cycleData;
            };

            foreach (array_filter($uplineData) as $val) {
                // echo $val->branch;
                // print_r($val);
                // exit;
                if ($val->level == '' && $val->branch == '' && $val->position == '') {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 1,
                        'branch' => 'L',
                        'position' => 1,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    if ($val->uid == 1) {
                        $partnerData = $this->db->get_where('user_registration', array('uid', 1))->row();
                        $update_par_bal = $partnerData->balance + 200;
                        $this->db
                            ->where('uid', 1)
                            ->update('user_registration', array('balance' => $update_par_bal));
                        $this->trans_history(200, $newPartnerLastInsert, 1);
                    }
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    // -------------------------------------
                } else if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 1,
                        'branch' => 'R',
                        'position' => 2,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    if ($val->uid == 1) {
                        $partnerData = $this->db->get_where('user_registration', array('uid', 1))->row();
                        $update_par_bal = $partnerData->balance + 200;
                        $this->db
                            ->where('uid', 1)
                            ->update('user_registration', array('balance' => $update_par_bal));
                        $this->trans_history(200, $newPartnerLastInsert, 1);
                    }
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    // ---------------------
                } else if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 2,
                        'branch' => 'L',
                        'position' => 3,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);

                    $partnerData = $this->db->get_where('user_registration', array('uid' => $val->uid))->row();
                    $update_par_bal = $partnerData->balance + 200;
                    $this->db
                        ->where('uid', $val->uid)
                        ->update('user_registration', array('balance' => $update_par_bal));
                    $this->trans_history(200, $newPartnerLastInsert, $val->uid);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    break;
                    // --------------------------
                } else if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 2,
                        'branch' => 'R',
                        'position' => 4,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);

                    $partnerData = $this->db->get_where('user_registration', array('uid' => $val->uid))->row();
                    $update_par_bal = $partnerData->balance + 200;
                    $this->db
                        ->where('uid', $val->uid)
                        ->update('user_registration', array('balance' => $update_par_bal));
                    $this->trans_history(200, $newPartnerLastInsert, $val->uid);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    break;
                    // --------------------------
                } else if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 2,
                        'branch' => 'L',
                        'position' => 5,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);

                    $partnerData = $this->db->get_where('user_registration', array('uid' => $val->uid))->row();
                    $update_par_bal = $partnerData->balance + 200;
                    $this->db
                        ->where('uid', $val->uid)
                        ->update('user_registration', array('balance' => $update_par_bal));
                    $this->trans_history(200, $newPartnerLastInsert, $val->uid);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    break;
                    // --------------------------
                } else if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 2,
                        'branch' => 'R',
                        'position' => 6,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);

                    $partnerData = $this->db->get_where('user_registration', array('uid' => 1))->row();
                    $update_par_bal = $partnerData->balance + 200;
                    $this->db
                        ->where('uid', 1)
                        ->update('user_registration', array('balance' => $update_par_bal));
                    $this->update_balance_for_admin(200);
                    $this->trans_history(200, $newPartnerLastInsert, 1);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    break;
                    // --------------------------
                } else if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
                    $formArray = array(
                        'partnerID' => $val->uid,
                        'level' => 1,
                        'branch' => 'L',
                        'position' => 1,
                        'usr_id' => $newUserID
                    );

                    $getX4id = $this->db->select('t1.cid,t2.x4id')
                        ->from('cycle t1')
                        ->join('cycle_x4 t2', 't2.cx4id = t1.cid', 'INNER')
                        // ->join('user_registration t3', 't3.uid = t1.uID', 'FULL')
                        ->order_by('t1.cid', 'DESC')
                        ->order_by('t2.x4id', 'DESC')
                        ->limit(1)
                        ->where(array('t1.uID' => $val->uid))
                        ->get()
                        ->row();
                    // print_r($getX4id);
                    // exit;
                    $this->db
                        ->where('x4id', $getX4id->x4id)
                        ->update('cycle_x4', $formArray);
                    $this->db->insert('cycle_x4', array('cx4id' => $getX4id->cid, 'partnerID' => $val->uid));
                    // ----------------------
                }
            }

            $this->session->set_flashdata('success', 'Partner registration successfully !!');
            redirect(base_url('user-x3'));
        }
    }


    // --------------------------------------------------------------------------------------------
    public function insert_in_cycle_x4_for_partners($newUserID, $newPartnerLastInsert)
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

                $this->jumpPartner($newUserID, $newPartnerLastInsert);
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

                $this->jumpPartner($newUserID, $newPartnerLastInsert);
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
                $userData = $this->db
                    ->get_where('user_registration', array('uid' => $uid))
                    ->row();
                $update_usr_bal = $userData->balance + 200;
                $updateQue = $this->db
                    ->where('uid', $uid)
                    ->update('user_registration', array('balance' => $update_usr_bal));
                if ($updateQue) {
                    $this->session->set_flashdata('success', 'Partner registration successfully !!');
                    redirect(base_url('user-dashboard'));
                }
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
                $userData = $this->db
                    ->get_where('user_registration', array('uid' => $uid))
                    ->row();
                $update_usr_bal = $userData->balance + 200;
                $updateQue = $this->db
                    ->where('uid', $uid)
                    ->update('user_registration', array('balance' => $update_usr_bal));

                if ($updateQue) {
                    $this->session->set_flashdata('success', 'Partner registration successfully !!');
                    redirect(base_url('user-dashboard'));
                }
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
                $userData = $this->db
                    ->get_where('user_registration', array('uid' => $uid))
                    ->row();
                $update_usr_bal = $userData->balance + 200;
                $updateQue = $this->db
                    ->where('uid', $uid)
                    ->update('user_registration', array('balance' => $update_usr_bal));
                if ($updateQue) {
                    $this->session->set_flashdata('success', 'Partner registration successfully !!');
                    redirect(base_url('user-dashboard'));
                }
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
                $this->jumpPartner($newUserID, $newPartnerLastInsert);
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

                $this->jumpPartner($newUserID, $newPartnerLastInsert);
            }
        }
    }
}
