<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>{{ $nome }} - {{ $cognome }}</h1>

    <ul>
        @foreach ($listastudenti as $studente)
            @if ($loop->first)
                <li>***{{$studente}}</li>
            @else
                <li>{{$studente}}</li>
            @endif
        @endforeach
    </ul>

</body>
</html>


