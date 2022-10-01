@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
<li class="menu-header">Dashboard</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="menu-header">Management</li>
<li class="side-menus {{ Request::is('Users') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Users') }}">
        <i class=" fas fa-users"></i><span>Users</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-id-card"></i><span>Posts</span>
    </a>
</li>
@else
<li class="menu-header">Dashboard</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Home</span>
    </a>
</li>
<li class="menu-header">Management</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-id-card"></i><span>Profile</span>
    </a>
</li>
@endif
