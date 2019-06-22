<?php

namespace App\Http\Controllers;
use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    function prueba(){
        $query = Docente::all();
        return view('docentes',compact('query'));
    }
    function delete($codigo){
        Docente::destroy($codigo);
        return redirect()->route('verDocentes');
    }
}
