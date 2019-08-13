@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">CURSO</div>

                <div class="panel-body">
                 <form action="">
                     <div class="form-group">
                         <label for="title"> Nombre Curso</label>
                         <input type="text" name="title" class="form-control"></n>
                     </div>
                     <div class="form-group">
                         <label for="title">Cantidad de Horas</label>
                         <input type="number" name="title" class="form-control">
                         </div>
                     <div class="form-group">
                         <label for="title">Fecha Inicio</label>
                         <input type="date" name="title" class="form-control">
                             </div>
                     <div class="form-group">
                         <label for="title">Fecha Fin</label>
                         <input type="date" name="title" class="form-control">
                     </div>

                     <div class="form-group">
                         <button class="btn btn-primary">Insertar</button>

                     </div>
                 </form>

                </div>
            </div>
@endsection