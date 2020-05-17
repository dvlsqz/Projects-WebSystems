<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table = 'detalle_ingresos';
    public $timestamps = false;

    protected $fillable = [
        'idingreso',
        'idaticulo',
        'cantidad',
        'precio'
    ];
    
}
