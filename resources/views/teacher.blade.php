@extends('layouts.app1')

@section('content')
    <div class="content-body">
    <!-- Anchors and buttons start -->
    <section id="anchors-n-buttons">
        <div class="row match-height">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profesores</h4>
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
                        <h4 class="card-title">En la Lista se muestran todos los usuarios y a la derecha es donde se define si es profesor.</h4>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">
                                    Nombres
                                </a>

                                <ul class="list-group">
                                    @foreach($lists as $list)
                                        <a  class="list-group-item list-group-item-action">
                                        <span class="tag tag-primary tag-pill float-xs-right">{{$list['verdadero']}}</span>
                                        {{$list['name']}}
                                        </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anchors and buttons end -->
    </div>
@endsection