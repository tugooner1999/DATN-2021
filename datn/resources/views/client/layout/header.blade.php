<header class="main-header">
    <!-- Header Buttom Start -->
    <div class="header-navigation sticky-nav">
        <div class="container-fluid">
            <div class="row">
                <!-- Logo Start -->
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="{{route('client.homepage')}}"><img style="width:230px;"
                                src="{{asset('assets/client/images/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
                <!-- Logo End -->
                <!-- Navigation Start -->
                <div class="col-md-10 col-sm-10">
                    <!--Main Navigation Start -->
                    <div class="main-navigation d-none d-lg-block">
                        <ul>
                            <li class="menu-dropdown">
                                <a href="{{route('client.homepage')}}">Trang chủ</a>
                            </li>
                            <li class="menu-dropdown">
                                            <a href="{{route('client.shop')}}">Cửa hàng <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('client.shops')}}">Sản phẩm thông thường</a></li>
                                                <li><a href="{{route('client.allow-market')}}">Đi chợ hộ !</a></li>
                                            </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="{{route('client.about')}}">Giới thiệu</a>
                            </li>
                            <li><a href="{{route('client.contact')}}">Liên hệ</a></li>
                        </ul>
                    </div>
                    <!--Main Navigation End -->
                    <!--Header Bottom Account Start -->
                    <div class="header_account_area">
                        <div class="header_account_list search_list">
                            <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="#">
                                    <input placeholder="Tìm mọi thứ ở đây ..." type="text" />
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <!--Login info Start -->
                        <div class="cart-info d-flex">
                            @if (Auth::check())
                                <div class="main-navigation" style="margin: 0px;">
                                    <ul>
                                        <li class="menu-dropdown">
                                            <span><b><i class="fa fa-user" aria-hidden="true"></i> Hello: {{Auth::user()->name}}</b></span>
                                            <ul class="sub-menu">
                                            @if (Auth::user()->role_id == 1)
                                                <li><a href="{{route('admin.dashboard')}}">Trang Quản Trị</a></li>
                                            @endif
                                                <li><a href="#">Thông tin cá nhân</a></li>
                                                <li><a href="#">Yêu thích</a></li>
                                                <li><a href="{{route('Auth.Logout')}}" class="text-danger">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            @else
                            <a href="{{route('client.login')}}" class="login text-dark"><b>Đăng nhập / Đăng kí</b></a>
                            @endif
                        </div>
                        <!--Login info End -->
                        <!--Cart info Start -->
                        <div class="cart-info d-flex">
                            <div class="mini-cart-warp">
                                <a href="{{route('client.cart')}}" class="count-cart"></a>
                            </div>
                            <!--Login info End -->
                            <!--Cart info Start -->
                            
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
                <!-- mobile menu -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="shop-left-sidebar.html">Sản phẩm</a></li>
                                <li><a href="about.html">giới thiệu</a></li>
                                <li><a href="contact.html">Liên hệ</a></li>
                                <li><a href="my-account.html">Tài khoản</a></li>
                                <li><a href="" style="text-decoration: underline;">Đăng xuất</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- mobile menu end-->
            </div>
        </div>
        <!--Header Bottom Account End -->
</header>