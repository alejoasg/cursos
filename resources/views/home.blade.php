@extends('layouts.app1')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">WEB CURSOS</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Ya está usted Logueado!
                </div>
            </div>
@endsection