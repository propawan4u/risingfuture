<?php
$slo_id = $this->uri->segment(2);
?>
<!-- Main Area Strat Here -->
<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
  <form action="<?php echo base_url(); ?>save-user" method="POST">
    <input type="hidden" value="<?php echo $slo_id; ?>" name="slot_id">
    <div class="row">
      <h3 class="ml-3">Partner Registration For X3</h3>
    </div>
    <div class="row mt-5">
      <div class="col-md-3 form-group text-warning font-weight-bold">
        <label for="Wallet Balance">Wallet Balance</label><br>
        <label for="amount">₹ <?php echo $userWallet[0]['wallet']; ?></label>
      </div>
      <div class="col-md-3 form-group">
        <label for="Wallet Balance">Name</label>
        <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Enter Partner Name">
        <span><?php echo form_error('name'); ?></span>
      </div>
      <div class="col-md-3 form-group">
        <label for="Wallet Balance">Mobile No.</label>
        <small class="text-muted" style="font-size:x-small;">1st digit can't be zero.</small>
        <input type="text" name="contact" value="<?php echo set_value('contact'); ?>" title="Error! only numbers allowed" pattern="[1-9]{1}[0-9]{9}" class="form-control" placeholder="Enter Partner Mobile Number">

        <span><?php echo form_error('contact'); ?></span>
      </div>
      <div class="col-md-3 form-group">
        <label for="Wallet Balance">Email</label>
        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Enter Partner Email">
        <span><?php echo form_error('email'); ?></span>
      </div>
      <div class="col-md-3 form-group mx-auto">
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