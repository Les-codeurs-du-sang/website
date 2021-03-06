<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/icons/logo.png') }}" alt="" width="30" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto border-lg-bottom-0 pt-2 pt-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->routeIS('blood.home') ? 'active' : '' }}" aria-current="page" href="{{ route('blood.home') }}">Don du sang</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIS('blood_marrow.home') ? 'active' : '' }}" href="{{ route('blood_marrow.home') }}">Moelle osseuse</a></li>
            </ul>
            @guest
            <form class="d-flex py-3 py-lg-0">
                <a class="btn {{ request()->routeIS('blood_marrow.home') ? 'btn-outline-warning' : 'btn-outline-danger' }} rounded-pill order-0" href="{{ route('login') }}">Se connecter</a>
            </form>
            @else
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu">
                    @if(Auth::user()->isAdmin == 1)
                    <a href="{{ route('admin.index') }}" class="dropdown-item">Panneau d'administration</a><hr />
                    @endif
                    <form action="{{ route('logout') }}" method="POST"  aria-labelledby="dropdownMenuButton1">
                        @csrf
                        <button class="dropdown-item" type="submit">Se d??connecter</button>
                    </form>
                </div>
            </div>
            @endguest
        </div>
    </div>
</nav>
