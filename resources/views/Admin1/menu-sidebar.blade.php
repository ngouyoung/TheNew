<div class="logo-admin">
    <a href="#">
        <img src="{{ asset('images/icon/logo.png') }}" height="48" width="200"/>
    </a>
</div>
<div class="sidebar">
    <nav class="navbar-sidebar">
        <ul>
            <li>
                <a href="#">
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
            <li>
                <a href="#Coupon" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="Coupon">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="col-md-10">
                            Coupon
                        </div>
                    </div>
                </a>
                <div class="collapse Coupon-collapse" id="Coupon">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <a href="#">
                                    All Coupon
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Add New
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Category
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Store
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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