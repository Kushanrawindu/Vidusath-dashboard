<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    @include('user.layouts.head')
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('user.layouts.header')
                @include('user.layouts.sidebar')
            </div>
          </div>
          @include('user.layouts.topnav')
          <div class="right_col" role="main">
            @section('main-content')
        
            @show
          </div>
          @include('user.layouts.footer')
        </div>
    </div>

    @include('user.layouts.jquery')
    
</body>
</html>