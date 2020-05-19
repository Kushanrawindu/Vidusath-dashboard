@extends('frontend.layouts.app')

@section('main-content')
<section id="home" style="margin-top: 30px!important">

    <div class="container">
      <div class="row pb-5" style="padding-top: 0px!important">
          <div class="col-lg-12 d-flex flex-column justify-content-center rounded" data-aos="fade-up" style="background-color: #e8eaf6;">
              <div class="row">
             <div class="col-lg-1"><img class="" src="{{asset('user/img/school%20icon.png')}}" height="100px"></div>
             <div class="col-lg-8" style="padding: 20px"><p style="font-size: 14px;margin-left: 5px">Select your school, then enter the relevant subject and classroom</p>
                  <div class="dropdown inline">
                    <select class="btn btn-light btn-sm dropdown-toggle text-left p-1 district" name="district" id="district" data-activates="menu1" type="button" data-toggle="dropdown" style="border-radius: 15px;width: 250px;font-size: 12px;margin-bottom: 5px"><span class="caret"></span>
                      <option selected="false">--Select District--</option>
                      @foreach ($district as $district)
                        <option value="{{$district->district_id}}">{{$district->name_en}}</option>
                      @endforeach
                    </select>
                    <select class="btn btn-light btn-sm dropdown-toggle text-left p-1 school" name="school" id="school" data-activates="menu1" type="button" data-toggle="dropdown" style="border-radius: 15px;width: 250px;font-size: 12px;margin-bottom: 5px"><span class="caret"></span>
                      <option selected="false">--Select School--</option>
                      {{-- @foreach ($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                      @endforeach --}}
                    </select>
                    <button class="btn yellowcol" name="search" id="search" style="color: #244892!important;border-radius: 15px;width: 100px;font-size: 12px;margin-bottom: 5px">SEARCH</button>
                  </div>
              </div>
            <div class="col-lg-3 p-4">
                <div class="row" style="background:   ;border-radius: 10px;color: white;width: 250px">
                    <p style="font-size: 14px;color: dimgrey">Enter your class code here</p>
                    <input type="text" class="form-control" id="usr" style="width: 100px;height: 26px;font-size: 10px">
                    <button class="btn" style="background: #244892;color: white;border-radius: 15px;width: 130px;height: 28px; font-size: 11px;margin-left: 5px">JOIN CLASSROOM</button>
                  </div>       
          </div></div></div>
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up">
          <img src="{{asset('user/img/home_child.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" style="padding: 60px!important;">
            <div>
            <p class="l-0"style="font-size: 25px">ගෙදර ඉදන් ඉගෙනගන්න</p>
            <p class="p-0 m-0" style="color: #244892;font-size: 50px;line-height: 1">#Stay Home</p>
            <p class="p-0 m-0 " style="color: #ffc928;font-size: 60px;line-height: 1 ">Study Well</p>
            
          </div>
          <div style="padding-top: 50px">
              <p class=""style="font-size: 20px ">Register for now free account as a...</p>
              <a href="/register" class="btn-get-started scrollto yellowcol">Teacher</a>
              <a href="#" class="btn-get-started scrollto yellow">Student</a>
            </div>
        </div>
      </div>
    </div>

</section>

<main id="main">

    <!-- ======= About Section ======= -->
<section id="about" class="features" style="background: #e8eaf6!important;margin: 10px!important">
      <div class="container p-4">
          <div class="section-title" data-aos="fade-left">
          <h2 style="color: #244892  ">How to use</h2>
          
        </div>
        <div class="row">
          
          <div class="col-lg-6 col-sm-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
              <div class="row">
                  <p style="text-align: left!important;color: slateblue">FOR TEACHERS</p>
                <div class="list-wrapper">

                <div class="red-line"></div>

                <div class="list-item-wrapper" style="margin-top: 0!important;margin-bottom: 10px!important">
                    <div class="list-bullet">1</div>
                    <div class="list-item">
                        <div class="list-title">Sign up and create a new account</div>
                        <div class="list-text"></div>
                    </div>
                </div>

                <div class="list-item-wrapper">
                    <div class="list-bullet">2</div>
                    <div class="list-item">
                        <div class="list-title">Create your classroom and do your daily activities for  your students<br><br>Subject knowledge <br>Assignments      Analytics<br>Analytics <br><br>(Mark the date and timetable and give the students a work or homework / video, text or hand-written photo that can be uploaded) </div>
                        <div class="list-text"></div>
                    </div>
                </div>

                <div class="list-item-wrapper">
                    <div class="list-bullet">3</div>
                    <div class="list-item">
                        <div class="list-title">Look at the students' answer sheets and respond them</div>
                        <div class="list-text"></div>
                    </div>
                    <div class="white-line2"></div>
                </div>
    
                </div>
              </div>  
          </div>
            <div class="col-lg-6 col-sm-6" data-aos="zoom-in">
            <img src="{{asset('user/img/Teacher.png')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
</section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
<section id="features" class="features" style="margin: 10px!important">
     <div class="container p-4">
          <div class="section-title" data-aos="fade-up">
          
        </div>
        <div class="row">
          <div class="col-lg-6 col-sm-6" data-aos="zoom-in">
            <img src="{{asset('user/img/Student.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 col-sm-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
              <div class="row">
                  <p style="text-align: ;color: slateblue;margin-left: 2px;">FOR STUDENT</p>
                <div class="list-wrapper">

                <div class="red-line"></div>

                <div class="list-item-wrapper" style="margin-top: 0!important;margin-bottom: 10px!important">
                    <div class="list-bullet">1</div>
                    <div class="list-item">
                        <div class="list-title">Either select your school or get your classroom code from your class teacher directly and enter your class</div>
                        <div class="list-text"></div>
                    </div>
                </div>

                <div class="list-item-wrapper">
                    <div class="list-bullet">2</div>
                    <div class="list-item">
                        <div class="list-title">In relation to the subjects presented by the teachers in charge of your subject <br><br>Learn lessons<br>            Get assignments</div>
                        <div class="list-text"></div>
                    </div>
                </div>

                <div class="list-item-wrapper">
                    <div class="list-bullet">3</div>
                    <div class="list-item">
                        <div class="list-title">Sign up, Write the answers and send it to the teacher</div>
                        <div class="list-text"></div>
                    </div>
                    <div class="white-line2"></div>
                </div>
    
                </div>
              </div>  
          </div>
            
        </div>

      </div>
</section><!-- End Features Section -->

      
      
<section id="features" class="features" style="background: #e8eaf6!important">
        <div class="container">
        
        <div class="col-lg-12" style="border-radius: 10px;background-image: url(user/img/dot_background-1.png);border-radius: 10px">
            <p style="text-align: center;padding: 20px;color: white;font-size: 20px">Get your monthly evaluation and term test papers<button class="btn yellowcol" style="color: white;border-radius: 5px;width: 80px;font-size: 15px;margin-left: 15px!important;color: black!important;height: 30px;font-weight: 400;padding: 2px">Go➞</button></p>
            
            </div>
        </div>
      
</section>  

<section id="contact" class="contat">
  <div class="container">
    <div class="row" style="height: 350px;">
        <div class="col-md-6" style="background-color: #e8eaf6;height: 251px;">
            <div class="intro">
                <h2 class="text-right d-lg-flex justify-content-lg-end" style="color: #2f3382;font-family: 'Alegreya Sans SC', sans-serif;margin: 31px;padding: -21px;height: 7px;">If you have any questions?</h2>
                <h2 class="text-right d-lg-flex justify-content-lg-end" style="color: #2f3382;margin: 36px;font-size: 43px;height: 30px;">PLEASE CALL US</h2>
                <h2 class="display-1 text-right d-lg-flex justify-content-lg-end align-items-lg-start" style="color: #2f3382;font-family: 'Alegreya Sans SC', sans-serif;font-size: 40px;margin: 35px;height: 41px;">071 747 1560</h2>
            </div>
        </div>
        <div class="col-md-6" style="height: 350px;">
            <form method="post">
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
                <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" style="height: 134px;"></textarea></div>
                <div class="form-group" style="width: 400px;"><button class="btn btn-primary" type="submit" style="width: 540px;background-color: #ffc928;color: rgb(0,0,0);font-size: 18px;font-family: 'Alegreya Sans SC', sans-serif;">Submit</button></div>
            </form>
        </div>
    </div>
</div>
</section>
   

  </main><!-- End #main -->
@endsection