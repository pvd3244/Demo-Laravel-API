<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .active{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</body>
</html>