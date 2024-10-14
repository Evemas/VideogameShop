<x-main>
    <x-slot name='title'>
        console - Videogameshop
    </x-slot>
    
    <div class="pt-md-5 mt-md-5">
        <div class="row">
            
            {{-- ricerca per genere --}}
            <div class="col-md-2 d-flex justify-content-center">
                <div class="p-3">
                    <h5>Genere:</h5>
                    <ul class="list-unstyled">
                        @foreach($genres as $genre)
                        <li class="form-check">
                            <input type="radio" id="genre-{{ $genre['slug'] }}" name="genre" value="{{ $genre['slug'] }}" class="form-check-input" style="accent-color: #ae6def;">
                            <label for="genre-{{ $genre['slug'] }}" class="form-check-label">{{ $genre['name'] }}</label>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            {{-- risultati videogames --}}
            <div class="col-md-9">
                <div class="row">
                    @foreach($games as $game)
                    <div class="col-md-3 my-3">
                        <div class="card">
                            <img src="{{ $game->image }}" class="card-img-top img" alt="{{ $game->title }} cover">
                            <img src="/images/{{ $console }}_logo.png" class="platform-logo" alt="{{ $console }} logo">
                            <div class="card-body">
                                <p class="card-title"><strong>{{ $game->title }}</strong></p>
                                <p class="card-text">49,90€</p>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-cart">Aggiungi al carrello</a>
                                    <a href=""><i class="fa-regular fa-heart ms-md-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- paginazione - fuori dal div dei videogiochi --}}
        <div class="container-fluid d-flex justify-content-center my-5">
            @if($page > 1)
                <a href="{{ route('console.games', ['console' => $console, 'page' => $page - 1]) }}" class="text-decoration-none text-dark mx-3"><- Precedente</a>
            @endif
            @if(isset($games['next']))
                <a href="{{ route('console.games', ['console' => $console, 'page' => $page + 1]) }}" class="text-decoration-none text-dark mx-3">Successivo -></a>
            @endif
        </div>

    </div>
</x-main>
