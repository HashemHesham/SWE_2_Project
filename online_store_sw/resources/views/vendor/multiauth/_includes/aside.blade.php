@php
  $usersCount = \App\User::count();
@endphp
<div class="left side-menu">
  <div class="slimscroll-menu" id="remove-scroll">
    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu" id="side-menu">
        <li class="menu-title">Main</li>
        <li>
          <a href="{{ route('admin.home') }}" class="waves-effect"><i class="ti-home"></i><span>Dashboard</span></a>
        </li>

        <li>
          <a href="{{ route('admin.users.index') }}" class="waves-effect"><i class="ti-user"></i><span class="badge badge-primary badge-pill float-right">{{ $usersCount }}</span> <span>Users</span></a>
        </li>


      </ul>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>
  </div>
  <!-- Sidebar -left -->
</div>