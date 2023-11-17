@extends('layouts.master')

@section('title', 'Crear Nuevo Idioma')

@section('content')
    <h1>Crear Nuevo Idioma</h1>

    <form action="{{ route('languages.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection