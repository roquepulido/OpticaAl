<ul
    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar"
>
    <!-- Sidebar - Brand -->
    <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="index.html"
    >
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Optica AL</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    @role('admin')
    <div class="sidebar-heading">Admin</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item {{ Route::currentRouteNamed( 'employees.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('employees.index') }}">
            <i class="fas fa-id-card-alt"></i>
            <span>Empleados</span>
        </a>
    </li>
    <li
        class="nav-item {{ Route::currentRouteNamed( 'stores.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('stores.index') }}">
            <i class="fas fa-store-alt"></i>
            <span>Tiendas</span>
        </a>
    </li>
    <li
        class="nav-item {{ Route::currentRouteNamed( 'stores.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('stores.index') }}">
            <i class="fas fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>
    <li
        class="nav-item {{ Route::currentRouteNamed( 'diagnostics.*' )||Route::currentRouteNamed( 'kinds.*' )||Route::currentRouteNamed( 'treatments.*' ) ?  'active' : '' }}"
    >
        <a
            class="nav-link"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
        >
            <i class="fas fa-table"></i>
            <span>Info de Tablas</span>
        </a>
        <div
            id="collapseTwo"
            class="collapse {{ Route::currentRouteNamed( 'diagnostics.*' )||Route::currentRouteNamed( 'kinds.*' )||Route::currentRouteNamed( 'treatments.*' ) ?  'show' : '' }}"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info de menus:</h6>
                <a
                    class="collapse-item {{ Route::currentRouteNamed( 'diagnostics.*' ) ?  'active' : '' }}"
                    href="{{ route('diagnostics.index') }}"
                    >Diagnosticos</a
                >
                <a
                    class="collapse-item {{ Route::currentRouteNamed( 'kinds.*' ) ?  'active' : '' }}"
                    href="{{ route('kinds.index') }}"
                    >Tipos de trabajo</a
                >
                <a
                    class="collapse-item {{ Route::currentRouteNamed( 'treatments.*' ) ?  'active' : '' }}"
                    href="{{ route('treatments.index') }}"
                    >Tratamientos</a
                >
            </div>
        </div>
    </li>
    @endrole

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Ventas</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item  {{ Route::currentRouteNamed( 'customers.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('customers.index') }}">
            <i class="far fa-address-book"></i>
            <span>Clientes</span>
        </a>
    </li>
    <li
        class="nav-item  {{ Route::currentRouteNamed( 'sales.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('sales.index') }}">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Ventas</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block" />
    <div class="sidebar-heading">Pedidos</div>
    <li
        class="nav-item  {{ Route::currentRouteNamed( 'lenses.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('lenses.index') }}">
            <i class="fas fa-eye"></i>
            <span>Micas</span>
        </a>
    </li>
    <li
        class="nav-item  {{ Route::currentRouteNamed( 'eyeglasses.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('eyeglasses.index') }}">
            <i class="fas fa-glasses"></i>
            <span>Lentes</span>
        </a>
    </li>
    <li
        class="nav-item  {{ Route::currentRouteNamed( 'labs.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('labs.index') }}">
            <i class="fas fa-flask"></i>
            <span>Laboratorios</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block" />
    <div class="sidebar-heading">Stock</div>
    <!-- Nav Item - Charts -->
    <li
        class="nav-item {{ Route::currentRouteNamed( 'frames.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('frames.index') }}">
            <i class="fas fa-glasses"></i>
            <span>Armazones</span>
        </a>
    </li>
    <li
        class="nav-item {{ Route::currentRouteNamed( 'stocks.*' ) ?  'active' : '' }}"
    >
        <a class="nav-link" href="{{ route('stocks.index') }}">
            <i class="far fa-list-alt"></i>
            <span>Stocks</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
