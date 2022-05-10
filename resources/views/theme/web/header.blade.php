<header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                    <div class="header-logo d-flex align-items-center">
                        <a href="{{ route('home') }}">
                            <img class="img-full" src="{{ asset('img/admin/logo.png') }}" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-xl-10 col-sm-6 col-6 position-static d-flex justify-content-end col-custom">
                    <nav class="main-nav mr-5 d-none d-lg-flex">
                        <ul class="nav">
                            <li>
                                <a class="active" href="{{ route('home') }}">
                                    <span class="menu-text"> Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product.index') }}">
                                    <span class="menu-text"> Gift Bouquet</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="menu-text"> Bouquet Request</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('critics') }}">
                                    <span class="menu-text"> Kritik & Saran</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}">
                                    <span class="menu-text"> Profile</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-right-area main-nav">
                        @auth
                        <ul class="nav">
                            <li class="minicart-wrap">
                                <a href="#" class="minicart-btn toolbar-btn">
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                    <div class="single-cart-item">
                                        <div class="cart-img">
                                            <img src="{{ asset('img/admin/blank.png') }}" alt="">
                                        </div>
                                        <div class="cart-text">
                                            <h5 class="title"><a href="cart.html">Hai, {{ Auth::user()->name }}</a></h5>
                                            <div class="cart-text-btn">
                                                <button type="button"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-links d-flex justify-content-between">
                                        @if( Auth::user()->role == 'admin')
                                        <a class="btn flosun-button secondary-btn rounded-0" href="{{ route('admin.product.index') }}">Tampilan Admin</a>
                                        @endif
                                        <a class="btn flosun-button secondary-btn rounded-0" href="{{ route('user.auth.logout') }}">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endauth
                        @guest
                        <ul class="nav">
                            <li class="minicart-wrap">
                                <a href="{{ route('user.auth.index') }}" class="minicart-btn toolbar-btn">
                                    Login
                                </a>
                            </li>
                        </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




{{-- <header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <div id="logo">
                    <a href="{{ route('home') }}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ asset('img/logo/logo.png') }}" alt="Canvas Logo"></a>
                    <a href="{{ route('home') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('img/logo/logo.png') }}" alt="Canvas Logo"></a>
                </div>
                <div class="header-misc">
                    @auth
                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                        <a href="#" id="top-cart-trigger"><i class="icon-user4"></i></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Hai, {{ Auth::user()->name }}</h4>
                            </div>
                            <div class="top-cart-action">
                                <a href="{{ route('user.auth.logout') }}" class="button button-3d button-small m-0">Logout</a>
                            </div>
                        </div>
                    </div>
                    @endauth
                    @guest
                    <a href="{{ route('user.auth.index') }}" class="cart-contents"> Login </a>
                    @endguest
                </div>
                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>
                <nav class="primary-menu">
                    <ul class="menu-container">
                        <li class="menu-item current"><a class="menu-link" href="{{ route('home') }}"><div>Home</div></a></li>
                        <li class="menu-item"><a href="{{ route('product.index') }}" class="menu-link" ><div>Gift Bouquet</div></a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>Bouquet Request</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('profile') }}"><div>Profil</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>Kritik & Saran</div></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header> --}}