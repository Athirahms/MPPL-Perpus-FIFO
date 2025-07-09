<div id="header-wrap">
    <div class="top-content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex">
                    <ul class="list-inline"> <!-- Changed to list-inline -->
                        <li class="list-inline-item"> <!-- Added list-inline-item -->
                            <a href="https://www.facebook.com/?locale=id_ID"><i class="icon icon-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"> <!-- Added list-inline-item -->
                            <a href="https://x.com"><i class="icon icon-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"> <!-- Added list-inline-item -->
                            <a href="https://www.youtube.com/"><i class="icon icon-youtube-play"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="right-element d-flex justify-content-end">
                        <div class="action-menu">
                            <div class="search-bar">
                                <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                    <i class="icon icon-search"></i>
                                </a>
                                <form role="search" method="get" class="search-box">
                                    <input class="search-field text search-input" placeholder="Search" type="search">
                                </form>
                            </div>
                        </div>
                    </div><!--top-right-->
                </div>
            </div>
        </div>
    </div><!--top-content-->

    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="main-logo">
                        <a href="{{ route('home') }}"><img src="https://assets.nsd.co.id/images/kampus/logo/Logo-Esa-Unggul-Unversitas-Esa-Unggul-PNG.png" alt="logo" style="width: 50px; height: auto;"></a>
                    </div>
                </div>

                <div class="col-md-10">
                    <nav id="navbar">
                        <div class="main-menu stellarnav">
                            <ul class="menu-list d-flex justify-content-end list-unstyled mb-0">
                                <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#pages" class="nav-link">Pages</a>
                                    <ul>
                                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                                        <li class="{{ request()->routeIs('profile') ? 'active' : '' }}"><a href="{{ route('profile') }}">Profile</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="#featured" class="nav-link">Featured</a></li>
                                <li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
                            </ul>

                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
<!--header-wrap-->