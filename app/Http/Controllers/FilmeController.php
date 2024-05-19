<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmes;

class FilmeController extends Controller
{
    public function index(){
        $filmes=Filmes::all();
        foreach($filmes as $f){
            echo "$f->idFilme";
            echo " $f->tituloFilme";
            echo " $f->imgFilme";
            echo " $f->duracaoFilme";
            echo " $f->classificacaoFilme";
            echo "$f->anoLancamento";
            echo "<br>";
        }
        
    }
    public function indexAPI(){
        $filmes=Filmes::all();
        return $filmes;
    }
}
