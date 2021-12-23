<div class="flex-shrink-0 p-5 sidebar sidebar-practitioner" style="width: 280px;">
    <h3>Practitioners Dashboard</h3>
    <p>Welcome {{Auth::user()->name}}</p>
  <ul class="list-unstyled ps-0">
    <li class="border-top mt-5 mb-3"></li>
    <li class="mb-4 mt-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#notifications-collapse" aria-expanded="true">
        Dashboard
      </button>
      <div class="collapse show" id="notifications-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="../practitioners/dashboard.php" class="link-dark rounded active">Notifications</a></li>
          <li><a href="../practitioners/account-details.php" class="link-dark rounded">Account Details</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-4 mt-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#accounts-collapse" aria-expanded="false">
        Accounts
      </button>
      <div class="collapse" id="accounts-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="../practitioners/service-users.php" class="link-dark rounded">Services Users</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-4 mt-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#resources-collapse" aria-expanded="false">
        Resources
      </button>
      <div class="collapse" id="resources-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="../practitioners/workbook-guidance.php" class="link-dark rounded text-nowrap">Workbooks (Guidance)</a></li>
          <li><a href="../practitioners/my-resources.php" class="link-dark rounded">My Resources</a></li>
        </ul>
      </div>
    </li>
    <li class="border-top my-3"></li>
    <li class="mb-4 mt-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#account-collapse" aria-expanded="false">
            Account
        </button>
        <div class="collapse" id="account-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Referral Form (C-19)</a></li>
                <li> <a class="link-dark rounded" href="{{ route('practitioner.logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        style="color:#fff">
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('practitioner.logout') }}" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </li>
  </ul>
</div>