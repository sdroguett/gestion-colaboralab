<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestiones;
use App\Models\Contactos;
use App\Models\User;
use App\Models\Gestiones_Detalle;

class ContactosController extends Controller
{



    public function modificarGestion($contactoId, $gestionId)
    {



        $contacto = Contactos::find($contactoId);
        $gestion = Gestiones::where('id', $gestionId)->first();
        $detalle = Gestiones_Detalle::where('gestiones_id', $gestionId)->first();

        //return $detalle;


        if (!empty($detalle)) {

                return view('menu.contacto_modificar')->with('contacto', $contacto)->with('gestion', $gestion)->with('detalle', $detalle);
            } else {


                return view('menu.contacto_modificar_nuevo')->with('contacto', $contacto)->with('gestion', $gestion);
            }

    }

    public function actualizarGestion(Request $request)
    {

        // $user=auth()->user();

        $contactoId = $request->contactoId;
        $user = User::where('id', auth()->user()->id)->first();
        $gestion = Gestiones::find($request->gestionId);



        $contesta = $request->contesta;
        $devolverLlamado = $request->devolverLlamado;



        if ($contesta == 1 && $devolverLlamado == 1) {
            $gestion->update([
                'contactos_id' => $contactoId,
                'sub_estado' => 4,
                'usuario' => $user->id
            ]);
        }
        if ($contesta == 1 && $devolverLlamado != 1 || is_null($devolverLlamado)) {
            $gestion->update([
                'contactos_id' =>  $contactoId,
                'sub_estado' => 1,
                'usuario' => $user->id
            ]);
        }
        if ($contesta == 2) {
            $gestion->update([
                'contactos_id' =>  $contactoId,
                'sub_estado' => 2,
                'usuario' => $user->id
            ]);
        }




        $detalleGestion = Gestiones_Detalle::where('gestiones_id', $request->gestionId);

        if ($detalleGestion->count() > 0) {

            $detalleGestion->update([
                'contesta' => $request->contesta,
                'conoce' => null,
                'interes' => null,
                'dono' => $request->dono,
                'cantidad' => $request->cantidad,
                'motivo_si' => null,
                'motivo_no' => null,
                'duracion_llamada' => 0,
                'comentarios' => $request->comentarios,
            ]);
        } else {
            $detalleGestion = Gestiones_Detalle::create([
                'contesta' => $request->contesta,
                'conoce' => null,
                'interes' => null,
                'dono' => $request->dono,
                'cantidad' => $request->cantidad,
                'motivo_si' => null,
                'motivo_no' => null,
                'duracion_llamada' => 0,
                'comentarios' => $request->comentarios,
                'gestiones_id' => $request->gestionId
            ]);
        }


        //return $detalleGestion;
        return redirect()->route('inicio');


        //return $gestion;

    }
}
