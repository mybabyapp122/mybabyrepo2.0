<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            {{-- Dashboard --}}
            <li>
                <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">{{ trans('global.dashboard') }}</span>
                </a>
            </li>

            {{-- User Management --}}
            @can('user_management_access')
                <li class="nav-item {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'mm-active' : '' }}">
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="material-symbols-outlined">people</i>
                        <span class="nav-text">{{ trans('cruds.userManagement.title') }}</span>
                    </a>
                    <ul aria-expanded="false">
                        @can('permission_access')
                            <li>
                                <a href="{{ route('admin.permissions.index') }}" class="{{ request()->is('admin/permissions*') ? 'active' : '' }}">
                                    <i class="material-symbols-outlined">security</i>
                                    <span class="nav-text">{{ trans('cruds.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li>
                                <a href="{{ route('admin.roles.index') }}" class="{{ request()->is('admin/roles*') ? 'active' : '' }}">
                                    <i class="material-symbols-outlined">admin_panel_settings</i>
                                    <span class="nav-text">{{ trans('cruds.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li>
                                <a href="{{ route('admin.users.index') }}" class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                                    <i class="material-symbols-outlined">person</i>
                                    <span class="nav-text">{{ trans('cruds.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            {{-- Additional navigation items can be added here --}}

            {{-- Language Switcher --}}
            <li class="sidebar-lang">
                <a href="javascript:void(0);" id="en-btn">
                    <i class="material-symbols-outlined">language</i>
                    <span class="nav-text">English</span>
                </a>
            </li>
            <li class="sidebar-lang">
                <a href="javascript:void(0);" id="ar-btn">
                    <i class="material-symbols-outlined">translate</i>
                    <span class="nav-text">عربي</span>
                </a>
            </li>
        </ul>
    </div>
</div>
