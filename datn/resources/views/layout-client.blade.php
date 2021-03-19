<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tạp hoá Chúc An</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/client/images/favicon/favicon.png')}}" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/client/css/vendor/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/responsive.min.css')}}">
</head>

<body>

    <div id="main">
        @include('client/layout/header')
        @yield('content')
        @include('client/layout/footer')
    </div>

    <script src="{{asset('assets/client/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/client/js/main.js')}}"></script>
</body>

</html>