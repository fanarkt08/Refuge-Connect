<header>
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Refuge Connect" class="logo">
    </a>

    <nav>
        <a href="{{ route('home') }}">
            <p>Accueil</p>
        </a>
        <a href="{{ route('animals.create') }}">
            <p>Ajouter un animal</p>
        </a>
    </nav>
</header>