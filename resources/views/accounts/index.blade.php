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
    @extends('layouts.app')

    @section('content')
        @foreach ($accounts as $item)
            <p>Name: {{$item->userName}} and Password: {{$item->password}}</p>
        @endforeach
    @endsection
</body>
</html>