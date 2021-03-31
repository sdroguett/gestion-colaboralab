<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contactos extends Model
{
    //

    use HasFactory;
    protected $table='contactos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'rut', 'nombre', 'apellido_paterno','apellido_materno', 'sexo',
        'edad', 'fec_nacimiento' ,'direccion','telefono1','telefono2','telefono3','telefono4','telefono5','telefono6',
        'direccion2', 'numero_cliente','compl_direccion','comuna','region','c_corriente',
        'c_vista','t_credito','c_rut'
    ];

}
