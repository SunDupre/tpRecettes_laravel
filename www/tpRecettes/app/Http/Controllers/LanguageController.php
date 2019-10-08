<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function language($locale){

        session(['locale' => $locale]);
        
        return back();
    }
}
