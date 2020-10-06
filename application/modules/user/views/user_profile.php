 <!-- Main Area Strat Here -->
 <div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
   <form action="<?php echo base_url() . "save-user-details/" . $userData->uid; ?>" method="POST">
     <div class="row">
       <h3 class="ml-3">Partner Profile</h3>
     </div>
     <div class="row mt-5">
       <div class="col-md-4 form-group text-warning font-weight-bold">
         <label for="Mobile Number">Mobile Number</label><br>
         <input type="text" name="mobile" value="<?php echo set_value('mobile', $userData->contact); ?>" disabled class="form-control" placeholder="Enter Partner Name">
         <span><?php echo form_error('mobile'); ?></span>
       </div>
       <div class="col-md-4 form-group text-warning font-weight-bold">
         <label for="Email">Email</label>
         <input type="email" name="email" value="<?php echo set_value('email', $userData->email); ?>" disabled class="form-control" placeholder="Enter Partner Name">
         <span><?php echo form_error('name'); ?></span>
       </div>
       <div class="col-md-8 form-group text-warning font-weight-bold">
         <label for="Note">
           <b>Note:</b> Kindly fill Authorized Bank Account.
         </label>
       </div>
       <div class="col-md-8 form-group text-warning font-weight-bold">
         <label for="Bank Name">Bank Name</label>
         <!-- <small class="text-muted" style="font-size:x-small;">1st digit can't be zero.</small> -->
         <input type="text" name="bank_name" value="<?php echo set_value('bank_name', $userData->bank_name); ?>" class="form-control" placeholder="Enter Partner Bank Name">
         <span><?php echo form_error('bank_name'); ?></span>
       </div>
       <div class="col-md-8 form-group">
         <label for="Bank Name">Account Number</label>
         <!-- <small class="text-muted" style="font-size:x-small;">1st digit can't be zero.</small> -->
         <input type="text" name="ac_number" value="<?php echo set_value('bank_name', $userData->ac_no); ?>" title="Error! only numbers allowed" class="form-control" placeholder="Enter Partner Account Number">
         <span><?php echo form_error('ac_number'); ?></span>
       </div>
       <div class="col-md-8 form-group">
         <label for="Bank IFSC">Bank IFSC</label>
         <input type="text" name="ifsc" value="<?php echo set_value('ifsc', $userData->ifsc); ?>" class="form-control" placeholder="Enter Partner Email">
         <span><?php echo form_error('ifsc'); ?></span>
       </div>
       <div class="col-md-8 form-group">
         <label for="Bank Account Holder Name">Bank Account Holder Name</label>
         <input type="text" name="ac_hld_name" value="<?php echo set_value('ac_hld_name', $userData->ac_hld_name); ?>" class="form-control" placeholder="Enter Partner Email">
         <span><?php echo form_error('ac_hld_name'); ?></span>
       </div>
       <div class="col-md-8 form-group">
         <label for="Bank Branch">Bank Branch</label>
         <input type="text" name="branch" value="<?php echo set_value('branch', $userData->branch); ?>" class="form-control" placeholder="Enter Partner Email">
         <span><?php echo form_error('branch'); ?></span>
       </div>
       <div class="col-md-5 form-group mx-auto">
         <?php if (empty($userData->bank_name) || empty($userData->ifsc) || empty($userData->branch) || empty($userData->ac_no)) { ?>
           <button type="submit" class="btn btn-success btn-sm rounded-pill">Submit</button>
           <button class="btn btn-primary btn-sm rounded-pill">Cancel</button><br><br>
           <label class="bg-danger" for="Notice">Submit your bank details.</label>
         <?php } ?>
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