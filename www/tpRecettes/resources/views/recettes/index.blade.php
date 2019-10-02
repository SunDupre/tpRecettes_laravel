@extends('layouts.app')

@section('content')

<div class="container">
    <div class="list-group">
        @foreach ($recettes as $recette)
            <a class="list-group-item list-iten-action" href="{{ URL::to('recettes/'. $recette->id) }}">
                <h5>{{ $recette->titre}}</h5>
                <p>préparation : {{ $recette->duree }} minutes</p>
                <p>cuisson : {{ $recette->cuisson }} minutes</p>
            </a>
        @endforeach
    </div>
</div>

@endsection
