<?php

namespace App\Http\Controllers;
use App\Junta;
use Illuminate\Http\Request;

class JuntaController extends Controller
{
    function agregar(Request $request,$codigo){ 
        if(isset($request->txtasunto) && isset($request->txtnivelimp)
        && isset($request->txtmotivos) && isset($request->txtlugar)
         && isset($request->txtfecha) && isset($request->txthora)){
             $junta = new Junta;
             $junta->Nivel_de_Importancia = $request->txtnivelimp;
             $junta->Motivos = $request->txtmotivos;
             $junta->Lugar = $request->txtlugar;
             $junta->Fecha = $request->txtfecha;
             $junta->Hora = $request->txthora;
             $junta->academia = $codigo;
             $junta->save();
            
         }
         else{
             echo "No se añadio";
         }
     }
     function eliminar($codigo){
         Junta::destroy($codigo);
         echo "Eliminado papaw";
     }
}

