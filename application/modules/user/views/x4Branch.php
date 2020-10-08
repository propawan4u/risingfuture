 <?php
  // print_r($getCyc);
  if (!empty($getCyc)) {
    foreach (array_filter($getCyc) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->usr_id
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->usr_id
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->usr_id
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->usr_id
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->usr_id
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->usr_id
        );
      }
    }
  }

  if (!empty($getSlots_2)) {

    // --------------------------Slot-2-------------
    foreach (array_filter($getSlots_2) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot2Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot2Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot2Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot2Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot2Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot2Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }
  // --------------------------Slot-3---------------------------
  if (!empty($getSlots_3)) {
    foreach (array_filter($getSlots_3) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot3Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot3Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot3Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot3Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot3Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot3Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }


  // --------------------------Slot-4---------------------------
  if (!empty($getSlots_4)) {
    foreach (array_filter($getSlots_4) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot4Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot4Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot4Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot4Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot4Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot4Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }
  // --------------------------Slot-5---------------------------
  if (!empty($getSlots_5)) {
    foreach (array_filter($getSlots_5) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot5Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot5Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot5Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot5Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot5Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot5Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }
  // --------------------------Slot-6---------------------------
  if (!empty($getSlots_6)) {
    foreach (array_filter($getSlots_6) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot6Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot6Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot6Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot6Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot6Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot6Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }
  // --------------------------Slot-7---------------------------
  if (!empty($getSlots_7)) {
    foreach (array_filter($getSlots_7) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot7Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot7Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot7Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot7Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot7Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot7Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }

  // --------------------------Slot-8---------------------------
  if (!empty($getSlots_8)) {
    foreach (array_filter($getSlots_8) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot8Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot8Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot8Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot8Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot8Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot8Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }

  // --------------------------Slot-9---------------------------
  if (!empty($getSlots_9)) {
    foreach (array_filter($getSlots_9) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot9Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot9Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot9Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot9Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot9Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot9Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }


  // --------------------------Slot-10---------------------------
  if (!empty($getSlots_10)) {
    foreach (array_filter($getSlots_10) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot10Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot10Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot10Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot10Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot10Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot10Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }


  // --------------------------Slot-11---------------------------
  if (!empty($getSlots_11)) {
    foreach (array_filter($getSlots_11) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot11Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot11Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot11Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot11Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot11Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot11Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }

  // --------------------------Slot-12---------------------------
  if (!empty($getSlots_12)) {
    foreach (array_filter($getSlots_12) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot12Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot12Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot12Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot12Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot12Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot12Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }

  // --------------------------Slot-13---------------------------
  if (!empty($getSlots_13)) {
    foreach (array_filter($getSlots_13) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot13Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot13Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot13Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot13Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot13Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot13Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }

  // --------------------------Slot-14---------------------------
  if (!empty($getSlots_14)) {
    foreach (array_filter($getSlots_14) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot14Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot14Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot14Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot14Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot14Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot14Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }


  // --------------------------Slot-15---------------------------
  if (!empty($getSlots_15)) {
    foreach (array_filter($getSlots_15) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot15Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot15Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot15Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot15Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot15Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot15Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }


  // --------------------------Slot-16---------------------------
  if (!empty($getSlots_16)) {
    foreach (array_filter($getSlots_16) as $val) {

      if ($val->level == 1 && $val->branch == 'L' && $val->position == 1) {
        $slot16Branch1 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
        break;
      }
      if ($val->level == 1 && $val->branch == 'R' && $val->position == 2) {
        $slot16Branch2 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 3) {
        $slot16Branch3 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 4) {
        $slot16Branch4 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'L' && $val->position == 5) {
        $slot16Branch5 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
      if ($val->level == 2 && $val->branch == 'R' && $val->position == 6) {
        $slot16Branch6 = array(
          'level' => $val->level,
          'branch' => $val->branch,
          'position' => $val->position,
          'userID' => $val->juserID
        );
      }
    }
  }

  // print_r($getAllSlots);
  // exit;

  ?>
 <!-- Main Area Strat Here -->
 <div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
   <div class="row">
     <h3 class="ml-3">X4 Branch</h3>
     <pre class="text-light">
      <?php
      //print_r($getCyc);
      ?>
    </pre>
   </div>

   <div class="row">
     <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
         <p><b>Slot : - 200</b>/-</p>
       <!-- partial:index.partial.html -->
       <div class="body genealogy-body genealogy-scroll">
         <div class="genealogy-tree ml-4">
           <ul>
             <li>
               <a href="<?php echo base_url('x4-cycles'); ?>">
                 <div class="member-view-box">
                   <div class="member-image">
                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                     <div class="member-details">
                       <small class="text-light">
                         <?php
                          foreach ($getCyc as $val) {
                            echo $val->userID;
                            break;
                          }
                          ?></small>
                     </div>
                   </div>
                 </div>
               </a>
               <ul class="active">
                 <li>
                   <?php if (!empty($branch1['userID'])) { ?>
                     <a href="javascript:void(0);">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light"><?php echo $branch1['userID']; ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                   <?php

                    } else {
                    ?>
                     <a href="javascript:void(0);">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">Empty</small>
                           </div>
                         </div>
                       </div>
                     </a>
                   <?php
                    }
                    ?>
                   <ul class="active">
                     <li>
                       <?php if (!empty($branch3['userID'])) { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light"><?php echo $branch3['userID']; ?></small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        } else { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light">Empty</small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        }
                        ?>
                     </li>
                     <li>
                       <?php if (!empty($branch4['userID'])) { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light"><?php echo $branch4['userID']; ?></small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        } else { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light">Empty</small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        }
                        ?>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <?php if (!empty($branch2['userID'])) { ?>
                     <a href="javascript:void(0); ">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light"><?php echo $branch2['userID']; ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                   <?php } else { ?>
                     <a href="javascript:void(0); ">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">Empty</small>
                           </div>
                         </div>
                       </div>
                     </a>
                   <?php
                    } ?>
                   <ul class="active">
                     <li>
                       <?php if (!empty($branch5['userID'])) { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light"><?php echo $branch5['userID']; ?></small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        } else { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light">Empty</small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        }
                        ?>
                     </li>
                     <li>
                       <?php if (!empty($branch6['userID'])) { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light"><?php echo $branch6['userID']; ?></small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        } else { ?>
                         <a href="javascript:void(0);">
                           <div class="member-view-box">
                             <div class="member-image">
                               <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                               <div class="member-details">
                                 <small class="text-light">Empty</small>
                               </div>
                             </div>
                           </div>
                         </a>
                       <?php
                        }
                        ?>
                     </li>
                   </ul>
                 </li>
               </ul>
             </li>
           </ul>
         </div>
       </div>
     </div>

     <!-- All Slots View Started -->
     <?php
      // print_r($getAllSlots);
      foreach ($getAllSlots as $slots) {
        if ($slots->p_status == 0) {
      ?>

         <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3" align="center">
           <!-- partial:index.partial.html -->

           <p class="display-4"><b><?php echo $slots->slot_value; ?></b>/-</p>

           <a class="btn btn-info btn-sm mt-5 mb-5" href="<?php echo base_url() ?>get-wallet/<?php echo $slots->sid ?>">Buy Now</a>

         </div>
         <?php } else {
          if ($slots->slotID == 2) {
          ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/2">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot2Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot2Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot2Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot2Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot2Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot2Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot2Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot2Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot2Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot2Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot2Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot2Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 3) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/3">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot3Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot3Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot3Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot3Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot3Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot3Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot3Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot3Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot3Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot3Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot3Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot3Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 4) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/4">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot4Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot4Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot4Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot4Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot4Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot4Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot4Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot4Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot4Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot4Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot4Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot4Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 5) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/5">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot5Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot5Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot5Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot5Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot5Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot5Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot5Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot5Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot5Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot5Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot5Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot5Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 6) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/6">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot6Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot6Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot6Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot6Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot6Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot6Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot6Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot6Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot6Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot6Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot6Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot6Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 7) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/7">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot7Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot7Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot7Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot7Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot7Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot7Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot7Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot7Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot7Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot7Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot7Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot7Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 8) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/8">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot8Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot8Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot8Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot8Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot8Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot8Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot8Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot8Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot8Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot8Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot8Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot8Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 9) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/9">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot9Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot9Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot9Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot9Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot9Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot9Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot9Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot9Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot9Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot9Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot9Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot9Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 10) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/10">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot10Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot10Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot10Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot10Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot10Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot10Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot10Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot10Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot10Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot10Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot10Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot10Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 11) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/11">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot11Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot11Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot11Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot11Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot11Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot11Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot11Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot11Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot11Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot11Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot11Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot11Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 12) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/12">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot12Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot12Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot12Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot12Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot12Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot12Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot12Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot12Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot12Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot12Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot12Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot12Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 13) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/13">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot13Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot13Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot13Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot13Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot13Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot13Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot13Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot13Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot13Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot13Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot13Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot13Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 14) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/14">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot14Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot14Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot14Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot14Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot14Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot14Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot14Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot14Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot14Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot14Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot14Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot14Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 15) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/15">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot15Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot15Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot15Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot15Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot15Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot15Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot15Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot15Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot15Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot15Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot15Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot15Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } elseif ($slots->slotID == 16) { ?>

           <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
             <!-- partial:index.partial.html -->
             <p><b>Slot : - <?php echo $slots->slot_value; ?></b>/-</p>
             <div class="body genealogy-body genealogy-scroll">
               <div class="genealogy-tree ml-4">
                 <ul>
                   <li>
                     <a href="<?php echo base_url(); ?>slots-x4-cycles/16">
                       <div class="member-view-box">
                         <div class="member-image">
                           <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                           <div class="member-details">
                             <small class="text-light">
                               <?php
                                echo $slots->user_ID;
                                ?></small>
                           </div>
                         </div>
                       </div>
                     </a>
                     <ul class="active">
                       <li>
                         <?php if (!empty($slot16Branch1['userID'])) { ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot16Branch1['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php

                          } else {
                          ?>
                           <a href="javascript:void(0);">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          }
                          ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot16Branch3['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot16Branch3['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot16Branch4['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot16Branch4['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                       <li>
                         <?php if (!empty($slot16Branch2['userID'])) { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light"><?php echo $slot16Branch2['userID']; ?></small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php } else { ?>
                           <a href="javascript:void(0); ">
                             <div class="member-view-box">
                               <div class="member-image">
                                 <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                 <div class="member-details">
                                   <small class="text-light">Empty</small>
                                 </div>
                               </div>
                             </div>
                           </a>
                         <?php
                          } ?>
                         <ul class="active">
                           <li>
                             <?php if (!empty($slot16Branch5['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot16Branch5['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                           <li>
                             <?php if (!empty($slot16Branch6['userID'])) { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light"><?php echo $slot16Branch6['userID']; ?></small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              } else { ?>
                               <a href="javascript:void(0);">
                                 <div class="member-view-box">
                                   <div class="member-image">
                                     <img src="<?php echo base_url('assets/uploads/blank.png'); ?>" alt="Member">
                                     <div class="member-details">
                                       <small class="text-light">Empty</small>
                                     </div>
                                   </div>
                                 </div>
                               </a>
                             <?php
                              }
                              ?>
                           </li>
                         </ul>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </div>
             </div>
           </div>

         <?php } else { ?>

           <p>Please Contact to Admin</p>

         <?php } ?>




     <?php
        }
      }
      ?>
   </div>
   <!-- All Slots View Endded --> 
 </div>
 <!-- Main Area End Here -->
 </div>
 </div>
 </div>
 </section>
 </body>

 </html>