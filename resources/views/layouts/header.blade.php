<!-- Header Start -->
<div class="header-area header-transparent">
    <!-- Navbar -->
    <div class="main-header header-sticky" style="margin-left: 0 !important;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2 col-md-1">
                    <div class="logo">
                        <a href="{{ route('home.index') }}"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="" style="max-height: 90px;"></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="menu-main d-flex align-items-center justify-content-end">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    
                                    @guest
                                        <li><a href="{{ route('home.about-us') }}">About Us</a></li>
                                        <li><a href="{{ route('home.product') }}">Our Product</a></li>
                                        <li><a href="{{ route('home.faq') }}">FAQs</a></li>
                                        <li><a href="{{ route('home.contact-us') }}">Contact Us</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endguest
                                    
                                    @auth
                                        <li><a href="{{ route('account.user.index') }}">Home</a></li>
                                        <li><a href="{{ route('account.user.view_change_password') }}">Change Password</a></li>
                                        <li><a href="{{ route('account.user.edit') }}">My Account</a></li>
                                        <li><a href="{{ route('account.loan.apply') }}">Apply for Loan</a></li>
                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pt-140"></div>
<!-- Header End -->