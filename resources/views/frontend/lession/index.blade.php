<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lessions</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Maven+Pro:700,400' rel='stylesheet' type='text/css'>    

    <!-- Vendor CSS Files -->
    <link href="{{asset('user/gradeSubject/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/gradeSubject/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/gradeSubject/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/gradeSubject/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('user/gradeSubject/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/gradeSubject/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('user/gradeSubject/assets/css/style.css')}}" rel="stylesheet">
    <!--Calender-->
    <link rel="stylesheet" href="{{asset('user/gradeSubject/css/clndr.css')}}" type="text/css" />
    <script src="{{asset('user/gradeSubject/js/underscore-min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/moment-2.2.1.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/clndr.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/site.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>   
    <!--End Calender-->
</head>
<body>
    <!-- ======= Header ======= -->
 <header id="header" class="fixed-top shadow2">
    <div class="container d-flex pl-0 pr-0">

      <div class="logo mr-auto">
         <a href="index.html#home"><img src="{{asset('user/gradeSubject/img/Logo%20skd.png')}}" alt="" class="img-fluid"></a>
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
        <li><a class="btn yellowcol cen bluetext" href="/login">Login</a></li>    
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <section class="pb-1" id="home" style="margin-top: 30px!important">

    <div class="container">
      <div class="row" style="padding-top: 0px!important">
          <div class="col-lg-12 d-flex flex-column justify-content-center rounded" style="background-color: #e8eaf6;">  
          <p class="bluetext cen pt-2 pb-2 m-0" style="font-size: 20px">Kalyani Maha Vidyalaya, Kitulgala</p>   
          </div>
      </div>
    </div>

  </section> 

    <main id="main">   
    <!-- ======= Portfolio Section ======= -->
        <section class="pl-5 pr-5 pt-4">
          <div class="container pb-lg">
            <div class="row pt-4">
                <div class="col-lg-12 purplebg rounded">
                 <div class="col-lg-6 float-right">
                     <img src="{{asset('user/gradeSubject/img/Class%20img%202.png')}}" class="float-right" height="130px">
                    </div>
                 <div class="col-lg-6 float-left pt-4 pl-5 pr-5 pb-0 col-xs-4">
                     <div class="row"><h1 class="float-left bluetext" id="grade_txt">GRADE </h1></div>
                     <div class="row"><h3 class="float-left bluetext" id="class_txt">Class </h3>
                     {{-- <button type="button" class="btn whitebtn btnsize ml-2 mr-2 mb-1 inline cen">Copy</button> --}}
                     </div>
                    </div>      
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-3 p-0">
                    <div class="col-lg-12 p-0 bor rounded purplebg lh-0">
                        <p class="bluetext pl-3 pr-3 pt-3 ml-2 mr-2 mt-2 pb-2 mb-0 cen bgwhite bluetext fsize">Calander</p> 
                        <p class="bluetext pl-1 pr-1 pt-1 ml-2 mr-2 pb-2 mb-0 cen bgwhite fsize2">Select the date and get class work</p> 
                            <div class="column_right_grid calender p-1 bgwhite borrad">
                              <div class="cal1">
                                <div class="clndr">
                                  <div class="clndr-controls">
                                    <div class="clndr-control-button">
                                      <p class="clndr-previous-button">previous</p>
                                    </div>
                                    <div class="month pt-0">September 2015</div>
                                    <div class="clndr-control-button rightalign">
                                      <p class="clndr-next-button">next</p>
                                    </div>
                                  </div>
                                  <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                                    <thead>
                                      <tr class="header-days">
                                        <td class="header-day">S</td>
                                        <td class="header-day">M</td>
                                        <td class="header-day">T</td>
                                        <td class="header-day">W</td>
                                        <td class="header-day">T</td>
                                        <td class="header-day">F</td>
                                        <td class="header-day">S</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="day past adjacent-month last-month calendar-day-2015-08-30">
                                          <div class="day-contents">30</div>
                                        </td>
                                        <td class="day past adjacent-month last-month calendar-day-2015-08-31">
                                          <div class="day-contents">31</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-01">
                                          <div class="day-contents">1</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-02">
                                          <div class="day-contents">2</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-03">
                                          <div class="day-contents">3</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-04">
                                          <div class="day-contents">4</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-05">
                                          <div class="day-contents">5</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="day past calendar-day-2015-09-06">
                                          <div class="day-contents">6</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-07">
                                          <div class="day-contents">7</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-08">
                                          <div class="day-contents">8</div>
                                        </td>
                                        <td class="day past calendar-day-2015-09-09">
                                          <div class="day-contents">9</div>
                                        </td>
                                        <td class="day past event calendar-day-2015-09-10">
                                          <div class="day-contents">10</div></td><td class="day past event calendar-day-2015-09-11"><div class="day-contents">11</div></td><td class="day past event calendar-day-2015-09-12"><div class="day-contents">12</div></td></tr><tr><td class="day past event calendar-day-2015-09-13"><div class="day-contents">13</div></td><td class="day past event calendar-day-2015-09-14"><div class="day-contents">14</div></td><td class="day past calendar-day-2015-09-15"><div class="day-contents">15</div></td><td class="day past calendar-day-2015-09-16"><div class="day-contents">16</div></td><td class="day past calendar-day-2015-09-17"><div class="day-contents">17</div></td><td class="day past calendar-day-2015-09-18"><div class="day-contents">18</div></td><td class="day past calendar-day-2015-09-19"><div class="day-contents">19</div></td></tr><tr><td class="day past calendar-day-2015-09-20"><div class="day-contents">20</div></td><td class="day past event calendar-day-2015-09-21"><div class="day-contents">21</div></td><td class="day past event calendar-day-2015-09-22"><div class="day-contents">22</div></td><td class="day past event calendar-day-2015-09-23"><div class="day-contents">23</div></td><td class="day past calendar-day-2015-09-24"><div class="day-contents">24</div></td><td class="day past calendar-day-2015-09-25"><div class="day-contents">25</div></td><td class="day today calendar-day-2015-09-26"><div class="day-contents">26</div></td></tr><tr><td class="day calendar-day-2015-09-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-09-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-09-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-09-30"><div class="day-contents">30</div></td><td class="day adjacent-month next-month calendar-day-2015-10-01"><div class="day-contents">1</div></td><td class="day adjacent-month next-month calendar-day-2015-10-02"><div class="day-contents">2</div></td><td class="day adjacent-month next-month calendar-day-2015-10-03"><div class="day-contents">3</div></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                    </div>
                      
                    <div class="col-lg-12 p-0 mt-3 bor rounded purplebg lh-0 cen">
                        <p class="bluetext pl-3 pr-3 pt-3 ml-2 mr-2 mt-2 pb-2 mb-0 cen bgwhite blacktext fsize">Time Table</p>
                     
                        <table class="table table-borderless bgwhite table-hover cen mb-0 borrad tbl pb-2">
                          <tbody>
                            <tr onclick="window.location='#';">
                              <td>12.30pm-1.30pm</td>
                              <td>Sinhala</td>
                            </tr>
                            <tr onclick="window.location='#';">
                              <td>12.30pm-1.30pm</td>
                              <td>Tamil</td>
                            </tr>
                            <tr onclick="window.location='#';">
                              <td>12.30pm-1.30pm</td>
                              <td>English</td>
                            </tr>  
                          </tbody>
                        </table>
                            
                    </div>  
                </div>
                      
                <div class="col-lg-9" id="lession_view">
                     {{-- <div class="col-sm-3 inline p-2 ml-5  mb-3  purplebgsub">
                        <img src="{{asset('user/gradeSubject/img/book%20ico.png')}}" class="float-left inline" width="30px">
                         <a class="float-right inline mr-2 bluetext subtext" href="#">Subject</a>
                      </div> --}}
                               
                </div>
                  
            </div>
          </div>
        </section>
    </main>


    <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt blue"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{asset('user/gradeSubject/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/gradeSubject/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/jquery-1.11.1.min.js')}}"></script>  
    <!-- Template Main JS File -->
    <script src="{{asset('user/gradeSubject/assets/js/main.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/underscore-min.js')}}"></script>
    <script src= "{{asset('user/gradeSubject/js/moment-2.2.1.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/clndr.js')}}"></script>
    <script src="{{asset('user/gradeSubject/js/site.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

</body>
</html>