<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = [
        'titre',
        'ingredients',
        'duree',
        'cuisson',
        'difficulte',
        'description'
    ];
    //Récupérer le user à qui appartient la recette

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
