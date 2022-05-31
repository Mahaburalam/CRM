<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digicon CRM</title>
    <!-- bootstarp link file -->
    <link rel="stylesheet" href="{{ asset('agent/css/bootstrap.min.css')}}">

    <!-- favicon/logo icon -->
    <link rel="icon" type="images" href="{{ asset('agent/images/digicon.jpeg')}}">
  
    <!-- custome css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('agent/css/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('agent/css/nav_style.css')}}"> -->
   
    <!-- Fonts  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('agent/fonts/poppins.css')}}"> 
   
</head>

<body>
   
    <!-- Main Area Start-->
    <main>
       
    @include('agent.body.header')
    
 
    @yield('agent')
    
    
    @include('agent.body.footer')

</main>
    <!-- Main Area End-->
  
    <!-- js link file -->
    <script src="{{ asset('agent/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('agent/js/bootstrap.min.js')}}"></script>
</body>

</html>