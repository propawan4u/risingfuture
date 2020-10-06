<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JumpertoUpline extends CI_Model
{
    public function __construct()
    {
    }
    function jump_x4slot($uplineData, $jumpx4slots, $userID, $slotValue)
    {
        foreach (array_filter($uplineData) as $val) {
            if (count($val) == 1) {

                $this->goesToAdmin($val[0]->uid, $slotValue);

                $Update =  $this->db
                    ->where(array('juID' => $val[0]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update($jumpx4slots, array('juID' => $val[0]->uid, 'level' => 1, 'branch' => 'L', 'position' => 1, 'juserID' => $userID));

                if ($Update) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[0]->uid));
                }
                // -------------------------------------
            } else if ($val[1]->level == 1 && $val[1]->branch == 'L' && $val[1]->position == 1) {

                $this->goesToAdmin($val[1]->uid, $slotValue);

                $updateQue = $this->db
                    ->where(array('juID' => $val[1]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update(
                        $jumpx4slots,
                        array(
                            'juID' => $val[1]->uid,
                            'juserID' => $userID,
                            'level' => 1,
                            'branch' => 'R',
                            'position' => 2
                        )
                    );

                if ($updateQue) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[1]->uid));
                }
                // ---------------------
            } else if ($val[1]->level == 1 && $val[1]->branch == 'R' && $val[1]->position == 2) {
                $formArray = array(
                    'juID' => $val[1]->uid,
                    'juserID' => $userID,
                    'level' => 2,
                    'branch' => 'L',
                    'position' => 3
                );

                $this->goesToUpline($val[1]->uid, $slotValue);

                $updateQue = $this->db
                    ->where(array('juID' => $val[1]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update($jumpx4slots, $formArray);

                if ($updateQue) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[1]->uid));
                }
                break;
                // --------------------------
            } else if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
                $formArray = array(
                    'juID' => $val->uid,
                    'juserID' => $userID,
                    'level' => 2,
                    'branch' => 'R',
                    'position' => 4
                );

                $this->goesToUpline($val[1]->uid, $slotValue);

                $updateQue = $this->db
                    ->where(array('juID' => $val[1]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update($jumpx4slots, $formArray);

                if ($updateQue) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[1]->uid));
                }
                break;
                // --------------------------
            } else if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
                $formArray = array(
                    'juID' => $val->uid,
                    'juserID' => $userID,
                    'level' => 2,
                    'branch' => 'L',
                    'position' => 5
                );

                $this->goesToUpline($val[1]->uid, $slotValue);

                $updateQue = $this->db
                    ->where(array('juID' => $val[1]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update($jumpx4slots, $formArray);

                if ($updateQue) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[1]->uid));
                }
                break;
                // --------------------------
            } else if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
                $formArray = array(
                    'juID' => $val->uid,
                    'juserID' => $userID,
                    'level' => 2,
                    'branch' => 'R',
                    'position' => 6
                );

                $this->goesToAdmin($val[1]->uid, $slotValue);

                $updateQue = $this->db
                    ->where(array('juID' => $val[1]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update($jumpx4slots, $formArray);

                if ($updateQue) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[1]->uid));
                }
                break;
                // --------------------------
            } else if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
                $formArray = array(
                    'juID' => $val->uid,
                    'juserID' => $userID,
                    'level' => 1,
                    'branch' => 'L',
                    'position' => 1
                );

                // $this->goesToAdmin(1, $slotValue);

                $updateQue = $this->db
                    ->where(array('juID' => $val[1]->uid, 'level' => NULL, 'branch' => NULL, 'position' => NULL))
                    ->update($jumpx4slots, $formArray);

                if ($updateQue) {

                    $this->db->insert($jumpx4slots, array('juID' => $val[1]->uid));
                }
                // ----------------------
            }
        }
    }

    public function goesToAdmin($uid, $slotValue)
    {
        if ($uid == 1 && $slotValue == 1000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_2 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_2' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 2000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_3 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_3' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 4000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_4 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_4' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 8000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_5 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_5' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 16000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_6 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_6' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 32000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_7 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_7' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 64000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_8 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_8' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 128000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_9 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_9' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 256000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_10 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_10' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 512000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_11 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_11' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 1024000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_12 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_12' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 2048000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_13 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_13' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 4096000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_14 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_14' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 8192000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_15 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_15' => $update_par_bal));
        } else if ($uid == 1 && $slotValue == 16384000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => 1))->row();
            $update_par_bal = $partnerData->slot_16 + $slotValue;
            $this->db
                ->where('UID', 1)
                ->update('parchase_new_slot', array('slot_16' => $update_par_bal));
        }
    }

    // ----------------go to upline----------
    public function goesToUpline($uid, $slotValue)
    {
        if ($slotValue == 1000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_2 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_2' => $update_par_bal));
        } else if ($slotValue == 2000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_3 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_3' => $update_par_bal));
        } else if ($slotValue == 4000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_4 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_4' => $update_par_bal));
        } else if ($slotValue == 8000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_5 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_5' => $update_par_bal));
        } else if ($slotValue == $uid6000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_6 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_6' => $update_par_bal));
        } else if ($slotValue == 32000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_7 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_7' => $update_par_bal));
        } else if ($slotValue == 64000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_8 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_8' => $update_par_bal));
        } else if ($slotValue == $uid28000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_9 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_9' => $update_par_bal));
        } else if ($slotValue == 256000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_10 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_10' => $update_par_bal));
        } else if ($slotValue == 512000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_11 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_11' => $update_par_bal));
        } else if ($slotValue == 1024000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_12 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_12' => $update_par_bal));
        } else if ($slotValue == 2048000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_13 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_13' => $update_par_bal));
        } else if ($slotValue == 4096000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_14 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_14' => $update_par_bal));
        } else if ($slotValue == 8192000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_15 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_15' => $update_par_bal));
        } else if ($slotValue == 16384000) {

            $partnerData = $this->db->get_where('parchase_new_slot', array('UID' => $uid))->row();
            $update_par_bal = $partnerData->slot_16 + $slotValue;
            $this->db
                ->where('UID', $uid)
                ->update('parchase_new_slot', array('slot_16' => $update_par_bal));
        }
    }
}
