<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilmePorCategoria;

class FilmePorCategoriaController extends Controller
{
    public function index(){
        $filmescategoria=FilmePorCategoria::all();
        foreach ($filmescategoria as $fC) {
            echo "$fC->idFilmePorCategoria";
            echo " $fC->idFilme";
            echo " $fC->idCategoria";
            echo "<br>";
        }
    }
    public function indexAPI(){
        $filmescategoria=FilmePorCategoria::all();
        return $filmescategoria;
    }
}
