<?php

namespace App\Http\Controllers;
use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    function prueba(){
        $query = Docente::all();
        return view('Docentes.docentes',compact('query'));
    }
    function delete($codigo){
        Docente::destroy($codigo);
        echo 'hola';
        return redirect()->route('verDocentes');
    }
}
