<!DOCTYPE html>
<html lang="en">

<head>
    @include('helpers/head')
    @stack('head')
</head>

<body>
    @include('helpers/navbar')

    @yield('content')

    @include('helpers/footer')
</body>

</html>
