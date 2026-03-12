@props(['name', 'species', 'age', 'description', 'photo', 'detailsRoute' => null])

<article {{ $attributes }}>
    @if($detailsRoute)
        <a href="{{ $detailsRoute }}">
            <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
        </a>
    @endif

    <h1>{{ $name }}</h1>
    <div class="animal-info">
        @if(!$detailsRoute)
            <img src="{{ asset('images/animals/' . $photo) }}" alt="{{ $name }}">
        @endif
        <div>
            <h5>Espèce : {{ $species }}</h5>
            <h5>Age : {{ $age }}</h5>
            <h5>{{ $description }}</h5>
        </div>
        {{ $slot }}
    </div>
</article>