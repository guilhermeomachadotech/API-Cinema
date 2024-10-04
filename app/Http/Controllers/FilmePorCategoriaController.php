<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilmePorCategoria;
use Illuminate\Support\Facades\DB;

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

    public function filmesAcaoAPI(){
        $filmescategoria=FilmePorCategoria::where('idCategoria', '=', '1')->leftJoin('filmes', 'filme_por_categorias.idFilme', '=', 'filmes.idFilme')
        ->select('filmes.tituloFilme', 'filmes.imgFilme', 'filmes.duracaoFilme', 'filmes.classificacaoFilme', 'filmes.anoLancamento')->get();
        return $filmescategoria;
    }
    public function filmesAnimacaoAPI(){
        $filmescategoria=FilmePorCategoria::where('idCategoria', '=', '2')->leftJoin('filmes', 'filme_por_categorias.idFilme', '=', 'filmes.idFilme')
        ->select('filmes.tituloFilme', 'filmes.imgFilme', 'filmes.duracaoFilme', 'filmes.classificacaoFilme', 'filmes.anoLancamento')->get();
        return $filmescategoria;
    }
    public function filmesAventuraAPI(){
        $filmescategoria=FilmePorCategoria::where('idCategoria', '=', '3')->leftJoin('filmes', 'filme_por_categorias.idFilme', '=', 'filmes.idFilme')
        ->select('filmes.tituloFilme', 'filmes.imgFilme', 'filmes.duracaoFilme', 'filmes.classificacaoFilme', 'filmes.anoLancamento')->get();
        return $filmescategoria;
    }
    public function filmesComediaAPI(){
        $filmescategoria=FilmePorCategoria::where('idCategoria', '=', '4')->leftJoin('filmes', 'filme_por_categorias.idFilme', '=', 'filmes.idFilme')
        ->select('filmes.tituloFilme', 'filmes.imgFilme', 'filmes.duracaoFilme', 'filmes.classificacaoFilme', 'filmes.anoLancamento')->get();
        return $filmescategoria;
    }
    public function filmesDramaAPI(){
        $filmescategoria=FilmePorCategoria::where('idCategoria', '=', '5')->leftJoin('filmes', 'filme_por_categorias.idFilme', '=', 'filmes.idFilme')
        ->select('filmes.tituloFilme', 'filmes.imgFilme', 'filmes.duracaoFilme', 'filmes.classificacaoFilme', 'filmes.anoLancamento')->get();
        return $filmescategoria;
    }
    public function filmesSuspenseAPI(){
        $filmescategoria=FilmePorCategoria::where('idCategoria', '=', '6')->leftJoin('filmes', 'filme_por_categorias.idFilme', '=', 'filmes.idFilme')
        ->select('filmes.tituloFilme', 'filmes.imgFilme', 'filmes.duracaoFilme', 'filmes.classificacaoFilme', 'filmes.anoLancamento')->get();
        return $filmescategoria;
    }

    public function qtddFilmesPorCategoria(){
        $qtddPorCategoria = FilmePorCategoria::join('categorias', 'filme_por_categorias.idCategoria', '=', 'categorias.idCategoria')->select('categorias.nomeCategoria', DB::raw('count(filme_por_categorias.idFilme) as total'))->groupBy('categorias.nomeCategoria')->get();

        return $qtddPorCategoria;
    }
}
