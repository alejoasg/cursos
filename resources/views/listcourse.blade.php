@extends('layouts.app1')

@section('content')
    <div class="content-body">
        <!-- Anchors and buttons start -->
        <section id="anchors-n-buttons">
            <div class="row match-height">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Lista de cursos</h4>
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
                        <div class="card-header">
                            <h4 class="card-title">En la Lista se muestran todos los cursos.</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-xs-center">
                                           Nombre<br>
                                        </th>
                                        <th class="text-xs-center">
                                            Descripción<br>
                                        </th>
                                        <th class="text-xs-center">
                                           Horas <br>
                                        </th>
                                        <th class="text-xs-center">
                                            Fecha Inicio<br>
                                        </th>
                                        <th class="text-xs-center">
                                            Fecha Final<br>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($lists as $list)
                                        <tr>
                                            <td>{{$list['name']}}</td>
                                            <td> {{$list['description']}}</td>
                                            <td> {{$list['course_hours']}}</td>
                                            <td> {{$list['start_date']}}</td>
                                            <td> {{$list['end_date']}}</td>
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
        <!-- Anchors and buttons end -->
    </div>
@endsection