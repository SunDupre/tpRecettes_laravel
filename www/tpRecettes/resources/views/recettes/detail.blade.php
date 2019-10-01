@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card bg-light border-secondary">
        <div class="cart-haeder">
            <h5>{{ $recette->titre }}</h5>
        </div>
        <div class="card-body">
            <p><span class="badge badge-secondary">Difficulté</span></p>
            <p class="card-text"> {{ $recette->difficulte }} <span class="fa fa-star"></span></p>
            <p><span class="badge badge-secondary">Ingrédients</span></p>
            <p class="card-text"> {{ $recette->Ingredients }} </p>
            <p><span class="badge badge-secondary">Durée</span></p>
            <p class="card-text"> {{ $recette->duree }} minutes</p>
            <p><span class="badge badge-secondary">Cuisson</span></p>
            <p class="card-text"> {{ $recette->cuisson }} minutes</p>
            <p><span class="badge badge-secondary">Recette</span></p>
            <p class="card-text"> {{ $recette->description }} </p>
        </div>
        <div class="card-footer text-muted">
            <p>mise en ligne le {{ date_format($recette->created_at, "d F Y")  }}</p>
        </div>
    </div>
</div>