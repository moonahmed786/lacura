<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo/favicon.png')}}" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
    <title>{{$page_title}} | {{$general->sitename}}</title>
    <style type="text/css">
        .message-box{
            position: relative;
            min-width: auto;
            min-height: auto;
            background-color: #fff;
            -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
            box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
            -webkit-perspective: 800px;
            perspective: 800px;
            -webkit-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }
        .font{
            font-size: 20px;
            margin: 20px;
        }
    </style>

</head>
<body>
<section class="material-half-bg">
    <div class="cover" style="background-color: #{{$general->color}};"></div>
</section>
<section class="login-content" style="background-color: #{{$general->color}};">
    <div class="logo">
        <h1>
        <img style="max-width: 160px;" src="{{asset('assets/images/logo/logo.png')}}" alt="logo image">
        </h1>
    </div>
    <div class="message-box">
       <div class="alert alert-success font">{{$message}}</div>
    </div>
</section>
<!-- Essential javascripts for application to work-->
<script src="{{asset('assets/admin/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('assets/admin/js/pace.min.js')}}"></script>

</body>
</html>
