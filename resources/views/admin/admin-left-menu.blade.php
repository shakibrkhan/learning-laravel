<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin-panel')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">LV CMS Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin-panel')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
        <i class="fas fa-fw fa-edit"></i>
        <span>Posts</span>
      </a>
      <div id="collapsePosts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">All Posts</a>
            <a class="collapse-item" href="">Add New</a>
            <a class="collapse-item" href="">Categories</a>
            <a class="collapse-item" href="">Tags</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedia" aria-expanded="true" aria-controls="collapseMedia">
        <i class="fas fa-fw fa-images"></i>
        <span>Media</span>
      </a>
      <div id="collapseMedia" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="">Library</a>
          <a class="collapse-item" href="">Add New</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-file-alt"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('page_list')}}">All Pages</a>
          <a class="collapse-item" href="">Add New</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
        <i class="fas fa-fw fa-user-friends"></i>
        <span>Users</span>
      </a>
      <div id="collapseUsers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">All Users</a>
            <a class="collapse-item" href="">Add New</a>
            <a class="collapse-item" href="">Profile</a>
            <a class="collapse-item" href="">User Role Editor</a>
        </div>
      </div>
    </li>    
    
    <!-- Nav Item - Comments -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-comments"></i>
        <span>Comments</span></a>
    </li>

    <!-- Nav Item - Contact -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Contact</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-bars"></i>
        <span>Menus</span></a>
    </li>
    
    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-fw fa-cog"></i>
        <span>Settings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>