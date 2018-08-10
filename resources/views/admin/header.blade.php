<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="#">
                    <img src="{{asset('images/icon/logo.png')}}" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a href="{{ url('admin/dashboard') }}">
                        <div class="row">
                            <div class="col-md-1 col-ms-1 col-2">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="col-md-11 col-ms-11 col-10">
                                Dashboard
                            </div>
                        </div>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <div class="row">
                            <div class="col-md-1 col-ms-1 col-2">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="col-md-11 col-ms-11 col-10">
                                Coupon
                            </div>
                        </div>
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="#">All Coupon</a>
                        </li>
                        <li>
                            <a href="#">AddNew</a>
                        </li>
                        <li>
                            <a href="#">Category</a>
                        </li>
                        <li>
                            <a href="#">Store</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <div class="row">
                            <div class="col-md-1 col-ms-1 col-2">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="col-md-11 col-ms-11 col-10">
                                Calendar
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="row">
                            <div class="col-md-1 col-ms-1 col-2">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-md-11 col-ms-11 col-10">
                                Maps
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="row">
                            <div class="col-md-1 col-ms-1 col-2">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <div class="col-md-11 col-ms-11 col-10">
                                Logout
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>