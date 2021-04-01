<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestiones extends Model
{
    use HasFactory;


    protected $table='gestiones';
    protected $primaryKey = 'id';

    protected $fillable = [
        'sub_estado', 'usuario', 'contactos_id'
    ];




    public function detalle()
    {
        return $this->hasMany('App\Gestiones_Detalle');
    }

}
