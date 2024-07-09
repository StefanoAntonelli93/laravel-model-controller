<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>

    <h1>{{ $movie->title }}</h1>
    <div>Titolo originale: {{ $movie->original_title }}</div>
    <div>Nazione: {{ $movie->nationality }}</div>
    {{-- per creare un data leggibile uso libreria carbon (namespace) --}}
    {{ \Carbon\Carbon::parse($movie->date)->format('d/m/Y') }}
    <div>Voto: {{ $movie->vote }}</div>
    <a href="{{ route('welcome') }}">Torna ai film</a>

</body>

</html>
