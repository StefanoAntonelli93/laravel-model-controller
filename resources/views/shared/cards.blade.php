<section class="p-5">
    <div class="container">
        <h2 class="py-3">Lista film</h2>
        <div class="content">
            {{-- uso for each per richiamare tutti i record delle colonne della tabella 'movies' --}}
            @foreach ($movies as $movie)
                <ul class="list-unstyled">
                    <li>
                        <h3>{{ $movie->title }}</h3>
                        <a href="{{ route('movie', ['id' => $movie->id]) }}">
                            <div>Scheda completa</div>
                        </a>
                    </li>
                    <hr>
                </ul>
                </ul>
                </ul>
            @endforeach
        </div>
    </div>
</section>
