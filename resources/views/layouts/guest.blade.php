<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Rivers State Certificate of Origin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <!-- Scripts -->


        <!-- Styles -->
        @livewireStyles
        <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">
        <!-- vendor css -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

        <!-- Bracket CSS -->
        <link rel="stylesheet" href="{{asset('css/steps.css')}}">
        <link rel="stylesheet" href="{{asset('css/bracket.css')}}">

        <style>
            /* Add your custom CSS styles here */
            .header {
                text-align: center;
                padding: 20px;
                font-size: 30px;
                font-weight: bold;
                color: #ffffff;
            }
        </style>
        @yield('styles')
    </head>
    <body class="bg-br-primary">
        {{ $slot }}
        @livewireScripts
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            Livewire.on('alert', param => {
                toastr[param[0]['type']](param[0]['message']);
            });
        </script>
    </body>
</html>
