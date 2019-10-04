@if (auth()->check())
    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-static menu-dark menu-accordion menu-shadow">
        <!-- main menu header-->
        <div class="main-menu-header">
            <input type="text" placeholder="Buscar" class="menu-search form-control round"/>
        </div>
        <!-- / main menu header Se utiliza la plantilla de roobust por eso tanto codigo spaguetis
        en html,aunque esta muy bien organizado y responde a determinados css que son imprecindibles
        el codigo se puede reducir aun mas-->
        <!-- main menu content Aqui se ponen las funcionalidad agrupadas por conceptos de gestion o de funcion como tal-->
        <div class="main-menu-content">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Gestión</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ url('/cursos') }}" data-i18n="nav.dash.main" class="menu-item">Nuevos Cursos</a>
                        </li>
                        <li><a href="{{ url('/listcursos') }}" data-i18n="nav.dash.main" class="menu-item">Lista de Cursos</a>
                        </li>
                        <li><a href="{{ url('/aulas') }}" data-i18n="nav.dash.main" class="menu-item">Aulas</a>
                        </li>
                        <li><a href="{{ url('/alumnos') }}" data-i18n="nav.dash.main" class="menu-item">Alumnos</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Planificación</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Administración</span></a>
                    <ul class="menu-content">
                        <li><a href="#" data-i18n="nav.invoice.invoice_template" class="menu-item">Configuración</a>
                        </li>
                        <li><a href="{{ url('/usuarios') }}" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">Usuarios</a>
                        </li>
                        <li><a href="{{ url('/profesores') }}" data-i18n="nav.search_pages.search_page" class="menu-item">Profesores</a>
                        </li>
                        <li><a href="{{ url('/equipos') }}" data-i18n="nav.dash.main" class="menu-item">Medios de Apoyo</a>
                        </li>
                    </ul>
                    <!-- Esta es la parte de datos de contacto para soporte-->
                </li>
                <li class=" navigation-header"><span data-i18n="nav.category.support">Soporte</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
                </li>
                <li class=" nav-item"><a href="https://github.com/pixinvent/robust-free-bootstrap-admin-template/issues"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Soporte en Web</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.com/free-bootstrap-template/robust-lite/documentation"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Documentacion</span></a>
                </li>
            </ul>
        </div>
        <!-- /main menu content-->
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
@endif


