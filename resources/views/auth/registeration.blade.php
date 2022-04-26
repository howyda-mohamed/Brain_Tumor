<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ٌRegister</title>
    @livewireStyles
    <link rel="stylesheet" href="{{asset('assets/login/css/doctor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/login/css/all.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Source+Sans+Pro:wght@300;400&display=swap"
      rel="stylesheet">
</head>
<body>
    <livewire:register />

    <script src="{{asset('assets/login/js/login.js')}}"></script>


  <script src="{{asset('assets/login/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/login/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/login/js/bootstrap.bundle.min.js')}}"></script>
  @livewireScripts
</body>
</html>
