<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categoria=Categoria::all();
        foreach($categoria as $c){
            echo "$c->idCategoria";
            echo "$c->nomeCategoria";
            echo "<br>";
        }
    } 
    public function indexAPI(){
        $categoria=Categoria::all();
        return $categoria;
    }
}
