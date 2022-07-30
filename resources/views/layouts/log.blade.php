<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asset MS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{url('back/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('back/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('back/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('back/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('back/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{url('back/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        body{
            background-image: url("back/images/tz.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            /* width: 100%; */
            /* height: 100%; */
        }
    </style>
</head>

<body>
    
   @yield('content')
    <script src="{{url('back/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('back/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('back/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('back/assets/js/main.js')}}"></script>   
</body>

</html>
