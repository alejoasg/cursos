
@extends('layouts.app1')
@section('content')

    <div class="content-body"><!-- Basic form layout section start -->
        <section id="basic-form-layouts">

            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form-center">Editar Usuario</h4>
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
                                    <p>Se adicionan los usuarios del sistema.</p>
                                </div>
                                @if(session('notification'))
                                    <div class="alert alert-success">
                                          {{session('notification')}}
                                    </div>
                                @endif
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
                                                    <label for="eventInput1"> Nombre Usuario</label>
                                                    <input type="text" id="eventInput1" class="form-control" placeholder="nombre usuario" name="nombre" value="{{old('nombre')==null?$user['name']:old('nombre')}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="apellido">Apellido Usuario</label>
                                                    <input type="text" id="eventInput2" class="form-control" placeholder="apellido usuario" name="apellido" value="{{old('apellido')==null?$user['last_name']:old('apellido')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nick">Nick Usuario</label>
                                                    <input type="text" id="eventInput3" class="form-control" placeholder="nick usuario" name="nick"  value="{{old('nick')==null?$user['nick']:old('nick')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Correo Electronico</label>
                                                    <input type="email" id="eventInput5" class="form-control" placeholder="correo electronico" name="correo"  value="{{old('correo')==null?$user['email']:old('correo')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dni">DNI</label>
                                                    <input type="text" id="eventInput6" class="form-control" placeholder="DNI" name="dni" value="{{old('dni')==null?$user['dni']:old('dni')}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="tel">Teléfono</label>
                                                    <input type="tel" id="eventInput7" class="form-control" pattern="[0-9]{9}" placeholder="Teléfono Ejempo:677624578" name="telefono" value="{{old('telefono')==null?$user['phone_number']:old('telefono')}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="password">Contraseña <em>Ingresar solo si desea cambiarla</em></label>
                                                    <input type="text" id="eventInput7" class="form-control"  placeholder="Contraseña" name="password" value="{{old('password'), str_random(10)}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions center">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="icon-cross2"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icon-check2"></i> Editar
                                        </button>
                                    </div>
                                </form>


                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>E-mail</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Nick</th>
                                        <th>DNI</th>
                                        <th>Número de teléfono</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user['email']}}</td>
                                            <td> {{$user['name']}}</td>
                                            <td> {{$user['last_name']}}</td>
                                            <td> {{$user['nick']}}</td>
                                            <td> {{$user['dni']}}</td>
                                            <td> {{$user['phone_number']}}</td>
                                            <td>

                                                <a  href="{{route('editusuarios',$user['id'])}}"  class="btn btn-sm btn-primary" title="Editar">

                                                    <span class="icon-edit"></span>
                                                </a>
                                                <a href="{{route('deleteusuarios',$user['id'],'eliminar')}}"  class="btn btn-sm btn-primary" title="Dar de baja">

                                                    <span class="icon-ei-trash"></span>
                                                </a>
                                            </td>


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