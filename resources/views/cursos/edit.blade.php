@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')
    <h1>En esta página podras editar un curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{ $curso->description }}</textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
