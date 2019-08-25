<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Css Files Start -->
    <link href="/production/css/bootstrap.min.css" rel="stylesheet">
    <link href="/production/css/custom.css" rel="stylesheet">
    <link href="/production/css/color.css" rel="stylesheet">
    <link href="/production/css/responsive.css" rel="stylesheet">
    <link href="/production/css/owl.css" rel="stylesheet">
    <link href="/production/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/production/css/icon-fonts.css" rel="stylesheet">
    <link rel="icon" href="images/titleicon.png" type="image/png">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}



{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Js Files Start Here -->
    <script src="/production/js/jquery.min.js"></script>
    <script src="/production/js/bootstrap.min.js"></script>
    <script src="/production/js/owl.carousel.min.js"></script>
    <script src="/production/js/imagesloaded.pkgd.js"></script>
    <script src="/production/js/isotope.pkgd.min.js"></script>
    <script src="/production/js/custom.js"></script>
</body>
</html>
