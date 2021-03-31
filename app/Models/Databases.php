<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Databases extends Model
{
    //


    protected $table='databases';
    protected $primaryKey = 'db_id';

    protected $fillable = [
        'db_nombre'
    ];
}
