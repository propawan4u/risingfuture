<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RestParchaseslot extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // -----Check session for authenticate user---
        if (!$this->session->userdata('userLoggedIn')) {
            redirect(base_url('user-login'));
        }
        $this->load->model('JumpertoUpline');
    }
    function ParchaseNewSlots()
    {
        $userData = $this->session->userdata('userLoggedIn');
        $uId = $userData['uid'];
        $userID = $userData['userID'];

        $walletBal = $this->input->post('walletBal');
        $getSlotId = $this->input->post('slotId');

        $getAllslotData = $this->db->select('t1.*,t2.*,t3.*')
            ->from('user_registration t1')
            ->join('restt_purchased_slots t2', 't2.user_ID = t1.userID', 'INNER')
            ->join('manage_slots t3', 't3.sid = t2.slotID', 'RIGHT')
            ->where(array('uid' => $uId, 't3.sid' => $getSlotId))
            ->get()
            ->row();
        // print_r($getAllslotData);
        // exit;
        if (!empty($getAllslotData)) {

            if ($getAllslotData->wallet >= $getAllslotData->slot_value) {

                $LessWallet = $getAllslotData->wallet - $getAllslotData->slot_value;
                // echo $LessWallet;
                // exit;
                $upDateUserWallet = $this->db->where('uid', $uId)
                    ->update('user_registration', array('wallet' => $LessWallet));
                if ($upDateUserWallet) {
                    $UpNewSlot = array(
                        'p_status' => '1'
                    );

                    $UpdateSlotStatus = $this->db->where(array('user_ID' => $userID, 'slotID' => $getSlotId))
                        ->update('restt_purchased_slots', $UpNewSlot);

                    if ($UpdateSlotStatus) {

                        // $this->jumpX4Slots($getSlotId, $getAllslotData->slot_value);

                        $this->db->insert('jumpx4slots_2', array('juID' => $uId));
                        $LastJuID = $this->db->insert_id();
                        $this->db->insert('parchase_new_slot', array('Ju_ID' => $LastJuID, 'UID' => $uId));

                        $this->jumpX4Slots($getSlotId, $getAllslotData->slot_value);

                        $this->session->set_flashdata('success', 'New Slot Purchased successfully !!');
                        redirect(base_url('user-x4'));
                    }
                }
            } else {
                $this->session->set_flashdata('error', 'Your wallet is empty. First topup your wallet');
                redirect(base_url('get-wallet/' . $getSlotId));
            }
        }
    }


    //  Jump X4 Slots Working Start


    function jumpX4Slots($getSlotId, $slotValue)
    {
        $uId = $this->session->userdata('userLoggedIn');
        $uid = $uId['uid'];
        $userID = $uId['userID'];

        // -----get parent id for existing part--------
        $parentID = $this->db
            ->select('t1.parent_id')
            ->from('user_registration t1')
            ->where('uid', $uid)
            ->get()
            ->row();

        $pArray[] = $parentID->parent_id;
        // print_r($pArray);
        // exit;

        for ($i = 0; $i <= count($pArray); $i++) {
            if (!empty($pArray[$i])) {
                $partnerData = $this->db
                    ->select('t1.parent_id')
                    ->from('user_registration t1')
                    ->where('userID', $pArray[$i])
                    ->get()
                    ->row();

                if ($pArray[0] == $partnerData->parent_id || $pArray[0] == NULL || $pArray[0] == '') {
                    break;
                }
                $pArray[] = $partnerData->parent_id;
            }
        }

        if ($getSlotId == 2) {

            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_2 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 3) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_3 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 4) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_4 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 5) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_5 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 6) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_6 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 7) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_7 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 8) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_8 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 9) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_9 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 10) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_10 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 11) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_11 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 12) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_12 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 13) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_13 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 14) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_14 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 15) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_15 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        } elseif ($getSlotId == 16) {
            if (!empty($pArray)) {
                $jumpx4slots = 'jumpx4slots_16 ';
                for ($i = 0, $j = 1; $j <= count($pArray); $i++, $j++) {

                    $cycleData = $this->db->select('t1.*,t2.*')
                        ->from('user_registration t1')
                        ->join($jumpx4slots . ' t2', 't2.juID = t1.uid', 'FULL')
                        ->where(array('userID' => $pArray[$i]))
                        ->order_by('j4id', 'DESC')
                        ->limit(2)
                        ->get()
                        ->result();

                    $uplineData[] = $cycleData;
                }

                $this->JumpertoUpline->jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue);
            }
        }
        //  Jump X4 Slots Working Endded 
    }
}
