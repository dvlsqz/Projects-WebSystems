<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_ventas';
    public $timestamps = false;

    protected $fillable = [
        'idventa',
        'idaticulo',
        'cantidad',
        'precio',
        'descuento'
    ];
}
