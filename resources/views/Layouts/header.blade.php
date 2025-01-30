<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Section</title>
</head>

<body>
    <header>
        <div class="bg-dark text-white pt-3 pb-3 fixed-top"  id="header-scroll">
            <div class="container d-flex justify-content-between ">
            <div class="">
                <a href="#" class="text-white me-4"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white me-4"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-white me-4"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
            </div>

            <!-- Contact Information -->
            <div class="All">
               
                
            </div>
            
            <div class="text-end">
                <p class="mb-0">info@baltaienergy.com</p>
            </div>
            <div class="text-end">
               
                <p class="mb-0">+234 913 714 8567</p>
                
            </div>
            <div class="text-end">
                
                <p class="mb-0">+234 913 713 1599</p>
            </div>
            </div>
            
        </div>
        <nav class="navbar navbar-expand-lg fixed-top" id="header-scroll">
            <div class="container">
                <a href="{{route('index')}}" class="navbar-brand">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736857400/Energy/p_1_w9bqwe.png" draggable="false" alt="">
                </a>
                <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-100" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button data-bs-dismiss="offcanvas">
                            <i class="bi bi-x-square"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link" class="routers" {{ (request()->is('/')) ? 'active' : '' }}>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link" class="routers" {{ (request()->is('about')) ? 'active' : '' }}>
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('solution')}}" {{ (request()->is('solution*')) ? 'active' : '' }}>
                                Solution
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('residential')}}" class="dropdown-item"><i class="bi bi-house"></i>  Residential Solutions</a></li>
                                    <li><a href="{{route('business')}}" class="dropdown-item"><i class="bi bi-house-heart"></i> Business Solutions</a></li>
                                    <li><a href="{{route('industrial')}}" class="dropdown-item"><i class="bi bi-houses"></i> Industrial Solutions</a></li>
                                </ul>
                            </li>
                            <!-- -->
                            <li class="nav-item">
                                <a href="{{route('partners')}}" class="nav-link" class="routers">
                                    Partners
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('our_ssn')}}" class="nav-link" class="routers">
                                    SSN
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">
                                    Careers
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('baltai')}}" class="dropdown-item">Baltai Learning</a></li>
                                    <li><a href="{{route('career')}}" class="dropdown-item">SRM</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" class="routers">
                                    Insights
                                </a>
                            </li>
                        </ul>

                        <div class="login-div space-x-4">
                            <i class="fas fa-search"></i>
                            <a href="{{route('contact')}}" class="btn-signup">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-end offcanvas-contact-hambuger" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <button data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="bi bi-x-square"></i>
                </button>
            </div>
            <div class="offcanvas-body text-center">
            </div>
        </div>
    </header>
</body>

</html>