<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/images/icon/logo-blue.png') }}" alt="Cool Admin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Admin Dashboard
                    </a>
                </li>
                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Accounts
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{ route('admin.practitioner') }}">
                                <i class="fas fa-users"></i>Practitioners</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-user"></i>Users</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Resources
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="button.html">
                                <i class="fab fa-flickr"></i>View All</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Add New</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Forms
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="button.html">
                                <i class="fab fa-flickr"></i>General Enquiry</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Job Applications</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Referral Form</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Referral Forms (Additional Qs)</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Request For CDAS</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Request For CDAS (C-19)</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Volunteer Expression of Interest</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('assets/images/icon/logo-blue.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Admin Dashboard
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Accounts
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.practitioner') }}">
                                <i class="fas fa-users"></i>Practitioners</a>
                        </li>
                        <li>
                            <a href="register.html">
                                <i class="fas fa-user"></i>Users</a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Resources
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">
                                <i class="fab fa-flickr"></i>View All</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Add New</a>
                        </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Forms
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">
                                <i class="fab fa-flickr"></i>General Enquiry</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Job Applications</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Referral Form</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Referral Forms (Additional Qs)</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Request For CDAS</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Request For CDAS (C-19)</a>
                        </li>
                        <li>
                            <a href="badge.html">
                                <i class="fas fa-comment-alt"></i>Volunteer Expression of Interest</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
