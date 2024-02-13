<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/favicon.ico') }}"
                alt="..." />VALSTEN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars ms-1"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-5 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/village-arts') }}">Village des Arts</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/loisirs') }}">Loisirs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/sport') }}">Sports</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/technologie-numerique') }}">Technologiedu
                        Numerique</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">A Propos</a></li>
                <li class="nav-item"><a class="nav-link" href="/#team">Equipes</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Acceuille</a>
                        </li>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Connexions</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">S'enregistrer</a></li>
                        @endif
                    @endauth
                </div>
            </ul>
        </div>
    </div>
</nav>
