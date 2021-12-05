<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    my very first text in php laravel @foreach ( $names as $name)
    <div>
        name : {{$name['firstName']}}
        family : {{$name ['lastName']}}
    </div>
    @endforeach
</div>
</body>
</html>
