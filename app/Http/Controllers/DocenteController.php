<?php

namespace App\Http\Controllers;
use App\Docente;
use App\Academia;
use App\Junta;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    //SE USA EL MODELO DOCENTE PARA INTERACTURAR CON LOS DATOS
    function prueba(){
        $academias = Academia::all();
        $query = Docente::all();
        return view('Docentes.docentes',compact('query'),compact('academias'));
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
            return redirect()->route('verDocentes',["mensaje"=>"Exito"]);
        }
        else{
            return redirect()->route('verDocentes',["mensaje"=>"Error1"]);
        }
    }

    //FUNCION PARA ELIMINAR UN DOCENTE
    function delete($codigo){
        try {
            Docente::destroy($codigo);
            return redirect()->route('verDocentes',["mensaje"=>"Exito2"]);
        } catch (\Throwable $th) {
            return redirect()->route('verDocentes',["mensaje"=>"Error2"]);
        }
    }
    //VALIDACION PARA LOS TIPOS DE USUARIO QUE PUEDAN INGRESAR
    function validacion(Request $request){
        $puesto = Docente::select('Puesto')->where('Nombre',"=",$request->txtusuario
        )->where('contraseña','=',$request->txtcontraseña)->first(); //DOCENTE
        $academia = Docente::select('academia')->where('Nombre',"=",$request->txtusuario)->first();
        $juntas = Junta::all()->where('academia','=',$academia->academia);
        $aca = Academia::select('Nombre')->where('id',"=",$academia->academia)->first();
        if($puesto->Puesto=="Jefe de Carrera"){
            return view('Juntas.verjuntas',compact('juntas'),["academia"=>$aca->Nombre,
            "usuario"=>$request->txtusuario,
            "puesto"=>"Docente",
            "academia"=>$academia->academia]);
        }
        else if($puesto->Puesto=="Docente"){
            return view('Juntas.juntas',compact('juntas'),["academia"=>$aca->Nombre,
            "usuario"=>$request->txtusuario,
            "puesto"=>"Docente"]);
        }
        else if($puesto->Puesto=="SuperAdmin"){
            return redirect()->route('verDocentes');
        }
    }
}
