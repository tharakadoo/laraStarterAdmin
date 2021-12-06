<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Dashboard') }}
        </a>
    </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                </svg>
                {{ __('Users') }}
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('roles.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-group') }}"></use>
                </svg>
                {{ __('Roles') }}
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                </svg>
                {{ __('Clients') }}
            </a>
        </li>

{{--        <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>--}}

{{--        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>--}}

{{--        <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>--}}

{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{ route('users.index') }}">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>--}}
{{--            </svg>--}}
{{--            {{ __('Users') }}--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{ route('about') }}">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>--}}
{{--            </svg>--}}
{{--            {{ __('About us') }}--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    <li class="nav-group" aria-expanded="false">--}}
{{--        <a class="nav-link nav-group-toggle" href="#">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('icons/coreui.svg#cil-star') }}"></use>--}}
{{--            </svg>--}}
{{--            Two-level menu--}}
{{--        </a>--}}
{{--        <ul class="nav-group-items" style="height: 0px;">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#" target="_top">--}}
{{--                    <svg class="nav-icon">--}}
{{--                        <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>--}}
{{--                    </svg>--}}
{{--                    Child menu--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </li>--}}
    @endauth
</ul>
