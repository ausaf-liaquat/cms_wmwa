<div class="flex-shrink-0 p-5 sidebar sidebar-admin" style="width: 280px;">
    <p style="font-size: 26px;font-weight:bold">Admin Dashboard</p>
    <p>Welcome {{ Auth::user()->name }}</p>
    <ul class="list-unstyled ps-0">
        <li class="border-top mt-5 mb-3"></li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#notifications-collapse"
                aria-expanded="{{ request()->routeIs('admin.dashboard') ? 'true' : 'false' }}">
                Dashboard
            </button>
            <div class="collapse {{ request()->routeIs('admin.dashboard') ? 'show' : '' }}" id="notifications-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.dashboard') }}"
                            class="link-dark rounded {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Notifications</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#accounts-collapse"
                aria-expanded="{{ request()->routeIs('admin.practitioner') || request()->routeIs('admin.serviceuser') ? 'true' : 'false' }}">
                Accounts
            </button>
            <div class="collapse {{ request()->routeIs('admin.practitioner') || request()->routeIs('admin.serviceuser') ? 'show' : '' }}"
                id="accounts-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.practitioner') }}"
                            class="link-dark rounded {{ request()->routeIs('admin.practitioner') ? 'active' : '' }}">Practitioners</a>
                    </li>
                    <li><a href="{{ route('admin.serviceuser') }}"
                            class="link-dark rounded {{ request()->routeIs('admin.serviceuser') ? 'active' : '' }}">Services
                            Users</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#resources-collapse"
                aria-expanded="{{ request()->routeIs('admin.resources') ? 'true' : 'false' }}">
                Resources
            </button>
            <div class="collapse {{ request()->routeIs('admin.resources') ? 'show' : '' }}" id="resources-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('admin.resources') }}"
                            class="link-dark rounded {{ request()->routeIs('admin.resources') ? 'active' : '' }}">View
                            All</a></li>
                    <li><a class="link-dark rounded" data-bs-toggle="modal" data-bs-target="#addnew">Add New</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#forms-collapse" aria-expanded="false">
                Forms
            </button>
            <div class="collapse" id="forms-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{route('form.certificate')}}" class="link-dark rounded">Accreditation Certificate Request Form</a></li>
                    <li><a href="#" class="link-dark rounded">General Enquiry Form</a>
                    </li>
                    <li><a href="#" class="link-dark rounded">Job Application Form</a></li>
                    <li><a href="#" class="link-dark rounded">Referral Form</a></li>
                    <li><a href="#" class="link-dark rounded">Referral Form (Additional Content)</a></li>
                    <li><a href="#" class="link-dark rounded">Referral Form (CDAS)</a></li>
                    <li><a href="#" class="link-dark rounded">Referral Form (C-19)</a></li>
                    <li><a href="#" class="link-dark rounded">Volunteer Expression of Interest</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-4 mt-1">

            <a class="btn btn-toggle align-items-center rounded" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color:#fff">
                Sign out
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="post">
                @csrf
            </form>

        </li>
    </ul>
</div>
