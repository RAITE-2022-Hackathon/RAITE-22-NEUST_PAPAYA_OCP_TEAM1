<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <i class="fas fa-space-station-moon-alt" style="font-size: 3em; margin-top:10px" ></i>
        {{-- <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logo.png') }}" width="65"
             alt="Infyom Logo"> --}}
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            {{-- <img class="navbar-brand-full" src="{{ asset('img/logo.png') }}" width="45px" alt=""/> --}}
            <i class="fas fa-space-station-moon-alt" style="font-size: 2em; margin-top:10px" ></i>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
