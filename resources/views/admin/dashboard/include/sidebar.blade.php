<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('home') }}" class="sidebar-brand">
            <span>FrontEnd</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Banner</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#banner" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Banner Section</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="banner">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('add_banner') }}" class="nav-link">Add Banner</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage_banner') }}" class="nav-link">Manage Banner</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">About Section</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#about" role="button" aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">About Section</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="about">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('manage_about') }}" class="nav-link">Manage About</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Skill Section</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#skill" role="button" aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Skill Section</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="skill">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('add_skill') }}" class="nav-link">Add Skill</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage_skill') }}" class="nav-link">Manage Skill</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Project Section</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#project" role="button" aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">My Project</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="project">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('add_project') }}" class="nav-link">Add Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage_project') }}" class="nav-link">Manage Projcet</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Contact Section</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#contact" role="button" aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Contact me</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="contact">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('addressContact') }}" class="nav-link">Add Address</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manageAddress') }}" class="nav-link">Manage Address</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manageContact') }}" class="nav-link">Manage Contact</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item active" href="{{  asset('adminAsset') }}/demo_1/dashboard-one.html">
                <img src="{{  asset('adminAsset') }}/assets/images/screenshots/light.jpg" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item" href="{{  asset('adminAsset') }}/demo_2/dashboard-one.html">
                <img src="{{  asset('adminAsset') }}/assets/images/screenshots/dark.jpg" alt="light theme">
            </a>
        </div>
    </div>
</nav>
