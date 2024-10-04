<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $table = 'filmes';

    protected $incremeting = true;
    protected $keyType = 'int';
    protected $primaryKey = 'idFilme';

    /**
    *@var bool;
    */

    
    protected $fillable=['tituloFilme', 'imgFilme', 'duracaoFilme', 'classificacaoFilme', 'anoLancamentoFilme'];

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'filme_por_categorias', 'idCategoria', 'idFilme');
    }

    use HasFactory;
}
