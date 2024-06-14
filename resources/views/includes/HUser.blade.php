<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>123 Street,Amman, Jordan </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Sun - Thurs : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+962 79 0000 000</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-3 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link {{ Request::route()->getName() === 'about' ? 'active' : '' }}">About</a>
            <a href="{{route('service')}}" class="nav-item nav-link {{ Request::route()->getName() === 'service' ? 'active' : '' }}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle  {{ Request::is('pages/*') || Request::is('pages') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{route('pages.booking')}}" class="dropdown-item {{Request::is('pages/booking') ? 'active' : '' }}">Booking</a>
                    <a href="{{route('pages.technicians')}}" class="dropdown-item {{Request::is('pages/technicians') ? 'active' : '' }}">Technicians</a>
                    <a href="{{route('pages.testimonial')}}" class="dropdown-item {{Request::is('pages/testimonial') ? 'active' : '' }}">Testimonial</a>
                    <a href="{{route('pages.error')}}" class="dropdown-item {{Request::is('pages/error') ? 'active' : '' }}">404 Page</a>
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link {{ Request::route()->getName() === 'contact' ? 'active' : '' }}">Contact</a>
           {{--  <a href="{{route('map')}}" class="nav-item nav-link {{ Request::route()->getName() === 'map' ? 'active' : '' }}">map</a> --}}
            
            @guest
                @if (Route::has('login'))
                   
                        <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    
                @endif
                @if (Route::has('register'))
                    
                        <a class="nav-link nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    
                @endif

                
            @else
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle  " data-bs-toggle="dropdown">{{ Auth::user()->firstName }}</a>
                    <div class="dropdown-menu fade-up m-0">
                       
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
                
            @endguest
       

        </div>
        {{-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> --}}
    </div>
</nav>
<!-- Navbar End -->