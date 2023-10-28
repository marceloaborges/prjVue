<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigos';

    protected $fillable = [
        'titulo',
        'descricao',
        'conteudo',
        'data',
    ];
}
