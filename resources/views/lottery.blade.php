@extends('layouts.app1')
@section('content')

<div class="content-body"><!-- Basic form layout section start -->
    <section id="basic-form-layouts">

        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form-center">GANA MILLONES</h4>
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

                            <div class="card-text">
                                <p>OBTEN TU COMBINACION PERFECTA</p>
                            </div>
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
                                                <label for="eventInput1">Primero de la loteria</label>
                                                <input type="number" id="eventInput1" class="form-control" placeholder="primer numero" name="numero1" value="{{old('numero1')}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="apellido">Segundo de la loteria</label>
                                                <input type="number" id="eventInput2" class="form-control" placeholder="segundo numero" name="numero2"  value="{{old('numero2')}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nick">Tercero de la loteria</label>
                                                <input type="number" id="eventInput3" class="form-control" placeholder="tercero numero" name="numero3"  value="{{old('numero3')}}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="apellido">Cuarto de la loteria</label>
                                                <input type="number" id="eventInput2" class="form-control" placeholder="cuarto numero" name="numero4"  value="{{old('numero4')}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nick">Quinto de la loteria</label>
                                                <input type="number" id="eventInput3" class="form-control" placeholder="quinto numero" name="numero5"  value="{{old('numero5')}}" required>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions center">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="icon-cross2"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icon-check2"></i> Ver si existe el combo
                                    </button>
                                    <table class="table table-bordered">
                                        <h4 class="card-title">Lista de 3 posibles números millonarios</h4>
                                        <thead>
                                        <tr>
                                            <th>Numero1</th>
                                            <th>Numero2</th>
                                            <th>Numero3</th>
                                            <th>Numero4</th>
                                            <th>Numero5</th>
                                            <th>estrella1</th>
                                            <th>estrella2</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ramdoms as $ramdom)
                                            <tr>
                                                <td> {{$ramdom['numero1']}}</td>
                                                <td> {{$ramdom['numero2']}}</td>
                                                <td> {{$ramdom['numero3']}}</td>
                                                <td> {{$ramdom['numero4']}}</td>
                                                <td> {{$ramdom['numero5']}}</td>
                                                <td> {{$ramdom['estrella1']}}</td>
                                                <td> {{$ramdom['estrella2']}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>

                            <table class="table table-bordered">
                                <h4 class="card-title">Lista de numeros ganadores pasados</h4>
                                <thead>
                                <tr>
                                    <th>Numero1</th>
                                    <th>Numero2</th>
                                    <th>Numero3</th>
                                    <th>Numero4</th>
                                    <th>Numero5</th>
                                    <th>estrella1</th>
                                    <th>estrella2</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($numbers as $number)
                                <tr>
                                    <td>{{$number['numero1']}}</td>
                                    <td> {{$number['numero2']}}</td>
                                    <td> {{$number['numero3']}}</td>
                                    <td> {{$number['numero4']}}</td>
                                    <td> {{$number['numero5']}}</td>
                                    <td> {{$number['estrella1']}}</td>
                                    <td> {{$number['estrella2']}}</td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- // Basic form layout section end -->
</div>
@endsection