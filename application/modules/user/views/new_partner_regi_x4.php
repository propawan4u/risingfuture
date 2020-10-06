<?php
$slo_id = $this->uri->segment(2);
$level = $this->uri->segment(3);
$position = $this->uri->segment(4);
$Uposition = $this->uri->segment(5);
?>
<!-- Main Area Strat Here -->
<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
  <form action="<?php echo base_url(); ?>save-user2" method="POST">
    <input type="hidden" value="<?php echo $userWallet[0]['userID'] ?>" name="user_id">
    <input type="hidden" value="<?php echo $slo_id; ?>" name="slot_id">
    <input type="hidden" value="<?php echo $level; ?>" name="level">
    <input type="hidden" value="<?php echo $position; ?>" name="position">
    <input type="hidden" value="<?php echo $Uposition; ?>" name="partnerPosition">
    <div class="row">
      <h3 class="ml-3">Partner Registration for X4</h3>
    </div>
    <div class="row mt-5">
      <div class="col-md-3 form-group text-warning font-weight-bold offset-md-1">
        <label for="Wallet Balance">Wallet Balance</label><br>
        <label for="amount">₹ <?php echo $userWallet[0]['wallet']; ?></label>
      </div>
      <div class="col-md-4 form-group">
        <label for="Wallet Balance">Mobile Number</label>
        <input type="text" name="contact" value="<?php echo set_value('contact'); ?>" class="form-control" placeholder="Enter Partner Mobile Number">
        <span><?php echo form_error('contact'); ?></span>
      </div>
      <div class="col-md-4 form-group">
        <label for="Wallet Balance">Email</label>
        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Enter Partner Email">
        <span><?php echo form_error('email'); ?></span>
      </div>
      <div class="col-md-4 form-group mx-auto">
        <button type="submit" class="btn btn-success btn-sm rounded-pill">Submit</button>
        <button type="submit" class="btn btn-primary btn-sm rounded-pill">Cancel</button>
      </div>
    </div>
  </form>
</div>
<!-- Main Area End Here -->
</div>
</div>
</div>
</section>
</body>

</html>