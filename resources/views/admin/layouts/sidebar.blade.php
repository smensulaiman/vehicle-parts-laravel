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
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-directions_boat"></i>
                    <span class="text">Shipment</span>
                </a>
                <div class="submenu">
                    <a class="{{ setActive(array('admin.shipment.create')) }}" href="{{ route('admin.shipment.create') }}">Import Shipment</a>
                    <a class="{{ setActive(array('admin.shipment.index')) }}" href="{{ route('admin.shipment.index') }}">All Shipments</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{ setActive(array('admin.vehicle.*')) }}">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-local_shipping"></i>
                    <span class="text">Vehicle</span>
                </a>
                <div class="submenu">
                    <a class="{{ setActive(array('admin.vehicle.index')) }}" href="{{ route('admin.vehicle.index') }}">All Vehicles</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{ setActive(array('admin.part-category.*')) }}">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-qr_code"></i>
                    <span class="text">Parts</span>
                </a>
                <div class="submenu">
                    <a href="#">All Parts</a>
                    <a class="{{ setActive(array('admin.part-category.index')) }}" href="{{ route('admin.part-category.index') }}">Parts Category</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{ setActive(array('admin.cart.*')) }}">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">POS</span>
                </a>
                <div class="submenu">
                    <a class="{{ setActive(array('admin.cart.create')) }}" href="{{ route('admin.cart.create') }}">Cart</a>
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
                    <a href="#">Profile Setting</a>
                </div>
            </li>
        </ul>
    </nav>
</aside>
