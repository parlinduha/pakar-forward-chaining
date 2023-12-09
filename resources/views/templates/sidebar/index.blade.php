  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-tools"></i>
          </div>
          <div class="sidebar-brand-text mx-3">PakarPrint</div>
      </a>

      <div class="sidebar-heading mt-4">
          Menu Navigations
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- Nav Item - Charts -->

      @if (auth()->user()->role == 'admin')
          <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.index') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.about') }}">
                  <i class="fas fa-fw fa-info"></i>
                  <span>About</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                  aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Master</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="{{ route('gejala.index') }}">Gejala</a>
                      <a class="collapse-item" href="{{ route('kerusakan.index') }}">Kerusakan</a>
                      <a class="collapse-item" href="{{ route('knowlidge.index') }}">Basis Pengetahuan</a>
                  </div>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('edu.index') }}">
                  <i class="fas fa-play-circle"></i>
                  <span>Education</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('user.index') }}">
                  <i class="fas fa-fw fa-users"></i>
                  <span>User Management</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('history.index') }}">
                  <i class="fas fa-fw fa-history"></i>
                  <span>History Diagnosa</span></a>
          </li>
      @endif

      @if (auth()->user()->role == 'user')
          <li class="nav-item">
              <a class="nav-link" href="{{ route('konsultasi.index') }}">
                  <i class="fas fa-solid fa-stethoscope"></i>
                  <span>Konsultasi</span></a>
          </li>
      @endif

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


  </ul>
