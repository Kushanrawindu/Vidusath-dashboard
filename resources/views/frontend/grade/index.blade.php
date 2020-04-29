<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Grade</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('user/grade/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/grade/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/grade/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/grade/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('user/grade/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/grade/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('user/grade/assets/css/style.css')}}" rel="stylesheet">

 

</head>

<body>    
  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top shadow2">
    <div class="container d-flex pl-0 pr-0">

      <div class="logo mr-auto">
         <a href="index.html#home"><img src="{{asset('user/grade/img/Logo%20skd.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active cen"><a href="index.html#home">Home</a></li>
          <li><a class="cen" href="index.html#about">How to Use</a>
          </li>
          <li><a class="cen" href="index.html#contact">Contact</a></li>
          <li><a type="button" class="btn dropdown-toggle cen" data-toggle="dropdown">
                        English
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">සිංහල</a>
                        <a class="dropdown-item" href="#">தமில்</a>
                     
                    </div> </li>
        <li><a class="btn yellowcol cen bluetext" href="#">Login</a></li>    
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    
 <section class="pb-1" id="home" style="margin-top: 30px!important">

    <div class="container">
      <div class="row" style="padding-top: 0px!important">
          <div class="col-lg-12 d-flex flex-column justify-content-center rounded" data-aos="fade-up" style="background-color: #e8eaf6;">  
            {{-- <p class="bluetext cen pt-2 pb-2 m-0" style="font-size: 20px">Kalyani Maha Vidyalaya</p> --}}
            @foreach ($data as $data)
              <p class="bluetext cen pt-2 pb-2 m-0" style="font-size: 20px">{{$data->school->name}}</p>
            @endforeach  
        </div>
      </div>
    </div>
</section>    

 <main id="main">   
<!-- ======= Portfolio Section ======= -->
    <section class="pl-5 pr-5 pt-4">
      <div class="container pb-lg">
          <div class="row">
           <div class="col-lg-12 cen">
               <form>
               <p class="inline mb-1 cen ml-3">Select your class</p>
               
               <div class="btn-group inline cen">
                      <button type="button" class="btn dropdown-toggle rounded borblue ml-3 mb-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Grade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </button>
                      <div class="dropdown-menu y-ovr">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item" href="#">else</a>
                        <a class="dropdown-item" href="#">action</a>
                        <a class="dropdown-item" href="#">else here</a>
                        <a class="dropdown-item" href="#">else</a>
                        <a class="dropdown-item" href="#">action</a>
                        <a class="dropdown-item" href="#">else here</a>
                        <a class="dropdown-item" href="#">else</a>
                        <a class="dropdown-item" href="#">action</a>
                        <a class="dropdown-item" href="#">else here</a>  
                      </div>
                    </div>
               
                    <div class="btn-group inline cen">
                      <button type="button" class="btn dropdown-toggle rounded borblue ml-3 mb-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </button>
                      <div class="dropdown-menu y-ovr">
                        <a class="dropdown-item" href="#">else</a>
                        <a class="dropdown-item" href="#">action</a>
                        <a class="dropdown-item" href="#">else here</a>
                        <a class="dropdown-item" href="#">else</a>
                        <a class="dropdown-item" href="#">action</a>
                        <a class="dropdown-item" href="#">else here</a>
                        <a class="dropdown-item" href="#">else</a>
                        <a class="dropdown-item" href="#">action</a>
                        <a class="dropdown-item" href="#">else here</a>  
                      </div>
                    </div>
                   <button type="button" class="btn yellowblk ml-3 mb-1 cen">Go</button> 
               </form>
              </div>
              <div class="col-lg-12 cen">
              <img src="{{asset('user/grade/img/Class%20img%201.png')}}" class="img-fluid" width="400px" style="padding-top: 150px">
              </div>
          </div>
        </div>
    </section><!-- End Portfolio Section -->        
        </main>


  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt blue"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('user/grade/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('user/grade/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('user/grade/assets/js/main.js')}}"></script>

</body>

</html>