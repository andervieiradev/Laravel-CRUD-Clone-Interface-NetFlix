<nav class="col-md-3 col-lg-2 p-2 mr-0 d-none d-md-block sidebar">
    <div class="sidebar-sticky ">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ (($active == 'admin.dashboard') ? 'active' : '') }}" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (($active == 'admin.content.index') ? 'active' : '') }}" href="{{ route('admin.content.index') }}">
                    <i class="fas fa-video"></i>
                    Ver Content
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (($active == 'admin.content.create') ? 'active' : '') }}" href="{{ route('admin.content.create') }}">
                    <i class="fas fa-plus-circle"></i>
                    Add Content
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Outros</span>
        </h6>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('browse') }}" target="_blank">
                    <i class="fas fa-sign-out-alt"></i>
                    Ver Browse
                </a>
            </li>
        </ul>

    </div>
</nav>
