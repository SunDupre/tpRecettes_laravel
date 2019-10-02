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
            @auth
                <div class="d-flex justify-content-around">
                    <a class="btn btn-uotline-info" href="{{ URL::to('recettes/'. $recette->id.'/edit') }}">Modifier</a>
                    <form action="/recettes/{{ $recette->id }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</div>