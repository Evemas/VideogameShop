<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ asset('images/logo_videogameshop.png') }}" alt="Logo" class="img-fluid ms-md-3" width="15%">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav mx-auto"> 
                    <a class="nav-link mx-md-2" href="{{route('console.games', ['console' => 'ps5'])}}"><strong>Playstation 5</strong></a>
                    <a class="nav-link mx-md-2" href="{{route('console.games', ['console' => 'xbox'])}}"><strong>XBOX</strong></a>
                    <a class="nav-link mx-md-2" href="{{route('console.games', ['console' => 'nintendo_switch'])}}"><strong>Nintendo Switch</strong></a>
                    <a class="nav-link mx-md-2" href="{{route('console.games', ['console' => 'pc'])}}"><strong>PC</strong></a>
                </div>
        </div>
        <div>
            <p class="me-md-5">registrati/login</p>
        </div>
    </nav>
</div>