<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumno;
use App\Models\Grupos;

class escuela extends Controller
{
    //----------------------Create
    public function create(){
        return view('create');
    }

    //----------------------Store
    public function store(Request $request){
        $alumno = new Alumno;
        $alumno->matricula=$request->input('matricula');
        $alumno->nombre=$request->input('nombre');
        $alumno->fn=$request->input('fn');
        $alumno->genero=$request->input('genero');
        $alumno->direccion=$request->input('direccion');
        $alumno->email=$request->input('email');
        $alumno->pass=$request->input('pass');
        $alumno->save();
        return redirect()->route("lista");
    }

    //----------------------Consulta
    public function lista(){
        $datos = Alumno::all();
        return view ('lista_alumnos')
        ->with(['datos'=>$datos]);
    }

    //----------------------Consulta: Detalle
    public function detalle ($id){
        $alumno = Alumno::find($id);
        return view('detalle')
        ->with(['alumno'=> $alumno]);
    }

    //----------------------Modificar: Vista
    public function editar(Alumno $id){
        $grupo = Grupo::all();
        return view('modificacion_alumno')
        ->with(['alumno' => $id])
        ->with(['grupos' => $grupo]);
    }

    //----------------------Modificar: Salvar
    public function salvar (Alumno $id, Request $request){
        
        /*
        $id->update(
            $request->all();
            $request->only('nombre','fn','matricula','direccion','genero','email','contraseña', 'foto','id_grupo')
        );
        */

        //-------------------Foto/Archivo
        if($request->file('foto1' ) != '' ){
            $file = $request->file('foto1');
            $foto = $file->getClientOriginalName();
            //$foto = $request->('foto')->getClientOriginalName();
            $date = date('Ymd_His_');
            $foto2 = $date.$foto;
            \Storage::disk('local')->put($foto2, \File::get($file));
        }
        else{
            $foto2 = $request->foto2;
        }

        $query = Alumno::find($id->id);
        $query->nombre = $request->nombre;
        $query->fn = $request->fn;
        $query->matricula = $request->matricula;
        $query->direccion = $request->direccion;
        $query->genero = $request->genero;
        $query->email = $request->email;
        $query->pass = $request->pass;
        $query->foto = $foto2;
        $query->id_grupo = $request->id_grupo;
        $query -> save();

        return redirect()->route("detalle",['id'=> $id->id]);
    }

    //--------------------------Borrar
    public function borrar(Alumno $id){
        $id->delete();
        return redirect()->route("lista");
    }

     //----------------------Ejemplo de Jquery
     public function ejemplo(){
        return view ('ejemplo');
    }

    public function ejemplo03(){
        return view ('ejemplo03');
    }
}
