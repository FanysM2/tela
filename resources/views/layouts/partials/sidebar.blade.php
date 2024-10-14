      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="	fas fa-tshirt"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Sis <sup>Teñido</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Área Teñido
        </div>

        <!-- Nav Items -->


        <li class="nav-item {{ Request::routeIs('Catalogo.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('catalogo.index')}}">
                <i class="fas fa-book-open"></i>
                <span>Cátalogo</span>
            </a>
        </li>

        <li class="nav-item {{ Request::routeIs('Marcas.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('marcas.index')}}">
                <i class="fas fa-bold"></i>
                <span>Marcas</span>
            </a>
        </li>

        <li class="nav-item {{ Request::routeIs('Maquinas.index') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ColpaseMaquinas"
                aria-expanded="true" aria-controls="ColpaseMaquinas">
                <i class="fas fa-dumpster"></i>
                <span>Máquinas</span>
            </a>
            <div id="ColpaseMaquinas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('maquinas.index')}}">Jets Individual</a>
                    <a class="collapse-item" href="">Jets doble</a>
                    <a class="collapse-item" href="">Abridoras</a>
                    <a class="collapse-item" href="">Boil off</a>
                    <a class="collapse-item" href="">Destorcedora</a>
                    <a class="collapse-item" href="">Thies</a>
                    <a class="collapse-item" href="">Then</a>

                </div>
            </div>


      

        <li class="nav-item {{ Request::routeIs('Pasos.index') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ColpasePasos"
                aria-expanded="true" aria-controls="ColpasePasos">
                <i class="	far fa-file-alt"></i>
                <span>Pasos para fabricar tela</span>
                <div id="ColpasePasos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('pasos.index')}}">Paso 1</a>
                        <a class="collapse-item" href="">Paso 2</a>
                        <a class="collapse-item" href="">Paso 3</a>
                        <a class="collapse-item" href="">Paso 4</a>

                    </div>
                </div>


            </li>
            <li class="nav-item {{ Request::routeIs('Questions.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('questions.index')}}">
                    <i class="	fas fa-file-alt"></i>
                    <span>Encuesta</span>
                </a>
            </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Archivero
                </div>

                <!-- Nav Items -->
        <li class="nav-item {{ Request::routeIs('Archivos.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('archivos.index')}}">
                <i class="fas fa-folder-open"></i>
                <span>Folders</span>
            </a>
        </li>
      

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
