@extends('layouts.app')

@section('title', 'Détails')

@section('content')
<section>
    <x-animal class="animal-details"
        :name="$animal->name"
        :species="$animal->species"
        :age="$animal->age"
        :description="$animal->description"
        :photo="$animal->photo"
    >
    </x-animal>
</section>
@endsection