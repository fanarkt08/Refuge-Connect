@extends('layouts.app')

@section('title', 'Détails')

@section('content')
    <section>
        <article class="animal-details">
            <h1>{{ $animal->name }} modifié</h1>
            <div class="animal-info">
                <img src="{{ asset('images/animals/' . $animal->photo) }}" alt="{{ $animal->name }}">
                <div>
                    <h2>Espèce : {{ $animal->species }}</h2>
                    <h2>Age : {{ $animal->age }} ans</h2>
                    <h2>{{ $animal->description }}</h2>
                </div>
            </div>
        </article>
    </section>
@endsection
