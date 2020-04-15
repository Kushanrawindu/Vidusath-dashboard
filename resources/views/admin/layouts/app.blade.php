<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    @include('admin.layouts.head')
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('admin.layouts.header')
                @include('admin.layouts.sidebar')
            </div>
          </div>
          @include('admin.layouts.topnav')
          <div class="right_col" role="main">
            @section('main-content')
        
            @show
          </div>
          @include('admin.layouts.footer')
        </div>
    </div>

    @include('admin.layouts.jquery')
    
</body>
</html>