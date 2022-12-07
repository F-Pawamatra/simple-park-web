<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Simple Park</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('slots') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('slots') }}">Parking Slot</a>
                    </li>
                    <li class="{{ Request::is('user-entries') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('user-entries') }}">User Entries</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
