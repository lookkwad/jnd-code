<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('layouts/header')
    @yield('style')
</head>
<body>
    @yield('content')
    @include('layouts/footer')
    @yield('script')
</body>
</html>
