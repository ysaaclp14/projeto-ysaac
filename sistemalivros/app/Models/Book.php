<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'user_id',
        'autor',
        'titulo',
        'subtitulo',
        'edicao',
        'editora',
        'ano_publicacao',
    ];
}
