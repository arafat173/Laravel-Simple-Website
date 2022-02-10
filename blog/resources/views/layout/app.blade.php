<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"></link>
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}"></link>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    
</head>
<body>
  @include('layout.menu') 

  
  @yield('content')



  @include('layout.footer') 
  <script src="{{URL::asset('js/jquery-3.4.1.slim.min.js')}}"></script>
  <script src="{{URL::asset('js/popper.min.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/custom.js')}}"></script>
</body>
</html>