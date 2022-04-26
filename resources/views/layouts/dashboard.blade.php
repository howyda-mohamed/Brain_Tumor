<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.includes.styles')
</head>

<body>


    @include('dashboard.includes.navbar')



    @include('dashboard.includes.sidebar')



    @yield('content')


    @include('dashboard.includes.script')
</body>

</html>
