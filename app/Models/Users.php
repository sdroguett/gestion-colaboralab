<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Users extends Model
{
    use SoftDeletes;
    use HasRoles;


    protected $guard_name = '';

    public function notes()
    {
        return $this->hasMany('App\Notes');
    }

    protected $dates = [
        'deleted_at'
    ];

    public function intereses(){
        return $this->belongToMany('App\Usuarios_Intereses' ,'Usuarios_Intereses')
        ->withPivot('int_id');
    }

    public function proyectos(){
        return $this->belongToMany('App\Usuarios_Proyectos' ,'Usuarios_Proyectos')
        ->withPivot('proy_id');
    }



}
