<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head');

<body class="hold-transition login-page">
    @yield('content')
</body>

</html>