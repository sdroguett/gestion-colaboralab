<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestiones extends Model
{
    use HasFactory;







    public function detalle()
    {
        return $this->hasMany('App\Gestiones_Detalle');
    }

}
