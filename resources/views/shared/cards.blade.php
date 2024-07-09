<section class="p-5">
    <div class="container">
        <h2 class="py-3">Lista film</h2>
        <div class="content">
            {{-- uso for each per richiamare tutti i record delle colonne della tabella 'movies' --}}
            @foreach ($movies as $movie)
                <ul class="list-unstyled">
                    <li>
                        <div>Titolo: {{ $movie->title }}</div>
                        <div>Titolo originale: {{ $movie->original_title }}</div>
                        <div>Nazione: {{ $movie->nationality }}</div>
                        {{-- per creare un data leggibile uso libreria carbon --}}
                        {{ \Carbon\Carbon::parse($movie->date)->format('d/m/Y') }}
                        <div>Voto: {{ $movie->vote }}</div>
                    </li>
                    <hr>
                </ul>
                </ul>
                </ul>
            @endforeach
        </div>
    </div>
</section>
