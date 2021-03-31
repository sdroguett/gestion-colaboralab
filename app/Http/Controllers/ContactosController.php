<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestiones;
use App\Models\Contactos;
use App\Models\Tipificaciones;
use App\Models\Gestiones_Detalle;

class ContactosController extends Controller{



    public function actualizarGestion($contacto_id){


        $contacto=Contactos::find($contacto_id);
        $gestion=Gestiones::where('contactos_id','=',$contacto->id)->get();
        foreach($gestion as $g){
            $tipificacion=Gestiones_Detalle::where('gestiones_id','=',$g->id)->first();
        }
        return view('menu.contacto_modificar')->with('contacto',$contacto)->with('tipificacion',$tipificacion)->with('gestion',$gestion);

    }

    public function setGestionado(Request $request){

        $user=auth()->user();
        $contacto=Contactos::find($request->contactoId);
        $gestion=Gestiones::where('contactos_id','=',$request->contactoId);

        $contesta=$request->contesta;
        $conoce=$request->conoce;
        $interes=$request->interes;
        $dono=$request->dono;
        $cantidad=$request->cantidad;
        $motivo_si=$request->motivo_si;
        $motivo_no=$request->motivo_no;
        $llamada=$request->dur_llamada;
        $comentarios=$request->comentarios;
        $devolver_llamado=$request->devolver_llamado;



        $gestion->update([
            'contactos_id'=>$contacto->id,
            'sub_estado'=>3,
            'usuario'=>$user->id
        ]);



        Gestiones_Detalle::create([
            'contesta'=>$contesta,
            'devolver_llamado'=>$devolver_llamado,
            'conoce'=>$conoce,
            'interes'=>$interes,
            'dono'=>$dono,
            'cantidad'=>$cantidad,
            'motivo_si'=> $motivo_si,
            'motivo_no'=> $motivo_no,
            'duracion_llamada'=>$llamada,
            'comentarios'=>$comentarios,
            'contacto_id'=>$contacto->contactoId,
            'gestiones_id'=>$gestion->id
        ]);

        return redirect()->route('menu.inicio');

    }

}
