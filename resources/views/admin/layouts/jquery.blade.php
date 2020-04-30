<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('admin/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('admin/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('admin/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('admin/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('admin/build/js/custom.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    var table = $('#example').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [1,2,3]
        }]
    });
 
    // $('button').click( function() {
    //     var data = table.$('input, select').serialize();
    //     alert(
    //         "The following data would have been submitted to the server: \n\n"+
    //         data.substr( 0, 120 )+'...'
    //     );
    //     return false;
    // } );
    } );
</script>