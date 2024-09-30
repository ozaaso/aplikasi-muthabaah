<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI MUTABA'AH </title>



    <!-- design css -->
    @yield('css')





</head>
<body>
<!-- Tab navbar -->
@include('layout.navbar')

@yield('content')

@include('layout.tab')

<!-- tab js -->

@yield('js')

</body>
</html>
