<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmePorCategoria extends Model
{
    use HasFactory;
    protected $fillable=['idFilme','idGenero'];
}
