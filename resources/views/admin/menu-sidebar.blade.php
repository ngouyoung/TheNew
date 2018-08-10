<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ url('admin/dashboard') }}">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="col-md-10">
                                Dashboard
                            </div>
                        </div>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="col-md-10">
                                Coupon
                            </div>
                        </div>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">All Coupon</a>
                        </li>
                        <li>
                            <a href="#">
                                Add New
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/category') }}">
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Stores
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="col-md-10">
                                Calendar
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-md-10">
                                Maps
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <div class="col-md-10">
                                Logout
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>