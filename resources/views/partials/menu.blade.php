
{{-- <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li> --}}
<div class="sidebar">

    <nav class="sidebar-nav">
    @can('user_access')
        <ul class="nav">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon  fas fa-fw fa-tachometer-alt">
              
                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    @can('permission_access')
                        <li class="nav-item">
                            <a href="{{route('admin.motors.index')}}" class="nav-link {{ request()->is('admin/motors') || request()->is('admin/motors/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    {{-- @can('role_access') --}}
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    {{-- @endcan --}}
                    @can('user_access')

                        <li class="nav-item">
                            <a href="{{route('admin.users.create')}}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}?role=2" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{-- Mechanic --}}
                                {{ trans('cruds.user.title_mechanic') }} 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}?role=5" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{-- Customers Services --}}
                                {{ trans('cruds.user.title_customer_service') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}?role=3" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{-- Chasiers --}}
                                {{ trans('cruds.user.title_chasier') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}?role=7" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{-- Debt Colectors --}}
                                {{ trans('cruds.user.title_debt_Colector') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            {{--  Motors Manangement  --}}
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-motorcycle nav-icon">

                    </i>
                    {{ trans('cruds.motorManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    @can('motor_access')
                        <li class="nav-item">
                            <a href="{{route('admin.motors.index')}}" class="nav-link {{ request()->is('admin/motors') || request()->is('admin/motors/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-motorcycle nav-icon">

                                </i>
                                {{ trans('cruds.motors.title') }} 
                            </a>
                        </li>
                    @endcan
                    @can('sparepart_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.spareparts.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.spareparts.title') }} 
                            </a>
                        </li>
                    @endcan
                    @can('service_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.services.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-cogs nav-icon">

                                </i>
                                {{ trans('cruds.services.title') }} 
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
               <i class="nav-icon fas fa-fw fa-sign-out-alt">
                </i>
                    {{ trans('global.logout') }}
             </a>
                 {{--  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>  --}}
            </li>
        @endcan
        
        </ul>
    </nav>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
   