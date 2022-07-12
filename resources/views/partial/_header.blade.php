    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ '/' }}">
                    <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ '/' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Course </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="course-grid-2.html">Course Grid 2 </a>
                                <a class="dropdown-item" href="course-grid-3.html">Course Grid 3 </a>
                                <a class="dropdown-item" href="course-grid-4.html">Course Grid 4 </a>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('teachers') }}">Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="hover-btn-new log orange" href="{{ '/user/dasboard' }}">
                                    <span>Dashboard</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                    <a class="dropdown-item" href="{{ '/dashboard' }}">Dashboard </a>
                                    <a class="dropdown-item" href="blog-single.html">Profile</a>
                                </div>
                            </li>
                        @else
                            <li>
                                <a class="hover-btn-new log orange" href="{{ '/login' }}">
                                    <span>Login</span></a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
