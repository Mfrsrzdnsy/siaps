<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Si<span>Aps</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">data</li>
            <li class="nav-item">
                <a href="/siswa" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Data Anak
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/keluarga" class="nav-link">
                    <i class="link-icon" data-feather="table"></i>
                    <span class="link-title">Infromasi Keluarga</span>
                </a>
            </li>
            <li class="nav-item nav-category">User</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">User Login</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('user.create') }}" class="nav-link">Add User</a>
                </li>
                <li class="nav-item">
                  <a href="/user" class="nav-link">Data User</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
    </div>
</nav>