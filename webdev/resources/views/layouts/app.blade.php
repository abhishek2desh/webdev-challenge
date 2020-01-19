<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            padding: 2rem 0rem;
        }
    </style>
</head>

<body>
    <div id="app">
        @include('nav')

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    <script>
        (function() {

            setTimeout(function() {
                $(document).ready(function() {
                    $('#card-nav-list a').on('click', function(e) {
                        e.preventDefault()
                        $(this).tab('show')
                    });
                    $('#bologna-list a').on('click', function(e) {
                        e.preventDefault()
                        $(this).tab('show')
                    })
                });
            },1000);

        })();
    </script>
</body>

</html>