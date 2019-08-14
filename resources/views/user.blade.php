@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Usuario</div>

        <div class="panel-body">
            <form action="">
                <div class="form-group">
                    <label for="title"> Nombre Usuario</label>
                    <input type="text" name="title" class="form-control"></n>
                </div> 
                <div class="form-group">
                    <label for="title"> Apellido Usuario</label>
                    <input type="text" name="title" class="form-control"></n>
                </div>
                <div class="form-group">
                    <label for="title"> Nick Usuario</label>
                    <input type="text" name="title" class="form-control"></n>
                </div>
                <div class="form-group">
                    <label for="title">Activo</label>
                    <input type="checkbox" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Correo Electronico</label>
                    <input type="text" name="title" class="form-control"></n>
                </div>
                <div class="form-group">
                    <label for="title">DNI</label>
                    <input type="text" name="title" class="form-control"></n>
                </div>
                <div class="form-group">
                    <label for="title">Teléfono</label>
                    <input type="number" name="title" class="form-control"></n>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Insertar</button>
                </div>
            </form>

        </div>
    </div>
@endsection