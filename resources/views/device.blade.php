@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">EQUIPO</div>

        <div class="panel-body">
            <form action="">
                <div class="form-group">
                    <label for="title">Nombre Equipo</label>
                    <input type="text" name="title" class="form-control"></n>
                </div>
                <div class="form-group">
                    <label for="title">Modelo Equipo</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Insertar</button>

                </div>
            </form>

        </div>
    </div>
@endsection