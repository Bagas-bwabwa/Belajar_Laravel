<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft"
                            placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
                <!-- / Search form -->
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle py-1 px-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder"
                                src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">
                                    {{ Auth::user()->name }}
                                </span>
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6.3-2 0 1.4 2 0 0 014 0Zm-2.4 5 0 0 5.4 6.98 0 0 0 5.462-.8A8.4 5 0 0 0 0 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>

                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.2-1.56-2.58 0L7.2 8.29H2.1c-1.56 0-2.1.62-.947 2.74L3.927 12.2c.42.58.47 1.26.2 1.95l-1.11 3.34c-.42 1.26.73 2.42 1.93 1.85L10 17.53l5.04 2.81c1.2.58 2.36-.58 1.93-1.85l-1.11-3.34c-.27-.68-.21-1.37.2-1.95l2.77-3.17c1.1-2.12.62-2.74-.95-2.74h-5.09l-.84-5.12z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>

                        <a class="dropdown-item d-flex align-items-center"
                            href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="dropdown-icon text-danger me-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-5V6m0 3V3" />
                            </svg>
                            Logout
                        </a>

                        <form id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            style="display: none;">
                            @csrf
                        </form>

                    </div>
        </div>
</nav>