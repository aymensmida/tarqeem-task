@php
$isAnyGuardLoggedIn = Auth::guard('admin')->check() || Auth::guard('web')->check();
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('Guest.index') }}">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            @if(!$isAnyGuardLoggedIn)
            <div class="navbar-nav ms-auto">
                <a class="nav-link  {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>

            </div>
            @else
            @auth('web')
            <div class="navbar-nav ms-auto">
                <a class="nav-link " href="{{ route('home') }}"><i class="fa fa-user"></i> {{ Auth::guard('web')->user()->first_name }}</a>
                <a class="nav-link" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>

            </div>
            @endauth
            @auth('admin')
            <div class="navbar-nav ms-auto">
                <a class="nav-link " href="{{ route('admin.index') }}"><i class="fa fa-user"></i> {{ Auth::guard('admin')->user()->name }}</a>
                <a class="nav-link" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>

            </div>
            @endauth

            @endif

        </div>
    </div>

</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
