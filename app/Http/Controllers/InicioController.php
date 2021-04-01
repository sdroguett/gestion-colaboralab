<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Users;
use App\Models\Gestiones;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InicioController extends Controller
{
    //



    public function index()
    {

        //$user=auth()->user();
        $user = $user = Auth::user();

        if ($user->hasRole('admin')) {

            $contactos = Gestiones::select(
                'contactos.id',
                'contactos.nombre',
                'contactos.apellido_paterno',
                'contactos.apellido_materno',
                'contactos.edad',
                'contactos.rut',
                'estados.descripcion as estado',
                'sub_estados.descripcion as sub_estado'
            )
                ->join('contactos', 'gestiones.contactos_id', '=', 'contactos.id')
                ->join('sub_estados', 'gestiones.sub_estado', '=', 'sub_estados.id')
                ->join('estados', 'sub_estados.estado', '=', 'estados.id')
                ->get();
            return view('menu.inicio')->with('contactos',$contactos);


        } else {


            $contactos = Gestiones::select(
                'gestiones.id as gestionId',
                'contactos.id',
                'contactos.nombre',
                'contactos.apellido_paterno',
                'contactos.apellido_materno',
                'contactos.edad',
                'contactos.rut',
                'estados.descripcion as estado',
                'sub_estados.descripcion as sub_estado'
            )
                ->join('contactos', 'gestiones.contactos_id', '=', 'contactos.id')
                ->join('sub_estados', 'gestiones.sub_estado', '=', 'sub_estados.id')
                ->join('estados', 'sub_estados.estado', '=', 'estados.id')
                ->where('sub_estados.id', '=', 3)
                ->where('gestiones.usuario', '=', $user->id)
                ->take(300)->get();



            return view('menu.inicio')->with('user',$user)->with('contactos',$contactos);

        }
    }

    public function verContactados()
    {
        $user = $user = Auth::user();

        $contactos = Gestiones::select(
            'contactos.id',
            'contactos.nombre',
            'contactos.apellido_paterno',
            'contactos.apellido_materno',
            'contactos.edad',
            'contactos.rut',
            'estados.descripcion as estado',
            'sub_estados.descripcion as sub_estado'
        )
            ->join('contactos', 'gestiones.contactos_id', '=', 'contactos.id')
            ->join('sub_estados', 'gestiones.sub_estado', '=', 'sub_estados.id')
            ->join('estados', 'sub_estados.estado', '=', 'estados.id')
            ->where('gestiones.sub_estado', '=', 1)
            ->where('gestiones.usuario', '=', $user->id)
            ->take(300)->get();

        return view('menu.contactados')->with('user', $user)->with('contactos', $contactos);
    }

    public function verNoContactados()
    {

        $user = $user = Auth::user();

        $contactos = Gestiones::select(
            'contactos.id',
            'contactos.nombre',
            'contactos.apellido_paterno',
            'contactos.apellido_materno',
            'contactos.edad',
            'contactos.rut',
            'estados.descripcion as estado',
            'sub_estados.descripcion as sub_estado'
        )
            ->join('contactos', 'gestiones.contactos_id', '=', 'contactos.id')
            ->join('sub_estados', 'gestiones.sub_estado', '=', 'sub_estados.id')
            ->join('estados', 'sub_estados.estado', '=', 'estados.id')
            ->where('gestiones.sub_estado', '=', 2)
            ->where('gestiones.usuario', '=', $user->id)
            ->take(300)->get();


        return view('menu.no_contactados')->with('user', $user)->with('contactos', $contactos);
    }

    public function verAgendados()
    {
        $user = $user = Auth::user();

        $contactos = Gestiones::select(
            'contactos.id',
            'contactos.nombre',
            'contactos.apellido_paterno',
            'contactos.apellido_materno',
            'contactos.edad',
            'contactos.rut',
            'estados.descripcion as estado',
            'sub_estados.descripcion as sub_estado'
        )
            ->join('contactos', 'gestiones.contactos_id', '=', 'contactos.id')
            ->join('sub_estados', 'gestiones.sub_estado', '=', 'sub_estados.id')
            ->join('estados', 'sub_estados.estado', '=', 'estados.id')
            ->where('estados.id', '=', 2)
            ->where('gestiones.sub_estado', '=', 4)
            ->where('gestiones.usuario', '=', $user->id)
            ->take(300)->get();

        return view('menu.devolver_llamado')->with('user', $user)->with('contactos', $contactos);
    }
}
