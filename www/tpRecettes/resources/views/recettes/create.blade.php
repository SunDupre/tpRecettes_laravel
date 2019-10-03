@extends('layouts.app')

@section('content')
@section('dynamicPageTitle', 'Création nouvelle recette - ')
    
<div class="container">
    <div class="row">
        <div class="col-sm12 d-flex justify-content-center">
            <h1>Création d'une nouvelle recette</h1>
        </div>
        <div class="offset-2 col-sm-8">
            <form action="/recettes" method="POST">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Le formulaire contien des erreurs
                </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" placeholder="Titre" value="{{ old('titre')}}">
                    @error('titre')
                        <span class="text-danger help-block">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingrédients</label>
                    <textarea type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" aria-label="Liste des ingredients et quantité" value="{{ old('ingredients') }}"></textarea>
                    @error('ingredients')
                        <span class="text-danger help-block">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="duree">Temps de préparation (min)</label>
                    <input type="number" class="form-control @error('duree') is-invalid @enderror" id="duree" name="duree" placeholder="duree" value="{{ old('duree')}}">
                    @error('duree')
                        <span class="text-danger help-block">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cuisson">Temps de cuisson (min)</label>
                    <input type="number" class="form-control @error('cuisson') is-invalid @enderror" id="cuisson" name="cuisson" placeholder="cuisson" value="{{ old('cuisson')}}">
                    @error('cuisson')
                        <span class="text-danger help-block">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="difficulte">Difficulté</label>
                    <input type="number" class="form-control @error('difficulte') is-invalid @enderror" id="difficulte" name="difficulte" placeholder="difficulte" value="{{ old('difficulte')}}">
                    @error('difficulte')
                        <span class="text-danger help-block">{{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Recette</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" aria-label="Comment cuisiner cette recette" value="{{ old('description')}}"></textarea>
                    @error('description')
                        <span class="text-danger help-block">{{ $message }} </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-default">Créer recette</button>
            </form>
        </div>
    </div>
</div>

@endsection