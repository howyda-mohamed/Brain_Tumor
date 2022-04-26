<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/login/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/login/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/login/css/welcomeback.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap"
        rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script src="{{asset('assets/login/js/jquery-3.6.0.min.js')}}"> </script>
        <script src="{{asset('assets/login/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/login/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/login/js/welcome.js')}}"></script>
    </body>
</html>
