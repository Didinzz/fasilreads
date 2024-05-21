<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasilReads | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('faviconnsss.ico') }}">


    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
     {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    @vite('resources/css/app.css')


</head>

<body  class="bg-white dark:bg-gray-900">
    @include('components.user.navbarUser')  
    @yield('content')
    @include('components.user.footerUser')

    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>

</body>

</html>
