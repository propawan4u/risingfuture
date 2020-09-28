<!-- Main Area Strat Here -->
<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
  <form action="<?php echo base_url(); ?>update-credential" method="POST">
    <div class="row">
      <h3 class="ml-3">Update Password</h3>
    </div>
    <div class="row mt-5">
      <div class="col-md-8 form-group text-warning font-weight-bold">
        <label for="Enter Old Password">Enter Old Password</label><br>
        <input type="password" name="old_pass" value="<?php echo set_value('old_pass'); ?>" class="form-control" placeholder="Enter your old password">
        <span class="text-danger"><?php echo form_error('new_pass'); ?></span>
      </div>
      <div class="col-md-8 form-group text-warning font-weight-bold">
        <label for="Create New Password">Create New Password</label>
        <input type="password" name="new_pass" value="<?php echo set_value('new_pass'); ?>" class="form-control" placeholder="Enter New Password">
        <span class="text-danger"><?php echo form_error('new_pass'); ?></span>
      </div>
      <div class="col-md-8 form-group text-warning font-weight-bold">
        <label for="Confirm Password">Confirm Password</label>
        <input type="password" name="confirm_pass" value="<?php echo set_value('confirm_pass'); ?>" class="form-control" placeholder="Confirm Password">
        <span class="text-danger"><?php echo form_error('confirm_pass'); ?></span>
      </div>
      <div class="col-md-5 form-group mx-auto">
        <button type="submit" class="btn btn-success btn-sm rounded-pill">Submit</button>
        <button class="btn btn-primary btn-sm rounded-pill">Cancel</button>
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