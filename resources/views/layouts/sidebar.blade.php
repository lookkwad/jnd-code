 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('links') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JND CODE </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Links -->
    <li class="nav-item {{ Route::is('links') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('links') }}">
            <i class="fas fa-link"></i>
            <span>Links</span></a>
    </li>

    @if (Auth::user()->type == 'admin')
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Links -->
        <li class="nav-item {{ Route::is('admin') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin') }}">
                <i class="fas fa-user-cog"></i>
                <span>Admin</span></a>
        </li>
    @endif
    

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Interface
    </div> --}}
    
    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item {{ (Route::is('buttons') || Route::is('cards')) ? 'active' : '' }}">
        <a class="nav-link {{ (Route::is('buttons') || Route::is('cards')) ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse {{ (Route::is('buttons') || Route::is('cards')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item {{ Route::is('buttons') ? 'active' : '' }}" href="{{ route('buttons') }}">Buttons</a>
                <a class="collapse-item {{ Route::is('cards') ? 'active' : '' }}" href="{{ route('cards') }}">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item {{ Route::is('colors') ? 'active' : '' }}">
        <a class="nav-link {{ Route::is('colors') ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ Route::is('colors') ? 'show' : '' }}" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item {{ Route::is('colors') ? 'active' : '' }}" href="{{ route('colors') }}">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse {{ Route::is('blank') ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item {{ Route::is('blank') ? 'active' : '' }}" href="{{ route('blank') }}">Blank Page</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item {{ Route::is('charts') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('charts') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item {{ Route::is('tables') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tables') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Stock
    </div> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item {{ Route::is('price_changes') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('price_changes') }}">
        <i class="fas fa-fw fa-dragon"></i>
        <span>Price Changes</span></a>
    </li>

    <li class="nav-item {{ Route::is('set_data') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('set_data') }}">
        <i class="fas fa-database"></i>
        <span>Set Data</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->