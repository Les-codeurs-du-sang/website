<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder mb-0">
                @if(request()->routeIS('admin.index'))
                    Tableau de bord
                @elseif(Request::is('admin/users*'))
                    Utilisateurs
                @elseif(Request::is('admin/promotions*'))
                    Promotions
                @elseif(Request::is('admin/questions*'))
                    Questions
                @elseif(Request::is('admin/journees*'))
                    Journées
                @else
                    Dashboard
                @endif
            </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                        <div class="dropdown">
                            <button class="dropdown-toggle bg-transparent border-0 text-2xl text-gray-500 text-bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @csrf
                                <button class="dropdown-item" type="submit">Se déconnecter</button>
                            </form>
                        </div>
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
