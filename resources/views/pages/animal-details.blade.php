@extends('layouts.app')

@section('title', 'Détails')

@section('content')
<article class="animal-details">
    <h1>{{ $animal->name }}</h1>
    <div class="animal-info">
        <img src="{{ asset('images/animals/' . $animal->photo) }}" alt="{{ $animal->name }}">
        <div>
            <p>Espèce : {{ $animal->species }}</p>
            <p>Age : {{ $animal->age }}</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
</article>
@endsection