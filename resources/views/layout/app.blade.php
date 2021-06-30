<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-grid.main.css" rel="stylesheet">
    <link href="css/bootstrap-grid.main.css.map" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet"> -->
    </head>
<body>
    @include('layout.nav')
    @yield('content')
</body>
</html>