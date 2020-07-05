<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="../assets/img/logo.png" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link {{\Request::is('/') ? 'active' : ''}}" href="{{route('cashflow')}}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Cashflow Overview</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{\Request::is('projects') ? 'active' : ''}}" href="{{route('projects')}}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Projects</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{\Request::is('workflow') ? 'active' : ''}}" href="{{route('workflow')}}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Projects Workflow</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>