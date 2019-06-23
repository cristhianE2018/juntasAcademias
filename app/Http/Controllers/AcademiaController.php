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
            return redirect()->route('verAcademias');
        }
        else{
            echo "<h1> Error al agregar: No deben ir campos vacios </h1>";
        }
    }

    //FUNCION PARA ELIMINAR UNA ACADEMIA
    function delete($codigo){
        try {
            Academia::destroy($codigo);
            return redirect()->route('verAcademias');
        } catch (\Throwable $th) {
            echo "<h1> Error al eliminar: La carrera esta asignada a docentes </h1>";
        }
        
    }

}

