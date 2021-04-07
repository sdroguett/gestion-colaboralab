<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestiones_Detalle extends Model
{
    use HasFactory;
    protected $table='gestiones_detalle';
    protected $primaryKey = 'id';

    protected $fillable = [
        'contesta', 'conoce', 'interes','dono', 'cantidad',
        'motivo', 'duracion_llamada' ,'comentarios','gestiones_id'
    ];
}
