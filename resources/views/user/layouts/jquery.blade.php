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
<!-- bootstrap-datetimepicker -->    
<script src="{{asset('admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- FullCalendar -->
<script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('admin/build/js/custom.min.js')}}"></script>

<!-- Initialize datetimepicker -->
<script>
$('#myDatepicker2').datetimepicker({
    format: 'DD.MM.YYYY'
});

$('#myDatepicker3').datetimepicker({
    format: 'hh:mm A'
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script type="text/javascript">
    $('.dynamic').change(function(){

      var grade = $('#grade').val();
      var cls = $('#class').val();


        $.ajax({
              url:"{{ route('classwork.getLession') }}",
              method: "get",
              data: {grade:grade,class:cls},
              datatype: "json",
              success:function (data) {
                $('#subject').html(data.html);
                // $('#grade_txt').text("GRADE : "+grade);
                // $('#class_txt').text("Class : "+cls);
              }
           });
    });
</script>