<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    //
    protected $fillable = [
    'fecha_prestamo',
    'fecha_devolucion',
    'costo',
    'user_id',
    ];
}
