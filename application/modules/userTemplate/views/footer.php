<script src="<?php echo base_url(); ?>build/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>build/js/script.js"></script>
<script src="<?php echo base_url(); ?>build/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>build/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>sweetalert2/js/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>sweetalert2/js/sweetalert2.min.js"></script>

<!-- Data Tables Started-->
<script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/responsive.bootstrap4.min.js"></script>
<!-- Data Tables Endded-->
<script>
    // ---Function for getting Tree by ID----
    $(document).ready(function() {
        // ------------------------------------------------
        $("#getCycleID").change(function() {
            var x3id = $("#getCycleID").val();
            // alert(sid);
            $.ajax({
                url: "<?php echo base_url(); ?>show-tree",
                method: "POST",
                data: {
                    x3id: x3id,
                },
                success: function(result) {
                    $("#showTree").html(result);
                    // alert(result);
                }
            });

        });
        
        // ------------------------------------------------
        $("#get_cycle_id_by_x4").change(function() {
            var key = $("#get_cycle_id_by_x4").val();
            // alert(key);
            // var show = ;
            $.ajax({
                url: "<?php echo base_url(); ?>show-tree-for-x4",
                method: "POST",
                data: {
                    key: key,
                },
                success: function(result) {
                    var response = JSON.parse(result);
                    // console.log(response);
                    var show = '<div class="col-md-4 mt-3 rounded-lg text-light px-md-3 ml-3 mb-3 mx-auto"> <div class="body genealogy-body genealogy-scroll mx-auto"> <div class="genealogy-tree ml-4"> <ul class="mx-auto"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[0].userID +' </small> </div> </div> </div> </a> <ul class="active"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[0].usr_id +'</small> </div> </div> </div> </a> <ul class="active"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[2].usr_id +'</small> </div> </div> </div> </a> </li> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[3].usr_id +'</small> </div> </div> </div> </a> </li> </ul> </li> <li> <a href="javascript:void(0); "> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[1].usr_id +'</small> </div> </div> </div> </a> <ul class="active"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[4].usr_id +'</small> </div> </div> </div> </a> </li> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">'+ response[5].usr_id +'</small> </div> </div> </div> </a> </li> </ul> </li> </ul> </li> </ul> </div> </div> </div>';
                    $("#x4_cycle_id").html(show);
                }
            });

        });

        // ------------------------------------
        $("#partnerID").blur(function() {
            var pid = $("#partnerID").val();
            // alert(pid);
            $.ajax({
                url: "<?php echo base_url(); ?>get-partner-data",
                method: "POST",
                data: {
                    pid: pid,
                },
                success: function(result) {
                    var response = JSON.parse(result);
                    console.log(response);
                    $("#partnerName").val(response.name);
                    if (response.error == 'error') {

                        alert('Invalid Partner ID !!');
                    }
                }
            });

        });
        
        // -------------------Get All X4 Slots Started----------------------------
        
        $("#get_cycle_id_by_x4_slot").change(function() {
            var key = $("#get_cycle_id_by_x4_slot").val();
            var slotId = $("#slotId").val();
            // var show = ;
            $.ajax({
                url: "<?php echo base_url(); ?>show-tree-for-x4-slots",
                method: "POST",
                data: {
                    key: key,
                    slotId: slotId,
                },
                success: function(result) {

                    var response = JSON.parse(result);
                    // alert(result);
                    console.log(response);
                    // alert(response);
                    var show = '<div class="col-md-4 mt-3 rounded-lg text-light px-md-3 ml-3 mb-3 mx-auto"> <div class="body genealogy-body genealogy-scroll mx-auto"> <div class="genealogy-tree ml-4"> <ul class="mx-auto"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[0].userID + ' </small> </div> </div> </div> </a> <ul class="active"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[0].juserID + '</small> </div> </div> </div> </a> <ul class="active"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[2].juserID + '</small> </div> </div> </div> </a> </li> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[3].juserID + '</small> </div> </div> </div> </a> </li> </ul> </li> <li> <a href="javascript:void(0); "> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[1].juserID + '</small> </div> </div> </div> </a> <ul class="active"> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[4].juserID + '</small> </div> </div> </div> </a> </li> <li> <a href="javascript:void(0);"> <div class="member-view-box"> <div class="member-image"> <img src="<?php echo base_url('assets/uploads/user-added-1.png'); ?>" alt="Member"> <div class="member-details"> <small class="text-light">' + response[5].juserID + '</small> </div> </div> </div> </a> </li> </ul> </li> </ul> </li> </ul> </div> </div> </div>';
                    $("#x4_cycle_id_slots").html(show);
                }
            });

        });

        // ------------Get All X4 Slots Endded---------
        // ----------------Sweetalert2-----------------

        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            <?php if ($this->session->flashdata('success')) { ?>
                Toast.fire({
                    icon: 'success',
                    title: '<?php echo $this->session->flashdata('success'); ?>'
                });
            <?php } else if ($this->session->flashdata('error')) {  ?>
                Toast.fire({
                    icon: 'error',
                    title: '<?php echo $this->session->flashdata('error'); ?>'
                });
            <?php } else if ($this->session->flashdata('warning')) {  ?>
                Toast.fire({
                    icon: 'warning',
                    title: '<?php echo $this->session->flashdata('warning'); ?>'
                });
            <?php } else if ($this->session->flashdata('info')) {  ?>
                Toast.fire({
                    icon: 'info',
                    title: '<?php echo $this->session->flashdata('info'); ?>'
                });
            <?php } ?>

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    icon: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultError').click(function() {
                Toast.fire({
                    icon: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    icon: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultQuestion').click(function() {
                Toast.fire({
                    icon: 'question',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastsDefaultDefault').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultTopLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'topLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomRight').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomRight',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultAutohide').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    autohide: true,
                    delay: 750,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultNotFixed').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    fixed: false,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultFull').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    icon: 'fas fa-envelope fa-lg',
                })
            });
            $('.toastsDefaultFullImage').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    image: '<?php echo base_url(); ?>dist/img/user3-128x128.jpg',
                    imageAlt: 'User Picture',
                })
            });
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultWarning').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultDanger').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultMaroon').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-maroon',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });

    });
</script>
<script>
    $(document).ready(function() {
        $('#example5').DataTable();
    });
</script>