<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;
use Maatwebsite\Excel\Facades\Excel;

class ImportBaseController extends Controller
{


    public function import()
    {
        Excel::load('base.csv', function($contactos) {
             foreach ($contactos->get() as $c) {
                 Contactos::create([
                    'rut' => $c->rut,
                     'nombre' => $c->title,
                     'apellido_paterno' =>$c->apellido_paterno,
                     'apellido_materno' =>$c->apellido_materno,
                     'sexo' =>$c->sexo,
                     'edad' =>$c->edad,
                     'fec_nacimiento' =>$c->fec_nacimiento,
                     'direccion' =>$c->direccion,
                     'email' =>$c->email,
                     'telefono1' =>$c->telefono1,
                     'telefono2' =>$c->telefono2,
                     'telefono3' =>$c->telefono3,
                     'telefono4' =>$c->telefono4,
                     'telefono5' =>$c->telefono5,
                     'telefono6' =>$c->telefono6,
                     'comuna' =>$c->comuna,
                     'region' =>$c->region,
                     'c_corriente' =>$c->c_corriente,
                     'c_vista' =>$c->c_vista,
                     't_credito' =>$c->t_credito,
                     'c_rut' =>$c->c_rut
                 ]);
              }
        });
        return Contactos::all();
    }
}
