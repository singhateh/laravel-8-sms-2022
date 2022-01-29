<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span> {{ str_replace('_', ' ', config('app.name', 'Jambasangsang')) }}</span></a></div>
                <li class="label">{{ __('Main') }}</li>
                <li class="{{ Route::has('home') ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="ti-home"></i> {{ __('Dashboard') }} </a>
                </li>

                <li class="label">{{ __('HR') }}</li>
                <li><a href="app-event-calender.html"><i class="fa fa-users"></i> {{ __('Users') }} </a></li>
                <li><a href="app-email.html"><i class="fa fa-graduation-cap"></i> {{ __('Admission') }}</a></li>
                <li><a href="app-profile.html"><i class="fa fa-pencil"></i> {{ __('Academic') }}</a></li>
                <li><a href="app-widget-card.html"><i class="fa fa-clock-o"></i> {{ __('Class Routine') }}</a></li>
                <li class="label">{{ __('Features') }}</li>
                <li><a href="app-profile.html"><i class="fa fa-book"></i> {{ __('Library') }}</a></li>
                <li><a href="app-widget-card.html"><i class="fa fa-calendar"></i> {{ __('Attendance') }}</a></li>
                <li><a href="app-widget-card.html"><i class="fa fa-bus"></i> {{ __('School Bus') }}</a></li>
                <li class="label">{{ __('Finance') }}</li>
                <li><a href="form-basic.html"><i class="fa fa-money"></i> {{ __('Accountant') }} </a></li>
                <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> {{ __('Reports') }} </a></li>
                <li class="label">{{ __('Settings') }}</li>
                <li><a href="../documentation/index.html"><i class="fa fa-gear"></i> {{ __('School Settings') }}</a></li>
                <li><a href="../documentation/index.html"><i class="fa fa-gears"></i> {{ __('General Settings') }}</a></li>
                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i>
                        <span>{{ __('Logout') }}</span>
                    </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</div>
