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

    //FUNCION PARA AGREGAR UN DOCENTE
    function agregar($nombre){
        return "agregar";
    }

    //FUNCION PARA ELIMINAR UN DOCENTE
    function delete($codigo){
        Docente::destroy($codigo);
        echo 'hola';
        return redirect()->route('verDocentes');
    }
}
