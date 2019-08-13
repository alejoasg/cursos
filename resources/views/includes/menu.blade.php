@if (auth()->check())
<div class="panel panel-primary">
    <div class="panel-heading">Menú</div>

    <div class="panel-body">

<ul class="nav nav-pills nav-stacked">

    <li><a  href="{{ url('/cursos') }}">
     Cursos
     </a></li>
    <li><a href="#">
            Alumnos
        </a></li>
    <li><a href="#">
            Aulas
        </a></li>
    <li><a href="#">
            Profesores
        </a></li>
    <li><a href="{{ url('/equipos') }}">
            Equipo
        </a></li>
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administración</a>
        <ul class="dropdown-menu">
            <li><a href="#">Configuración</a></li>
            <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
            <li><a href="#">Profesores</a></li>
        </ul>
    </li>

</ul>
    </div>
</div>
@endif


