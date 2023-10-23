@extends('layouts.master')
@section('title', 'Crear película')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center navbar-danger bg-danger" style="color:#ffffff" >
                    Añadir película
                </div>
                <div class="card-body" style="padding:30px">
                    <form action="/catalog/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="year">Año</label>
                            <input type="text" name="year" id="year" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="director">Director</label>
                            <input type="text" name="director" id="director" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="text" name="poster" id="poster" class="form-control"style="height:200px">
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Resumen</label>
                            <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="movie_url">Enlace de la pelicula</label>
                            <input type="text" name="movie_url" id="movie_url" class="form-control">
                        </div>                        
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-dark" style="padding:8px 100px;margin-top:25px;">
                                Añadir película
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop