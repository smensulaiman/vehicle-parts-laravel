<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{asset('assets/imgs/theme/logo.svg')}}" class="logo" alt="Nest Dashboard" />
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
            <li class="menu-item has-submenu {{ setActive(array('admin.parts.*')) }}">
                <a class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Parts</span>
                </a>
                <div class="submenu">
                    <a class="{{ setActive(array('admin.parts.create')) }}" href="{{ route('admin.parts.create') }}">Import Parts</a>
                    <a href="#">Create Parts</a>
                    <a href="">All Parts</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-orders-1.html">
                    <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                </a>
                <div class="submenu">
                    <a href="page-orders-1.html">Order list 1</a>
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
