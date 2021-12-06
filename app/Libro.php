<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable = [
    'titulo',
    'autor',
    'descripcion',
    'img',
    'existencias',
    'editorial_id',
    'tema_id',
    ];
}
