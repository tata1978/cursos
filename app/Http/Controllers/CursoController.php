<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos=Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(){
            
    }

    public function show($id){

        $curso=Curso::find($id);

        compact('curso');//=['curso' => $curso]

        return view('cursos.show',compact('curso'));//dentro del metodo view le pasamos como 2° parametro un array
    }                                                  // en un arreglo asignamos a una variable curso el parametro $curso 
}                                                       //que rescatamos del metodo show
