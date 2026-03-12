@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h1>Nos animaux</h1>
<div class="animals">
    @foreach($animals as $animal)
        <x-animal class="animal-home"
            :id="$animal->id"
            :name="$animal->name"
            :species="$animal->species"
            :age="$animal->age"
            :description="$animal->description"
            :photo="$animal->photo"
        >
        </x-animal>
    @endforeach
</div>
@endsection