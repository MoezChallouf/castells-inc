<div>   
 {{-- <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">© 2025 Castells Inc. Constructeurs de Maisons de Luxe Sur Mesure.</a>
                   
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>    
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End --> --}}

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{asset(route('home'))}}" class="navbar-brand" style="display:flex;">
                    {{-- <img src="{{asset('img/castells.jpg')}}" alt="" width="80" height="50" style="margin-right: 10px; border-radius: 5px;"> --}}
                    <h1 class="m-0 display-5 text-white" style=" font-family: 'Cinzel', serif;" ><span class="text-primary mr-2">CASTELLS</span>Inc.</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a wire:navigate  href="{{asset(route('home'))}}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                        <a  href="{{asset(route('about'))}}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">À Propos</a>
                        <a wire:navigate href="{{asset(route('service'))}}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
                        <a wire:navigate href="{{asset(route('project'))}}" class="nav-item nav-link {{ request()->routeIs('project') ? 'active' : '' }}">Projets</a>
                        <a  href="{{asset(route('contact'))}}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }} mr-2">Contact</a>
                       <a href="{{ asset(route('recrutement')) }}" 
   class="btn btn-primary d-flex align-items-center justify-content-center text-white px-4 py-2 gap-2"
   
   >
   <i class="fas fa-briefcase mr-2"></i> Recrutement
</a>


                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Notre Bureau</h5>
                            <p class="m-0">Montréal, QC, Canada</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Envoyez-nous un Email</h5>
                            <p class="m-0">contact@castells-inc.ca</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Appelez-nous</h5>
                            <p class="m-0">438-408-1100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->
</div>