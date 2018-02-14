<!--   Core JS Files   -->
<script src="<?php echo e(asset('js/jquery.3.2.1.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo e(asset('js/chartist.min.js')); ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo e(asset('js/bootstrap-notify.js')); ?>"></script>


<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo e(asset('js/light-bootstrap-dashboard.js?v=1.4.0')); ?>"></script>
<!--  Datatable    -->
<script src="<?php echo e(asset('js/datatable/dataTables.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatable/jquery.dataTables.min.js')); ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );
</script>