 <footer class="main-footer">
   <div class="footer-left">
     Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="https://www.skywebsoftindia.com/">Sky Web Soft India</a>
   </div>
   <div class="footer-right">
   </div>
 </footer>
 </div>
 </div>
 <!-- General JS Scripts -->
 <script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.js"></script>
 <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="<?php echo base_url() ?>assets/bundles/datatables/datatables.min.js"></script>
 <script src="<?php echo base_url() ?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url() ?>assets/bundles/jquery-ui/jquery-ui.min.js"></script>
 <script src="<?php echo base_url() ?>assets/bundles/prism/prism.js"></script>
 <!-- Page Specific JS File -->
 <script src="<?php echo base_url() ?>assets/js/page/datatables.js"></script>
 <!-- JS Libraies -->
 <!-- <script src="<?php echo base_url() ?>assets/bundles/apexcharts/apexcharts.min.js"></script> -->
 <!-- <script src="<?php echo base_url() ?>assets/bundles/jqvmap/dist/jquery.vmap.min.js"></script> -->
 <!-- <script src="<?php echo base_url() ?>assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
 <!-- Page Specific JS File -->
 <script src="<?php echo base_url() ?>assets/js/page/index.js"></script>
 <!-- Template JS File -->
 <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
 <!-- Custom JS File -->
 <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

 <!-- style="color: #FFD700;margin-left:5px;" -->

 <script>
   $(document).ready(function() {
     $('#parent_id').keyup(function() {
       var parent_id = $('#parent_id').val();
       var parent_id1 = $('#parent_id').val();
       var PID = parent_id1.toString();
       //  alert(PID);
       $.post("<?php echo base_url(); ?>get-name", {
           parent_id: parent_id
         },
         function(data) {
           $('#parent_name').val(data);
           if (data == "Id Not Matched") {
             $('#error').show();
             $('#success').hide();
             $('#nameerror').show();
             $('#namesuccess').hide();
           } else if (data >= "1") {
             $('#success').show();
             $('#error').hide();
             $('#namesuccess').show();
             $('#nameerror').hide();
           }
           //  alert(data);
         });

     });
   });
 </script>
 <script>
   $(document).ready(function() {
     $("#myModal").modal();
   });
 </script>
 <script>
   $(document).ready(function() {
     $("#getpass").click(function() {
       var pass = $("#getpass1").val();
       $("#password").val(pass);
       // alert(pass);

     });
   });
 </script>

 </body>

 </html>