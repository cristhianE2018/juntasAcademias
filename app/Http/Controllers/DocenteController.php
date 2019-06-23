<?php

namespace App\Http\Controllers;
use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    //SE USA EL MODELO DOCENTE PARA INTERACTURAR CON LOS DATOS
    function prueba(){
        $query = Docente::all();
        return view('Docentes.docentes',compact('query'));
    }
    //FUNCION PARA AGREGAR UNA ACADEMIA
    //'id','Nombre','Apellidos','Puesto','Contraseña','academia'
    function agregar(Request $request){ 
       if(isset($request->txtnombre) && isset($request->txtapellidos) &&
       isset($request->txtpuesto)
       ){
            $docente = new Docente;
            $docente->Nombre = $request->txtnombre;
            $docente->Apellidos = $request->txtapellidos;
            $docente->Puesto = $request->txtpuesto;
            $docente->Contraseña = $request->txtcontraseña;
            $docente->academia = $request->txtacademia;
            $docente->save();
            return redirect()->route('verDocentes',["mensaje"=>"Agregado"]);
        }
        else{
            return redirect()->route('verDocentes',["mensaje"=>"error"]);
        }
    }

    //FUNCION PARA ELIMINAR UN DOCENTE
    function delete($codigo){
        Docente::destroy($codigo);
        echo 'hola';
        return redirect()->route('verDocentes');
    }
}
