<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    @include('frontend.layouts.head')
</head>
<body>
    @include('frontend.layouts.header')

    @section('main-content')
        
    @show

    @include('frontend.layouts.footer')

    @include('frontend.layouts.jquery')
</body>
</html>