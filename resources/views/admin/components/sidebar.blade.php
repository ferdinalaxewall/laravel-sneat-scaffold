<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <img src="{{ asset('assets/landing-page/images/J-Tripロゴ.svg') }}" width="85" alt="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>

        <li class="menu-item @if(Route::is('example.dashboard')) active @endif">
            <a href="{{ route('example.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item @if(Route::is('example.profile')) active @endif">
            <a href="{{ route('example.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Profil Saya">Profil Saya</div>
            </a>
        </li>

        <!-- Users -->
        <li class="menu-item @if(Route::is('admin.users.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Users">Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Route::is(('admin.users.administrator.*'))) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Administrator">Administrator</div>
                    </a>
                </li>

                <li class="menu-item @if(Route::is(('admin.users.staff.*'))) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Staff">Staff</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->