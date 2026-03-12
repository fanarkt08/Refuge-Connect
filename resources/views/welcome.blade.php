@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<section>
    <h1 class="title">Nos animaux</h1>
    <div class="animals">
        @foreach($animals as $animal)
            <x-animal class="animal-home"
                :name="$animal->name"
                :species="$animal->species"
                :age="$animal->age"
                :description="$animal->description"
                :photo="$animal->photo"
                :detailsRoute="route('animals.details', $animal->id)"
            >
                <div class="animal-actions">
                    <a href="{{ route('animals.edit', $animal->id) }}"><h5>Modifier</h5></a>
                    <a href="{{ route('animals.delete', $animal->id) }}"><h5>Supprimer</h5></a>
                </div>
            </x-animal>
        @endforeach
    </div>
</section>
@endsection