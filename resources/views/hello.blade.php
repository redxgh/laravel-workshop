<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO PAGE</title>
</head>

<body>
    <h1>
        Fruits
    </h1>
    @foreach ($msg as $fruit)
        <h2>This is fruit : {{ $fruit }}</h2>
        <h2>fruits website weeee</h2>
    @endforeach
</body>

</html>
