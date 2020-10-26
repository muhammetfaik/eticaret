<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>    
    <title>@yield('title',config('app.name'))</title>
    @include('layout.partials.head')
    @yield('head')
</head>

<body id="commerce">
@include('layouts.partials.navbar')
@yield('content')
@include('layouts.partials.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('footer')
</body>

</html>