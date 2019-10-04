@extends('layouts.app1')

@section('content')

    <div class="content-body"><!-- Basic form layout section start -->
        <section id="basic-form-layouts">

            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form-center">Cursos</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">

                               @if (count($errors) > 0)
                                   <div class="alert alert-danger">
                                       <ul>
                                           @foreach( $errors->all() as $error)
                                               <li>
                                                   {{$error}}
                                               </li>
                                               @endforeach
                                       </ul>
                                   </div>
                                @endif

                                <form class="form" method="POST">
                                     {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1"> Nombre Curso</label>
                                                    <input type="text" id="eventInput1" class="form-control" placeholder="nombre curso" name="nombre" value="{{old('nombre')}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="eventInput1"> Descripción del Curso</label>
                                                    <textarea type="text" id="eventInput2" class="form-control" placeholder="descripción del curso" name="description" required>{{old('description')}}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="eventInput2">Cantidad de Horas</label>
                                                    <input type="number" id="eventInput3" class="form-control" placeholder="cantidad de horas" name="cant_horas" value="{{old('cant_horas')}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="eventInput3">Fecha Inicio</label>
                                                    <input type="date" id="eventInput4" class="form-control" placeholder="fecha inicio" name="fecha_inicio" value="{{old('fecha_inicio')}}" required>
                                                 </div>
                                                <div class="form-group">
                                                    <label for="eventInput3">Fecha Final</label>
                                                    <input type="date" id="eventInput5" class="form-control" placeholder="fecha final" name="fecha_final" value="{{old('fecha_final')}}" required>
                                                </div>

                                               <!--- <div class="form-group">
                                                    <label>Existing Customer</label>
                                                    <div class="input-group">
                                                        <label class="display-inline-block custom-control custom-radio ml-1">
                                                            <input type="radio" name="customer1" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Yes</span>
                                                        </label>
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="customer1" checked class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">No</span>
                                                        </label>
                                                    </div>
                                                </div> -->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions center">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="icon-cross2"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icon-check2"></i> Insertar
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- // Basic form layout section end -->
    </div>
@endsection