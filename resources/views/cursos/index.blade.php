@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenidos a la Página de Cursos</h1>

    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->name }}</li>
        @endforeach
    </ul>

    {{$cursos->links()}}

@endsection
