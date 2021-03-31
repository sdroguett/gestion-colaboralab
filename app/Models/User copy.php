<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Nicolaslopezj\Searchable\SearchableTrait;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido_paterno', 'apellido_materno',
        'user_telefono', 'user_rut' ,'user-dv','user_ocupacion','user_comuna',
        'user_region', 'user_direccion','user_logo','user_descripcion'
    ];

   protected $searchable = [
        'columns' => [
            'users.name' => 10
        ],

    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $attributes = [
        'menuroles' => 'user',
    ];


    public function organizaciones(){
        return $this->belongToMany('App\Usuarios_Organizaciones' ,'Usuarios_Organizaciones')
        ->withPivot('org_id');

    }
}
