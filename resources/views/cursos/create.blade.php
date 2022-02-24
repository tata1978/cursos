@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>En esta página podras crear nuevos cursos</h1>
    <form action="{{route('cursos.store')}}">
        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="categoria">
        </label>
    </form>
@endsection
