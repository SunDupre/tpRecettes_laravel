<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recette;

use Illuminate\Support\Facade\Auth;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer toutes les recettes
        // $recettes = Recette::all();

        // Récupérer toutes les recettes et les stocker dans une variable
        $recettes = Recette::orderBy("created_at", "desc")->simplePaginate(3);
        
        return view('recettes.index')->with('recettes' , $recettes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recettes.create');
    }

    /**
     * Recherche par mots cléf
     */
    public function search(Request $request)
    {
        // Récupérer le mot clé
        $search = $request->input("search");

        //chercher les recettes qui matchent le mot clé
        $recette = Recette::where("titre", "like", "%$search%")
                            ->orWhere("ingredients", "like", "%$search%")
                            ->orWhere("description", "like", "%$search%")
                            ->orderBy("created_at", "desc")->simplePaginate(3);

        // Envoyer les recettes vers la vue <index class="blade php
        return view('recette.index')->with('recettes', $recettes);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'titre' => 'required|max:200',
            'ingredients' => 'required|max:255',
            'duree' => 'required|integer',
            'cuisson' => 'required|integer',
            'difficulte' => 'required|integer|between:1,5',
            'description' => 'required|max:255'
        ]);

        $recette = new Recette($request->all());
        
        //Peut être enlever en cas de mass assigation
        $recette->titre = $request->input("titre");
        $recette->ingredients = $request->input("ingredients");
        $recette->duree = $request->input("duree");
        $recette->cuisson = $request->input("cuisson");
        $recette->difficulte = $request->input("difficulte");
        $recette->description = $request->input("description");

        //Retrouve le user id et le met dans la recette
        $recette->user_id = Auth::id();

        $recette->save();

        //Rediriger vers la page d'accueil
        return redirect('/recettes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recette = Recette::find($id);
        return view('recettes.detail')->with('recette' , $recette);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $recette = Recette::find($id);
        return view('recettes.edit')->with('recette' , $recette);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valider les données
        $request->validate([
            'titre' => 'required|max:200',
            'ingredients' => 'required|max:255',
            'duree' => 'required|integer',
            'cuisson' => 'required|integer',
            'difficulte' => 'required|integer|between:1,5',
            'description' => 'required|max:255'
        ]);

        $recette = Recette::find($id);
        
        //Peut être enlever en cas de mass assigation
        $recette->titre = $request->input("titre");
        $recette->ingredients = $request->input("ingredients");
        $recette->duree = $request->input("duree");
        $recette->cuisson = $request->input("cuisson");
        $recette->difficulte = $request->input("difficulte");
        $recette->description = $request->input("description");
        
        $recette->save();
        // Rediriger vers la page d'accueil
        return redirect('/recettes'.$recette->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Retrouver et supprimer la recette de la 
        base de données */
        
        $recette = Recette::destroy($id);

        // Rediriger vers la page d'accueil
        return redirect('/recettes');
    }
}
