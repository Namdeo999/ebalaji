<header class="top-header top-header-bg">
    <div class="container-fluid">
        <div class="container-max">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="top-head-left">
                        <div class="top-contact">
                            <h3>Call On : <a href="tel:+1(212)-255-5511">+000000000</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="top-header-right">
                        <div class="top-header-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/?lang=en" target="_blank"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="language-list">
                            <select class="language-list-item">
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Spanish</option>
                            </select>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    
    
<div class="navbar-area">
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <!-- <img src="{{asset('public/assets/images/AdminLTELogo.png')}}" alt="Logo"> -->
            <h5>Ebalaji</h5>
        </a>
    </div>
    <div class="main-nav">
        <div class="container-fluid">
            <div class="container-max">
                <nav class="navbar navbar-expand-md navbar-light">
                    <!-- <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/assets/images/logo-1.png')}}" alt="Logo"></a> -->
                    <a class="navbar-brand" href="{{url('/')}}"><h5>Ebalaji</h5> </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link active">Home</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/about')}}" class="nav-link">About Us</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    
                        <div class="nav-side d-display nav-side-mt">
                            <div class="nav-side-item">
                                <div class="get-btn">
                                    <a href="{{url('/login')}}" class="default-btn btn-bg-two border-radius-50">Login<i class='bi bi-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="in-circle circle-one"></div>
                    <div class="in-circle circle-two"></div>
                    <div class="in-circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                            <div class="search-box"><i class='bi bi-search'></i></div>
                            <div class="get-btn">
                                <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Login<i class='bi bi-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
    
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-close">
                <span class="search-close-line"></span>
                <span class="search-close-line"></span>
            </div>
            <div class="search-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bi bi-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>