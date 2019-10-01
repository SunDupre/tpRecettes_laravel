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
}
