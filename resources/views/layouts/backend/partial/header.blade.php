<div class="navbar-wrapper">
    <div class="navbar-container content">
        <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav float-right">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="{{route('home')}}" target="__blank" title="View Website">
                        <i class="ficon feather icon-external-link"></i>
                    </a>
                </li>
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name text-bold-600">
                                {{ Auth::user()->name }}
                            </span>
                            <span class="user-status">Available</span>
                        </div>
                        <span>
                            <img class="round" src="{{asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i>Profile</a>
                        <a class="dropdown-item" href="app-email.html"><i class="feather icon-settings"></i> Profile Setting</a>
                        <a class="dropdown-item" href="app-todo.html"><i class="feather icon-lock"></i>Forget Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="feather icon-power"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>