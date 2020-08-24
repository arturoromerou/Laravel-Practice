<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(false)
        <h1>Hola {{ $name }} {{ $last_name }}</h1>
    @else
        <h1>else</h1>
    @endif

    @foreach($array as $v)
        <p>{{ $v }}</p>
    @endforeach

    @while($number <= 10)
        <p>{{ $number + 1 }}</p>
    @endwhile
</body>
</html>