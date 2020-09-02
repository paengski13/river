<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="https://weareriver.nz/favicon.png" type="image/png">
    
    <title>River</title>
    
    {{-- River assets  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div id="page-content">
    @yield('content')
</div>

@include('layouts.footer')
</body>

<script src="{{ asset('js/app.js') }}"></script>

@stack('script')
</html>
