<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/admin/plugins/images/favicon.png')}}">
    <title>Trang quản trị - hệ thống quản lý bán hàng tạp hoá Chúc An</title>
    <link href="{{asset('assets/admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link
        href="{{asset('assets/admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
        rel="stylesheet">
    <link href="{{asset('assets/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}" -->

</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        @include('admin/layout/header')
        @include('admin/layout/sidebar')
        @yield('content')
        @include('admin/layout/footer')
       
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
    <script src="{{asset('assets/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/admin/js/waves.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dashboard1.js')}}"></script>
    <script src="{{asset('assets/admin/js/filterSort.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
    
</body>

</html>