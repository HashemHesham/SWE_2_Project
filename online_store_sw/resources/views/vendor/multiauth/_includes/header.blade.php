<div class="topbar">
  <!-- LOGO -->
  <div class="topbar-left">
    <a href="index.html" class="logo">
    <span><img src="#" alt="" height="18" style="width: 70%; height: 63%"> </span>
    <i><img src="#" alt="" height="22"></i>
    </a>
  </div>
  <nav class="navbar-custom">
    <ul class="navbar-right list-inline float-right mb-0">
      <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
        <form role="search" class="app-search">
          <div class="form-group mb-0">
            <input type="text" class="form-control" placeholder="Search..">
             <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </li>

      <!-- full screen -->
      <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
        <a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a>
      </li>

      <li class="dropdown notification-list list-inline-item">
        <div class="dropdown notification-list nav-pro-img">
          <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="#" alt="user" class="rounded-circle">
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown">
            <!-- item--> 
            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>
          </div>
          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </li>
    </ul>
    <ul class="list-inline menu-left mb-0">
      <li class="float-left">
        <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
      </li>

    </ul>
    
  </nav>
</div>