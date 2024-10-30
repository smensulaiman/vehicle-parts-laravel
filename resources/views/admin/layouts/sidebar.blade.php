<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{route('admin.dashboard')}}" class="brand-wrap">
            <img src="{{asset('assets/imgs/theme/logo.png')}}" class="logo" alt="Nest Dashboard" />
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item {{ setActive(array('admin.dashboard')) }}">
                <a class="menu-link {{ setActive(array('admin.dashboard')) }}" href="{{ route('admin.dashboard') }}">
                    <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item has-submenu {{ setActive(array('admin.shipment.*')) }}">
                <a class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-directions_boat"></i>
                    <span class="text">Shipment</span>
                </a>
                <div class="submenu">
                    <a class="{{ setActive(array('admin.shipment.create')) }}" href="{{ route('admin.shipment.create') }}">Import Shipment</a>
                    <a class="{{ setActive(array('admin.shipment.index')) }}" href="{{ route('admin.shipment.index') }}">All Shipments</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{ setActive(array('admin.vehicle.*', 'admin.part.index')) }}">
                <a class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-local_shipping"></i>
                    <span class="text">Vehicle</span>
                </a>
                <div class="submenu">
                    <a class="{{ setActive(array('admin.vehicle.index')) }}" href="{{ route('admin.vehicle.index') }}">Vehicles</a>
                    <a class="{{ setActive(array('admin.part.index')) }}" href="{{ route('admin.part.index') }}">Parts Category</a>
                </div>
            </li>
{{--            <li class="menu-item has-submenu {{ setActive(array('admin.part.*')) }}">--}}
{{--                <a class="menu-link" href="page-products-list.html">--}}
{{--                    <i class="icon material-icons md-qr_code"></i>--}}
{{--                    <span class="text">Part</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a class="{{ setActive(array('admin.part.create')) }}" href="{{ route('admin.part.create') }}">Add Part</a>--}}
{{--                    <a class="{{ setActive(array('admin.part.index')) }}" href="{{ route('admin.part.index') }}">All Parts</a>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">POS</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('admin.cart.create') }}">Cart</a>
                    <a href="page-orders-2.html">Order list 2</a>
                    <a href="page-orders-detail.html">Order detail</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" disabled href="#">
                    <i class="icon material-icons md-pie_chart"></i>
                    <span class="text">Statistics</span>
                </a>
            </li>
        </ul>
        <hr />
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">
                    <a href="page-settings-1.html">Setting sample 1</a>
                    <a href="page-settings-2.html">Setting sample 2</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-blank.html">
                    <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                </a>
            </li>
        </ul>
        <br />
        <br />
    </nav>
</aside>
