<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, shrink-to-fit=n">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" Content="{{ $general->sitename }}">
    <meta name="author" content="{{ $general->sitename }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R1H7N5CV2Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-R1H7N5CV2Q');
    </script>

    @yield('SEO')
    @yield('facebook')
    @yield('titulo')
    <base href="/">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/x-icon">
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script>new WOW().init();</script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/structure.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/highlight/styles/monokai-sublime.css')}}" rel="stylesheet" type="text/css"/>
{{--    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>--}}
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/sweetalerts/sweetalert.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/Custom%20csss.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" type="text/css"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('/assets/css/toastr/toastr.min.css')}}">--}}
    <!-- fontawesome icon  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}">

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{asset('assets/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/datatables.css")}}">

    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/plugins/table/datatable/dt-global_style.css")}}">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets/admin/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/starrr.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/album.css')}}">
    <link href="{{asset('assets/plugins/jquery-ui/jquery-ui.min.css')}}/" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        #demo_vertical::-ms-clear, #demo_vertical2::-ms-clear { display: none; }
        input#demo_vertical { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
        input#demo_vertical2 { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
    </style>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @yield('style')
@yield('header')
    @stack('style-lib')
    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        .layout-px-spacing {
            min-height: calc(100vh - 184px) !important;
        }

    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="sidebar-noneoverflow">

@if(!Auth::guest())
<!--  BEGIN TOPBAR  -->
@if( request()->route()->getName() != 'user.faq.index' && request()->route()->getName() != 'menu.index.front' )

@include('user.inc.header')
<!--  END TOPBAR  -->
@endif
@endif
<!--  BEGIN CONTENT AREA  -->
<div id="app" >

@yield('content')
</div>
<!--  END CONTENT AREA  -->



<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-drawr/jquery.drawr.combined.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-drawr/jquery.drawr.combined-min.js')}}"></script>


<script src="{{asset('assets/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalerts/custom-sweetalert.js')}}"></script>


<script src="{{url('/')}}/assets/front/js/jquery.js"></script>
<script src="{{ asset('assets/front/js/moment.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/front/js/lang/datepicker-'. Session::get('lang') .'.js') }}"></script>

<script src="{{ asset('js/sweetalert.min.js')}}"></script>
<script src="{{ asset('js/toastr/toastr.min.js')}}"></script>

<script src="{{asset('assets/front/js/starrr.js')}}"></script>
<script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>

<script src="{{url('/')}}/assets/vue/vue.js"></script>

<script src="{{url('/')}}/assets/vue/axios.js"></script>
{{--<script src="{{url('/')}}/assets/front/js/main.js"></script>--}}

<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>




<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

@if (Session::has('message'))

    <script type="text/javascript">
        $(document).ready(function() {
            swal("{{ __(Session::get('message')) }}", "", "success");
        });
    </script>
@endif

@if (Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            swal("{{ __(Session::get('success')) }}", "", "success");
        });
    </script>
@endif

@if (Session::has('alert'))
    <script type="text/javascript">
        $(document).ready(function() {
            swal("{{ __(Session::get('alert')) }}", "", "warning");
        });
    </script>
@endif
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('assets/plugins/highlight/highlight.pack.js')}}"></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN THEME GLOBAL STYLE -->
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
<!-- END THEME GLOBAL STYLE -->
<script src="{{asset('assets/js/custom.js')}}"></script>

@yield('script')

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo8/starter_kit_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 13:10:55 GMT -->
</html>
