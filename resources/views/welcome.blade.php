@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<section>
    <h1 class="title">Nos animaux</h1>
    <div class="animals">
        @foreach($animals as $animal)
            <article class="animal-home">
                <a href="{{ route('animals.details', $animal->id) }}">
                    <img src="{{ asset('images/animals/' . $animal->photo) }}" alt="{{ $animal->name }}">
                </a>
                <h1>{{ $animal->name }}</h1>
                <h5>Espèce : {{ $animal->species }}</h5>
                <h5>Age : {{ $animal->age }}</h5>
                <h5>{{ $animal->description }}</h5>
                <div class="animal-actions">
                    <a href="{{ route('animals.edit', $animal->id) }}"><h5>Modifier</h5></a>
                    <a href="{{ route('animals.delete', $animal->id) }}"><h5>Supprimer</h5></a>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection