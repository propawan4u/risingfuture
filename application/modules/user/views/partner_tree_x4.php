 <?php
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

  ?>
 <!-- Main Area Strat Here -->
 <div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
   <div class="row">
     <h3 class="ml-3">Partner Tree</h3>
     <pre class="text-light">
      <?php
      //print_r($getX4Cycles);
      ?>
    </pre>
   </div>
   <div class=" row">
     <div class="col-md-3 mx-auto">
       <div class="form-group">
         <select name="cycle" id="get_cycle_id_by_x4" class="form-control">
           <?php
            foreach ($getX4Cycles1 as $key => $cyc) {
            ?>
             <option value="<?php echo $key; ?>" selected>Cycle <?php echo $key; ?></option>
           <?php
            }
            ?>
         </select>
       </div>
     </div>
   </div>
   <div class="row" id="x4_cycle_id">
     <!-- <div class="col-md-4"></div> -->
     <div class="col-md-4 mt-3 rounded-lg text-light px-md-3 ml-3 mb-3 mx-auto" id="show_div">
       <!-- partial:index.partial.html -->
       <div class="body genealogy-body genealogy-scroll mx-auto">
         <div class="genealogy-tree ml-4">
           <ul class="mx-auto">
             <li>
               <a href="javascript:void(0);">
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
   </div>
 </div>
 <!-- Main Area End Here -->
 </div>
 </div>
 </div>
 </section>
 </body>

 </html>