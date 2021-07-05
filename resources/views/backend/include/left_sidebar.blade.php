<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('/') }}backend/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
            </div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">


                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                class="material-icons">input</i>Sign Out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>

    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu text-uppercase">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@yield('home')">
                <a href="{{ route('home') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>

            <li class="@yield('header')">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">build</i>
                    <span>Header</span>
                </a>
                <ul class="ml-menu">

                    <li class="@yield('text_area')">
                        <a href="{{ route('header.text_manage') }}">Header Text</a>
                    </li>
                    <li class="@yield('banaer_manage')">
                        <a href="{{ route('header.banner_image') }}">Banner Image</a>
                    </li>
                </ul>
            </li>

            <li class="@yield('about')">
                <a href="{{ route('about.index') }}">
                    <i class="material-icons">account_box</i>
                    <span>About</span>
                </a>
            </li>

            <li class="@yield('service')">
                <a href="{{ route('service.index') }}">
                    <i class="material-icons">work</i>
                    <span>Service</span>
                </a>
            </li>

            <li class="@yield('skill')">
                <a href="{{ route('skill.index') }}">
                    <i class="material-icons">live_help</i>
                    <span>Skill</span>
                </a>
            </li>
            <li class="@yield('education')">
                <a href="{{ route('education.index') }}">
                    <i class="material-icons">library_books</i>
                    <span>Education</span>
                </a>
            </li>
            <li class="@yield('testimonial')">
                <a href="{{ route('testimonial.index') }}">
                    <i class="material-icons">book</i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li class="@yield('experience')">
                <a href="{{ route('experience.index') }}">
                    <i class="material-icons">directions_run</i>
                    <span>Experience</span>
                </a>
            </li>
            <li class="@yield('certificate')">
                <a href="{{ route('certificate.index') }}">
                    <i class="material-icons">offline_pin</i>
                    <span>Certificate</span>
                </a>
            </li>
            <li class="@yield('project')">
                <a href="{{ route('project.index') }}">
                    <i class="material-icons">done_all</i>
                    <span>Project</span>
                </a>
            </li>
            <li class="@yield('award')">
                <a href="{{ route('award.index') }}">
                    <i class="material-icons">assignment_turned_in</i>
                    <span>Award</span>
                </a>
            </li>
            <li class="@yield('contact')">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">contact_mail</i>
                    <span>Contact</span>
                </a>
            </li>
            <li class="@yield('flow')">
                <a href="{{ route('flow.index') }}">
                    <i class="material-icons">gamepad</i>
                    <span>Flow</span>
                </a>
            </li>
           <li class="header">INFORMATION</li>
            {{--  Setting  --}}
            <li class="@yield('setting') text-uppercase">
                <a href="{{ route('setting.index') }}">
                    <i class="material-icons">settings</i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="@yield('seo') text-uppercase">
                <a href="{{ route('seo.index') }}">
                    <i class="material-icons">label</i>
                    <span>seo</span>
                </a>
            </li>
            <li>
                <a href="{{ route('cache') }}">
                    <i class="material-icons">clear</i>
                    <span>Cache Clear</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2020  <a href="javascript:void(0);">Zuyel - Rana Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
