<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestiones;
use App\Models\Contactos;
use App\Models\User;
use App\Models\Gestiones_Detalle;

class ContactosController extends Controller{



    public function modificarGestion($contacto_id){


        $contacto=Contactos::find($contacto_id);
        $gestion=Gestiones::where('contactos_id','=',$contacto->id)->get();
        foreach($gestion as $g){
            $tipificacion=Gestiones_Detalle::where('gestiones_id','=',$g->id)->get();

        }


        return view('menu.contacto_modificar')->with('contacto',$contacto)->with('tipificacion',$tipificacion)->with('gestion',$gestion);


    }

    public function actualizarGestion(Request $request){

       // $user=auth()->user();

        $contactoId=$request->contactoId;
        $user = User::where('id', auth()->user()->id)->first();
        $contacto=Contactos::where('id', $contactoId)->first();
        $gestion=Gestiones::where('contactos_id',$contactoId)->first();

        $contesta=$request->contesta;
        $dono=$request->dono;
        $cantidad=$request->cantidad;
        $comentarios=$request->comentarios;
        $devolverLlamado=$request->devolverLlamado;



        if($contesta==1 && $devolverLlamado==1){
            $gestion->update([
                'contactos_id'=>$contacto->id,
                'sub_estado'=>4,
                'usuario'=>$user->id
            ]);
        }
        if($contesta==1 && $devolverLlamado!=1){
            $gestion->update([
                'contactos_id'=>$contacto->id,
                'sub_estado'=>1,
                'usuario'=>$user->id
            ]);
        }
        if($contesta==2){
            $gestion->update([
                'contactos_id'=>$contacto->id,
                'sub_estado'=>2,
                'usuario'=>$user->id
            ]);
        }




       $detalleGestion=Gestiones_Detalle::where('gestiones_id','=',$gestion->id);

        if(!empty($detalleGestion)){

        $detalleGestion->update([
            'contesta'=>$contesta,
            'interes'=>null,
            'dono'=>$dono,
            'cantidad'=>$cantidad,
            'motivo_si'=> null,
            'motivo_no'=> null,
            'duracion_llamada'=>0,
            'comentarios'=>$comentarios
        ]);

        }else{
            $detalleGestion::create([
                'contesta'=>$contesta,
                'conoce'=>null,
                'interes'=>null,
                'dono'=>$dono,
                'cantidad'=>$cantidad,
                'motivo_si'=> null,
                'motivo_no'=> null,
                'duracion_llamada'=>0,
                'comentarios'=>$comentarios,
                'gestiones_id'=>$gestion->id
            ]);
        }

        return redirect()->route('inicio');

        //return $user;
        //return $gestion;

    }

}
