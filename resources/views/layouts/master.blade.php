<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.meta')
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{ asset('./css/thuvien.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('./css/main.min.css') }}">
    @yield('style')
</head>
<body>
    <div class="wrap">
        @include('include.topnav')
        @yield('content')
        @include('include.footer')
        @include('include.contact')
    </div>

   <script src="{{ asset('./js/thuvien.min.js') }}"></script>
   <script src="{{ asset('./js/main.min.js') }}"></script>
</body>
</html>