<!-- Vendor JS Files -->
<script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('user/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('user/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('user/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('user/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('user/js/main.js')}}"></script>

<!-- Ajax CDN link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

{{-- <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','.district',function(){
            console.log("changed");

            var 
        });
    });
</script> --}}

<script type="text/javascript"> 
    jQuery(document).ready(function()
    {
        jQuery('select[name="district"]').on('change', function()
        {
            var districtId = jQuery(this).val();
            if(districtId)
            {
                jQuery.ajax({
                    url: '/getSchools/' + districtId,
                    type: "GET",
                    dataType: "json",
                    success:function(data)
                    {
                        //JSON.stringify(data);
                        jQuery('select[name="school"]').empty();
                        for (var i=0;i<data.length;i++) {
                            //alert(data[i].id);
                            $('select[name="school"]').append('<option value="'+data[i].id+'">'+ data[i].name + '</option>');
                        }

                        // //alert(data);
                        // jQuery('select[name="school"]').empty();
                        // jQuery.each(data, function(key, value){
                        //     console.log('Value of '+ key +' is : ' + value);
                        //     $('select[name="school"]').append('<option value="'+ key +'">'+ value +'</option>');
                        // });

                        // $.each(data, function(i, value) {
                        //     console.log('Value of '+ i +' is : ' + value);
                        // })
                    }
                });
            }
            else
            {
                $('select[name="school"]').empty();
            }
        });
    });
</script>

<script type="text/javascript">
    $("#search").on("click",function(){
        var link = document.getElementById("school").value;

        $.ajax({
            url: window.location.href="getSchools/" + link
        });
    });
</script>