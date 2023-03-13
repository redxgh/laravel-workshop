<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <div class="container">
        {{ $true = false }}

        @for ($i = 0; $i <= 10; $i++)
            <p>
                number : {{ $i }}
            </p>
        @endfor
        @if ($true)
            <h1>true</h1>
        @else
            <h1>false</h1>
        @endif
        <h1>Contact page</h1>
        <h2>{{ $comp }}</h2>
        <h2>
            our mail : {{ $mail }}
        </h2>
        <h2>
            our phone : {{ $phone }}
        </h2>
        <button onclick="console.log('clicking the button')">
            click me bro
        </button>
    </div>
</body>

</html>
