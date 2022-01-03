<div class="flex-shrink-0 p-5 sidebar sidebar-service-users" style="width: 280px;">
    <h3>Service User Dashboard</h3>
    <p>Welcome {{ \Str::ucfirst(Auth::user()->name) }}</p>

      <a class="btn btn-toggle align-items-center rounded" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color:#fff">
          Sign out
      </a>
      {{-- <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
          @csrf
      </form> --}}

  
    <ul class="list-unstyled ps-0">
        <li class="border-top mt-5 mb-3"></li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#notifications-collapse"
                aria-expanded="{{ request()->routeIs('serviceuser.accountdetails') || request()->routeIs('user.dashboard') ? 'true' : 'false' }}">
                Dashboard
            </button>
            <div class="collapse {{ request()->routeIs('serviceuser.accountdetails') || request()->routeIs('user.dashboard') ? 'show' : '' }}"
                id="notifications-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('user.dashboard') }}"
                            class="link-dark rounded {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">Notifications</a>
                    </li>
                    <li><a href="{{ route('serviceuser.accountdetails') }}"
                            class="link-dark rounded {{ request()->routeIs('serviceuser.accountdetails') ? 'active' : '' }}">Account
                            Details</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#accounts-collapse" aria-expanded="false">
                Workbooks
            </button>
            <div class="collapse" id="accounts-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('serviceuser.myworkbook') }}" class="link-dark rounded text-nowrap">My
                            Workbooks</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-4 mt-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#resources-collapse" aria-expanded="false">
                Resources
            </button>
            <div class="collapse" id="resources-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('user.resource') }}" class="link-dark rounded">My Resources</a></li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
       
    </ul>
</div>
