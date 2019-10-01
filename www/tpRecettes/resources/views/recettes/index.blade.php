@extends('layouts.app')

@section('content')

<div class="container">
    <div class="list-group">
        @foreach ($recettes as $recette)
            <div class="list-group-item">
                <h5>{{ $recette->titre}}</h5>
                <p>préparation : {{ $recette->duree }} minutes</p>
                <p>cuisson : {{ $recette->cuisson }} minutes</p>
            </div>
        @endforeach
    </div>
</div>

@endsection
