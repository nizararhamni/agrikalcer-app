<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #10650c"  id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route ('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset ('img/AgriKalcer.png')}}" width="45" height="45">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: #ffffff;">AgriKalcer <sup>App</sup></div>
    </a>
    
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route ('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <hr class="sidebar-divider">
    
    <div class="sidebar-heading">
        Analytics
    </div>

    <li class="nav-item {{ request()->routeIs('recommender') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route ('recommender') }}">
            <i class="fas fa-fw fa-robot"></i>
            <span>Recommender</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('statistics') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route ('statistics') }}">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Statistics</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('photovoltaic') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route ('photovoltaic') }}">
            <i class="fas fa-fw fa-solar-panel"></i>
            <span>Photovoltaic</span>
        </a>
    </li>
    
    <hr class="sidebar-divider">
    
    <div class="sidebar-heading">
        Data
    </div>

    <li class="nav-item {{ request()->routeIs('history') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route ('history') }}">
            <i class="fas fa-fw fa-history"></i>
            <span>History</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('notifications') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route ('notifications') }}">
            <i class="fas fa-fw fa-bell"></i>
            <span>Notificationn</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>