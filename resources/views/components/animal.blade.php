<article {{ $attributes }}> 
    <a href="animaux/{{ $id }}">
        <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
    </a>
    <p class="animal-name">{{ $name }}</p>
    <p>Espèce : {{ $species }}</p>
    <p>Age : {{ $age }} ans</p>
    <p>{{ $description }}</p>
    <div class="animal-actions">
        <a href="{{ route('animals.edit', $id) }}"><p>Modifier</p></a>
        <a href="{{ route('animals.delete', $id) }}"><p>Supprimer</p></a>
    </div>
</article>