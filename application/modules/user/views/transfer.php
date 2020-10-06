<!-- Main Area Strat Here -->
<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
  <form action="<?php echo base_url(); ?>transfer-balance" method="POST">
    <div class="row">
      <h3 class="ml-3">Balance Transfer</h3>
    </div>
    <div class="row mt-5">
      <div class="col-md-3 form-group text-warning font-weight-bold">
        <label for="Wallet Balance">Wallet Balance</label><br>
        <label for="Wallet Balance">
          <?php
          if (!empty($userData->wallet)) {
            echo "₹ " . $userData->wallet . "/-";
          } else {
            echo "₹ 0/-";
          }
          ?>
        </label>
      </div>
      <div class="col-md-3 form-group">
        <label for="Wallet Balance">Partner Name</label>
        <input type="text" name="partnerName" id="partnerName" disabled value="<?php echo set_value('partnerName'); ?>" class="form-control" placeholder="Enter Partner Name">
        <span><?php echo form_error('partnerName'); ?></span>
      </div>
      <div class="col-md-3 form-group">
        <label for="Wallet Balance">Partner ID</label>
        <small class="text-muted" style="font-size:x-small;">1st digit can't be zero.</small>
        <input type="text" name="partnerID" id="partnerID" value="<?php echo set_value('partnerID'); ?>" class="form-control" placeholder="Enter Partner Mobile Number">
        <span><?php echo form_error('partnerID'); ?></span>
      </div>
      <div class="col-md-3 form-group">
        <label for="Wallet Balance">Amount</label>
        <input type="text" name="amount" value="<?php echo set_value('amount'); ?>" class="form-control" placeholder="eg: 1000,2000,...">
        <span><?php echo form_error('amount'); ?></span>
      </div>
      <div class="col-md-3 form-group mx-auto">
        <button type="submit" class="btn btn-success btn-sm rounded-pill"> Transfer</button>
        <a href="<?php echo base_url('user-x3'); ?>" class="btn btn-primary btn-sm rounded-pill"> Cancel</a>
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