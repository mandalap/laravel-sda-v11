<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FavIcon -->
    <link rel="icon" href="{{ asset('assets/images/icons/logo.svg') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('vendor/fancybox/fancybox.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="{{ asset('vendor/select2/css/select2.min.css') }}" rel="stylesheet">


    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    <div id="Content-Container"
        class="relative flex flex-col w-full max-w-[640px] min-h-screen mx-auto bg-white overflow-x-hidden">

        @yield('content')

        @include('sweetalert::alert')

    </div>

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>


</html>
