<header class="header">
    <nav class="navbar">
        <!-- Search Box-->
        <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
        </div>
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                    <!-- Navbar Brand --><a href="index-2.html" class="navbar-brand d-none d-sm-inline-block">
                        <div class="brand-text d-none d-lg-inline-block"><strong>Dashboard</strong></div>
                        <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                    <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                    <!-- Notifications-->
                    <li class="nav-item dropdown">
                        <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item"> 
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                </div></a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications  </strong></a>
                            </li>
                        </ul>
                    </li>
                    <!-- Logout -->
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link logout">
                            <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i>
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>