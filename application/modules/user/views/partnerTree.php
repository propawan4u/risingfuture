<!-- Main Area Strat Here -->
<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
  <div class="row">
    <h3 class="ml-3">Partner Tree</h3>
    <input type="hidden" id="slotID" value="<?php echo $this->uri->segment(2); ?>">
    <pre class="text-light">
      <?php
      //print_r($cycle);

      ?>
    </pre>
  </div>
  <div class=" row">
    <div class="col-md-3 mx-auto">
      <div class="form-group">
        <select name="cycle" id="getCycleID" class="form-control">
          <?php
          foreach ($cycle as $key => $cyc) {
          ?>
            <option value="<?php echo $cyc->x3id; ?>" <?php
                                                      if (empty($cyc->b1) || empty($cyc->b2) || empty($cyc->b3)) {
                                                        echo "selected";
                                                      }
                                                      ?>>Cycle
              <?php echo $key; ?>
            </option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="mt-3 rounded-lg text-light px-md-3 ml-3 mb-3 mx-auto">
      <!-- partial:index.partial.html -->
      <div class="body genealogy-body genealogy-scroll">
        <div class="genealogy-tree">
          <ul>
            <li>
              <a href="javascript:void(0);">
                <div class="member-view-box">
                  <div class="member-image">
                    <img src="<?php echo base_url('assets/uploads/user-added.png'); ?>" alt="Member">
                    <div class="member-details">
                      <small class='text-light'><?php echo $cyc->userID; ?></small>
                    </div>
                  </div>
                </div>
              </a>
              <ul class="active text-light" id="showTree">
                <li>
                  <a href="
                  <?php
                  if (empty($cyc->b1)) {
                    echo base_url() . "new-registration/" . $cyc->slotID;
                  } else {
                    echo "javascript:void(0);";
                  }
                  ?>
                  ">
                    <div class="member-view-box">
                      <div class="member-image">
                        <img src="<?php
                                  if (!empty($cyc->b1)) {
                                    echo base_url('assets/uploads/user-added-1.png');
                                  } else {
                                    echo base_url('assets/uploads/blank.png');
                                  }
                                  ?>" alt="Member">
                        <div class="member-details">
                          <small class="text-light"> <?php echo $cyc->b1; ?> </small>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="
                  <?php
                  if (empty($cyc->b2)) {
                    echo base_url() . "new-registration/" . $cyc->slotID;
                  } else {
                    echo "javascript:void(0);";
                  }
                  ?>
                  ">
                    <div class="member-view-box">
                      <div class="member-image">
                        <img src="<?php
                                  if (!empty($cyc->b2)) {
                                    echo base_url('assets/uploads/user-added-1.png');
                                  } else {
                                    echo base_url('assets/uploads/blank.png');
                                  }
                                  ?>" alt="Member">
                        <div class="member-details">
                          <small class="text-light"> <?php echo $cyc->b2; ?> </small>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="
                  <?php
                  if (empty($cyc->b3) && !empty($cyc->b2)) {
                    echo base_url() . "new-registration/" . $cyc->slotID;
                  } else {
                    echo "javascript:void(0);";
                  }
                  ?>
                  ">
                    <div class="member-view-box">
                      <div class="member-image">
                        <img src="<?php
                                  if (!empty($cyc->b3)) {
                                    echo base_url('assets/uploads/user-added-1.png');
                                  } else {
                                    echo base_url('assets/uploads/blank.png');
                                  }
                                  ?>" alt="Member">
                        <div class="member-details">
                          <small class="text-light"> <?php echo $cyc->b3; ?> </small>
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
  </div>
</div>
<!-- Main Area End Here -->
</div>
</div>
</div>
</section>
</body>

</html>