<div class="flex-shrink-0 p-5 sidebar sidebar-practitioner" style="width: 280px;">
    <h3>Practitioners Dashboard</h3>
    <p>Welcome {{ Auth::user()->name }}</p>
    <ul class="list-unstyled ps-0">
        <li class="border-top mt-5 mb-3"></li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#notifications-collapse"
                aria-expanded="{{ request()->routeIs('practitioner.dashboard') || request()->routeIs('practitioner.accountdetails') ? 'true' : 'false' }}">
                Dashboard
            </button>
            <div class="collapse {{ request()->routeIs('practitioner.dashboard') || request()->routeIs('practitioner.accountdetails') ? 'show' : '' }}"
                id="notifications-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('practitioner.dashboard') }}"
                            class="link-dark rounded {{ request()->routeIs('practitioner.dashboard') ? 'active' : '' }}">Notifications</a>
                    </li>
                    <li><a href="{{ route('practitioner.accountdetails') }}"
                            class="link-dark rounded {{ request()->routeIs('practitioner.accountdetails') ? 'active' : '' }}">Account
                            Details</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#accounts-collapse"
                aria-expanded="{{ request()->routeIs('practitioner.serviceuser') ? 'true' : 'false' }}">
                Accounts
            </button>
            <div class="collapse {{ request()->routeIs('practitioner.serviceuser') ? 'show' : '' }}"
                id="accounts-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('practitioner.serviceuser') }}"
                            class="link-dark rounded {{ request()->routeIs('practitioner.serviceuser') ? 'active' : '' }}">Services
                            Users</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#resources-collapse"
                aria-expanded="{{ request()->routeIs('practitioner.resource') ? 'true' : 'false' }}">
                Resources
            </button>
            <div class="collapse {{ request()->routeIs('practitioner.resource') ? 'show' : '' }}"
                id="resources-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{route('practitioner.workbookguidance')}}" class="link-dark rounded text-nowrap">Workbooks
                            (Guidance)</a></li>
                    <li><a href="{{ route('practitioner.resource') }}"
                            class="link-dark rounded {{ request()->routeIs('practitioner.resource') ? 'active' : '' }}">My
                            Resources</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-4 mt-1">
            <a class="btn btn-toggle align-items-center rounded" href="{{ route('practitioner.logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color:#fff">
                Sign out
            </a>
            <form id="logout-form" action="{{ route('practitioner.logout') }}" method="post">
                @csrf
            </form>

        </li>
    </ul>
</div>
