<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){

        compact('curso');//=['curso' => $curso]

        return view('cursos.show',compact('curso'));//dentro del metodo view le pasamos como 2° parametro un array
    }                                                  // en un arreglo asignamos a una variable curso el parametro $curso 
}                                                       //que rescatamos del metodo show
