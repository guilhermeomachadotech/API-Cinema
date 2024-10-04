<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = 'categorias';

    protected $primaryKey = 'idCategoria';
    protected $incremeting = true;
    protected $keyType = 'int';

    /**
     * @var bool;
     */

    protected $fillable=['nomeCategoria'];

    public function filmes(){
        return $this->belongsToMany(Filmes::class, 'filme_por_categorias', 'idCategoria', 'idFilme');
    }

    use HasFactory;
    
}
