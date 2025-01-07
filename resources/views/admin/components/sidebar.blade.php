<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <x:sidebar.app-logo />

    <div class="menu-inner-shadow"></div>

    <x:sidebar.wrapper>
        <x:sidebar.muted name="Dashboard" />

        <x:sidebar.menu
            :activeCondition="Route::is('example.dashboard')"
            name="Dashboard"
            href="{{ route('example.dashboard') }}"
            iconClass="bx bx-grid-alt"
        />

        <x:sidebar.menu
            :activeCondition="Route::is('example.profile')"
            name="Profil Saya"
            href="{{ route('example.profile') }}"
            iconClass="bx bx-user"
        />

        <x:sidebar.menu
            :activeCondition="Route::is('example.users.*')"
            name="Users"
            href="javascript:void(0);"
            iconClass="bx bx-group"
            isToggle="true"
        >
            <x:sidebar.menu-sub-wrapper>
                <x:sidebar.menu-link
                    :activeCondition="Route::is('example.users.administrator.*')"
                    name="Administrator"
                    href="{{ route('example.users.administrator.index') }}"
                />
            </x:sidebar.menu-sub-wrapper>
        </x:sidebar.menu>
    </x:sidebar.wrapper>
</aside>
<!-- / Menu -->
