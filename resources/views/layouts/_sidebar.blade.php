<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark" id="accordionSidebar">
     <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-envira"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Naughty or Nice</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
@auth
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard', Auth::id()) }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('benchmark', Auth::id())}}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Benchmark</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('analytics', Auth::id())}}" >
          <i class="fas fa-fw fa-wrench"></i>
          <span>Analytics</span>
        </a>      
      </li>



      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('news.index')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>News & Tips</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('contact', Auth::id())}}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Contact</span>
        </a>
     
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
      @auth
        <a class="nav-link" href="{{route('users.show', Auth::id())}}">
        @else
        <a class="nav-link" href="{{route('account', Auth::id())}}">
        @endauth
          <i class="fas fa-fw fa-table"></i>
          <span>Account</span></a>
      </li>
      @endauth
      <li class="nav-item">
        <a class="nav-link" href="{{ route('testing.table') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Testing fake statistics</span></a>
      </li>
		
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
<!--       <div class="text-center d-none d-md-inline"> -->
<!--         <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
<!--       </div> -->
		@if (Route::has('login'))
                <li class="nav-item">
                    @auth
                        <a class = "nav-link" href="{{ url('/') }}">Home</a>
                                      <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">Logout</button>
                </form>
              </a>
                    @else
                        <a class = "nav-link" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class = "nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    <li>
            @endif
	
    </ul>
    <!-- End of Sidebar -->