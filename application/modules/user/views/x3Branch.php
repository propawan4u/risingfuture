<!-- Main Area Strat Here -->
<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
  <div class="row">
    <h3 class="ml-3">X3 Branch</h3>
    <pre class="text-light">
      <?php
      // print_r($slots);
      ?>
    </pre>
  </div>
  <div class="row">
    <?php foreach ($slots as $slot) {
    ?>
      <div class="col-md-4 border border-warning mt-3 rounded-lg text-light px-md-3 ml-3 mr-3 mb-3">
        <!-- partial:index.partial.html -->
        <span class="font-weight-bold">₹ <?php echo $slot->amt_in_x3 . "/-"; ?></span>
        <div class="body genealogy-body genealogy-scroll">
          <div class="genealogy-tree ml-5">
            <ul>
              <li>
                <a href="<?php echo base_url(); ?>user-partner">
                  <div class="member-view-box">
                    <div class="member-image">
                      <img src="<?php echo base_url('assets/uploads/user-added.png'); ?>" alt="user-added.png" width="80" height="80">

                      <div class="member-details">
                        <small class="text-light"><?php echo $slot->userID; ?></small>
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="active">
                  <li>
                    <a href="
                    <?php
                    if (empty($slot->b1)) {
                      echo base_url() . "new-registration/" . $slot->slotID;
                    } else {
                      echo "javascript:void(0);";
                    }
                    ?>
                    ">
                      <div class="member-view-box">
                        <div class="member-image">
                          <img src="<?php
                                    if (!empty($slot->b1)) {

                                      echo base_url('assets/uploads/user-added-1.png');
                                    } else {
                                      echo base_url('assets/uploads/blank.png');
                                    }

                                    ?>" alt="Member">
                          <div class="member-details">
                            <small class="text-light"><?php echo $slot->b1; ?></small>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="
                     <?php
                      if (empty($slot->b2) && !empty($slot->b1)) {
                        echo base_url() . "new-registration/" . $slot->slotID;
                      } else {
                        echo "javascript:void(0);";
                      }
                      ?>
                    ">
                      <div class="member-view-box">
                        <div class="member-image">
                          <img src="<?php
                                    if (!empty($slot->b2)) {

                                      echo base_url('assets/uploads/user-added-1.png');
                                    } else {
                                      echo base_url('assets/uploads/blank.png');
                                    }
                                    ?>" alt="Member">
                          <div class="member-details">
                            <small class="text-light"><?php echo $slot->b2; ?></small>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="
                     <?php
                      if (empty($slot->b3) && !empty($slot->b2)) {
                        echo base_url() . "new-registration/" . $slot->slotID;
                      } else {
                        echo "javascript:void(0);";
                      }
                      ?>
                    ">
                      <div class="member-view-box">
                        <div class="member-image">
                          <img src="<?php
                                    if (!empty($slot->b3)) {

                                      echo base_url('assets/uploads/user-added-1.png');
                                    } else {
                                      echo base_url('assets/uploads/blank.png');
                                    }
                                    ?>" alt="Member">
                          <div class="member-details">
                            <small class="text-light"><?php echo $slot->b3; ?></small>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </div>

      </div>
    <?php
    }
    ?>
  </div>
</div>
<!-- Main Area End Here -->
</div>
</div>
</div>
</section>
</body>

</html>