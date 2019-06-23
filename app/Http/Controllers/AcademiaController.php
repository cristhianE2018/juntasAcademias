<?php

namespace App\Http\Controllers;
use App\Academia;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    //FUNCION PARA MOSTRAR REGISTRO
    function index(){
        $query = Academia::all();
        return view('Academias.academias',compact('query'));
    }

    //FUNCION PARA AGREGAR UNA ACADEMIA
    function agregar(Request $request){ 

        if(isset($request->txtnombre) && isset($request->txtnumero)){
            $academia = new Academia;
            $academia->Nombre = $request->txtnombre;
            $academia->Numero_Docentes = $request->txtnumero;
            $academia->save();
            return redirect()->route('verAcademias',["mensaje"=>"Agregado"]);
        }
        else{
            return redirect()->route('verAcademias',["mensaje"=>"error"]);
        }
    }

    //FUNCION PARA ELIMINAR UNA ACADEMIA
    function delete($codigo){
        try {
            Academia::destroy($codigo);
            return redirect()->route('verAcademias');
        } catch (\Throwable $th) {
            echo "Error al eliminar la carrera";
        }
        
    }

}

