<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('uploads/images/logo/f-and-f-2.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('uploads/images/logo/f-and-f-2.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('uploads/images/logo/f-and-f-2.png') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('uploads/images/logo/f-and-f-2.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user p-3 text-white">
            <a href="{{ route('admin.my-profile.index') }}" class="d-flex align-items-center text-reset">
                <div class="flex-shrink-0">
                    <img src="{{ profileImg() }}" alt="user-image" height="42" class="rounded-circle shadow">
                </div>
                <div class="flex-grow-1 ms-2">
                    <span class="fw-semibold fs-15 d-block">{{ user()->name }}</span>
                    {{-- <span class="fs-13">Founder</span> --}}
                </div>
                <div class="ms-auto">
                    <i class="ri-arrow-right-s-fill fs-20"></i>
                </div>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-title mt-1"> Main</li>
            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <i class="fa-solid fa-gauge-simple-high"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAdmin" aria-expanded="false" aria-controls="sidebarAdmin"
                    class="side-nav-link">
                    <i class="fa-solid fa-user-shield"></i>
                    <span> Admin </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAdmin">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.admin-users.index') }}">Admin User</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('admin.sliders.index') }}" class="side-nav-link">
                    <i class="fa-solid fa-images"></i>
                    <span> Slider </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('admin.services.index') }}" class="side-nav-link">
                    <i class="fa-solid fa-toolbox"></i>
                    <span> Services </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('admin.feedbacks.index') }}" class="side-nav-link">
                    <i class="fa-solid fa-comments"></i>
                    <span> Feedback </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('admin.about.edit', 1) }}" class="side-nav-link">
                    <i class="fa-regular fa-address-card"></i>
                    <span> About </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('admin.properties.index') }}" class="side-nav-link">
                    <i class="fa-solid fa-building"></i>
                    <span> Property </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarApplication" aria-expanded="false"
                    aria-controls="sidebarApplication" class="side-nav-link">
                    <i class="fa-solid fa-list-check"></i>
                    <span> Property Application </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarApplication">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.residential-applications.index') }}">Residential Property
                                Applications</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.commercial-applications.index') }}">Commercial Lease
                                Application</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- settings --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false"
                    aria-controls="sidebarSettings" class="side-nav-link">
                    <i class="fa-solid fa-gear"></i>
                    <span> @lang('Settings') </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSettings">
                    <ul class="side-nav-second-level">
                        <li class="{{ activeNav('admin.permission.*') }}">
                            <a href="{{ route('admin.role.index') }}">@lang('Roles & Permission')</a>
                        </li>
                        <li class="{{ activeNav('admin.backup.*') }}">
                            <a href="{{ route('admin.backup.password') }}">@lang('App DB Backup')</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
