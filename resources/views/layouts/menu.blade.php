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
<li class="side-menus {{ Request::is('') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Table1</span>
    </a>
</li>
<li class="side-menus {{ Request::is('') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Table2</span>
    </a>
</li>
<li class="side-menus {{ Request::is('') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Table3</span>
    </a>
</li>

