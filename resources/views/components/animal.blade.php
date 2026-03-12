<article {{ $attributes }}> 
    <a href="animaux/{{ $id }}">
        <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
    </a>
    <h2 class="animal-name">{{ $name }}</h2>
    <p>Espèce : {{ $species }}</p>
    <p>Age : {{ $age }} ans</p>
    <p>{{ $description }}</p>
    <div class="animal-actions">
        <a href="{{ route('animals.edit', $id) }}"><p>Modifier</p></a>
        <a href="{{ route('animals.delete', $id) }}"><p>Supprimer</p></a>
    </div>
</article>