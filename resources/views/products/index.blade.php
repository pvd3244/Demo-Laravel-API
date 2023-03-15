<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Title: {{ $title }}</h2>
    @if ($x > 5)
        <h2>{{ $x }} lon hon 5</h2>
    @endif
    @foreach ($arr as $key => $val)
        <h2>{{ $key }} => {{ $val }}</h2>
    @endforeach
    <div class="header">
        <h1>This is Header</h1>
    </div>
    <div class="footer">
        <h1>This is Footer</h1>
    </div>
</body>
</html>