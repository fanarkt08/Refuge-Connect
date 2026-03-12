<article>
    <h1>{{ $name }}</h1>
    <p>Espèce : {{ $species }}</p>
    <p>Age : {{ $age }}</p>
    <p>{{ $description }}</p>
    <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
</article>