<?php

namespace App\Http\Controllers;
use App\Academia;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    function index(){
        $query = Academia::all();
        return view('juntas',compact('query'));
    }
    function delete($codigo){
        try {
            Academia::destroy($codigo);
            return redirect()->route('verAcademias');
        } catch (\Throwable $th) {
            echo "No se puede eliminar la carrera";
        }
        
    }

}

