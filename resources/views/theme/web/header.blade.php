<header id="header">
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
                                @if( Auth::user()->role == 'admin')
                                <a href="{{ route('admin.product.index') }}" class="button button-3d button-small m-0">Tampilan Admin</a>
                                @endif
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
                        <li class="menu-item"><a class="menu-link" href="#"><div>Profil</div></a></li>
                        <li class="menu-item"><a class="menu-link" href="#"><div>Kritik & Saran</div></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>