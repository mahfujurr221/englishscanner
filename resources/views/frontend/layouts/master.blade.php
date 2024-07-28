<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shetab</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/favicon.png') }}" />
    <script src="{{ asset('frontend') }}/js/all.js"></script>
    <link href="{{ asset('frontend') }}/css/montserrat.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend') }}/css/roboto.css" rel="stylesheet" type="text/css" />
    {{-- animation css link --}}
    <link href="{{ asset('frontend') }}/css/aos.css" rel="stylesheet" />
    <!-- Core theme CSS-->
    <link href="{{ asset('frontend') }}/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    
    @include('frontend.layouts.includes.header')

    @include('frontend.layouts.includes.content')

    @include('frontend.layouts.includes.footer')

    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <!--JS-->
    <script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/scripts.js"></script>
    <script src="{{ asset('frontend') }}/js/sb-forms-latest.js"></script>
    <!-- AOS animation js -->
    <script src="{{ asset('frontend') }}/js/aos.js"></script>

    <script>
        AOS.init();
        document.addEventListener("DOMContentLoaded", function() {
            var loader = document.getElementById('loader-wrapper');
            window.addEventListener('load', function() {
                loader.style.display = 'none';
            });
        });
    </script>

</body>

</html>