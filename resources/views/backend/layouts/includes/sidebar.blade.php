<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? '' : 'collapsed' }}"
        href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading text-info">General Management ------------------------------</li>

    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() == 'courses.index' ? '' : 'collapsed' }}"
        href="{{ route('courses.index') }}">
        <i class="bi bi-book-fill"></i>
        <span>Courses</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() == 'lets-learn.*' ? '' : 'collapsed' }}"
        href="{{ route('lets-learn.index') }}">
        <i class="bi bi-pencil-square"></i>
        <span>Lets Learn</span>
      </a>
    </li>

    {{-- <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() == 'video.index' ? '' : 'collapsed' }}"
        href="{{ route('courses.index') }}">
        <i class="bi bi-book-fill"></i>
        <span>Videos</span>
      </a>
    </li> --}}

    <li class="nav-heading text-info">User & Role Management ------------------------</li>

    {{-- @dd(Route::currentRouteName()); --}}
    @can('list-role')
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() == 'permissions.index' ? '' : 'collapsed' }}"
        href="{{ route('permissions.index') }}">
        <i class="bi bi-shield-lock-fill"></i>
        <span>Permissions</span>
      </a>
    </li>
    @endcan

    @can('list-role')
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() == 'roles.index'  || Route::currentRouteName() == 'role.permissions' ? '' : 'collapsed' }}"
        href="{{ route('roles.index') }}">
        <i class="bi bi-person-lines-fill"></i>
        <span>Roles</span>
      </a>
    </li>
    @endcan

    <!-- Users Nav -->
    @canany(['list-user', 'create-user'])
    <li class="nav-item">
      <a class="nav-link {{ Route::is('users.*') ? '' : 'collapsed' }}" data-bs-target="#users-nav"
        data-bs-toggle="collapse" href="#">
        <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="users-nav" class="nav-content collapse {{ Route::is('users.*') ? 'show' : '' }}"
        data-bs-parent="#sidebar-nav">
        @can('create-user')
        <li>
          <a href="{{ route('users.create') }}"
            class="{{ Route::currentRouteName() == 'users.create' ? 'active nav-link' : '' }}">
            <i class="bi bi-circle"></i><span>Add User</span>
          </a>
        </li>
        @endcan
        @can('list-user')
        <li>
          <a href="{{ route('users.index') }}"
            class="{{ Route::currentRouteName() == 'users.index' ? 'active nav-link' : '' }}">
            <i class="bi bi-circle"></i><span>Users List</span>
          </a>
        </li>
        @endcan
      </ul>
    </li>
    @endcanany
    <!-- End Users Nav -->
  </ul>

</aside><!-- End Sidebar-->