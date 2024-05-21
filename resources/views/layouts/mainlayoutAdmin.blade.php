<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | @yield('title')</title>


    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">


    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    @vite('resources/css/app.css')

    {{-- sweetalert --}}



</head>

<body class="bg-white dark:bg-gray-900">
    @include('components.admin.sidebarAdmin')
    @include('components.admin.navbarAdmin')
    @yield('content')



    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}


    @include('sweetalert::alert')


</body>

</html>
