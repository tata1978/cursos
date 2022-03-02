<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        // return $request->all();
        //VALIDAMOS LOS INPUT DEL FORMULARIO CREATE
       /* $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ]);*/

/*         $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */       

        //ASIGNACION MASIVA, CON UNA UNICA LINEA DE CODIGO
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        //$curso = Curso::find($id);

        compact('curso'); //=['curso' => $curso]

        return view('cursos.show', compact('curso')); //dentro del metodo view le pasamos como 2° parametro un array
    }                                                  // en un arreglo asignamos a una variable curso el parametro $curso que rescatamos del metodo show

    public function edit(Curso $curso)
    {
        //$curso = Curso::find($id);
        

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        //VALIDAMOS LOS INPUT DEL FORMULARIO edit
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);        

/*         $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        //ASIGNACION MASIVA, CON UNA UNICA LINEA DE CODIGO
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }
}
