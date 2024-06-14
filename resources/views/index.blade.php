@extends('layouts.user')
@section('title', 'Home')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('asset/img/car1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Repair Service Center</h1>
                                    <a href="#aa" id="" class="btn btn-primary py-3 px-5 animated slideInDown">Booking now<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{asset('asset/img/gclass1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('asset/img/car3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash Service Center</h1>
                                    <a href="#aa" class="btn btn-primary py-3 px-5 animated slideInDown">Booking now<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{asset('asset/img/bmw2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Quality Servicing</h5>
                            <p>Quality servicing in a car repair shop is pivotal 
                                for both the longevity of the vehicle and the safety of its passengers.
                                 A reputable car repair shop distinguishes itself through meticulous attention to detail</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Expert Workers</h5>
                            <p>Expert workers in car repair shops play an essential role in the automotive industry. 
                                Their expertise ensures that vehicles are maintained and repaired to the highest standards</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>Modern equipment in car repair shops has revolutionized the way vehicles are maintained and repaired</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('asset/img/car5.jpg')}}" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">10<span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">CarServ</span> Is The Best Place For Your Auto Care</h1>
                    <p class="mb-4">the best auto care places  embrace technology, utilizing the latest diagnostic equipment to accurately pinpoint issues, 
                        which can save time and money. They also keep up with the latest automotive trends and training, 
                        ensuring that they can handle even the newest vehicle models and their specific repair needs.
                         Choosing the right car repair shop is about finding a balance between skilled service,
                         customer care, and convenience, ensuring your vehicle gets the best possible attention.</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Expert workers in car repair shops play an essential role in the automotive industry. 
                                        Their expertise ensures that vehicles are maintained and repaired to the highest standards
                                       </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>Quality servicing in a car repair shop is pivotal 
                                        for both the longevity of the vehicle and the safety of its passengers.
                                          A reputable car repair shop distinguishes itself through meticulous attention to detail
                                       </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span>Modern equipment in car repair shops has revolutionized the way vehicles are maintained and repaired</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                   
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4 active" id="t1" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h5 class="m-0">Diagnostic Engineer</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4" id="t2" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h5 class="m-0">Mechanic Technician</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4" id="t3" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h5 class="m-0"> Auto Electro</h5>
                        </button>
                        
                        <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4" id="t4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h5 class="m-0">Car Wash</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-4" id="t5" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h5 class="m-0">Tires Replacement</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-2 mb-0" id="t6" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h5 class="m-0">Oil Changing</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-300">
                                        <img class="position-absolute img-fluid w-100 h-300" src="{{asset('asset/img/car4.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">10 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">10 Years of experience in auto servicing a pivotal role in ensuring the reliability, efficiency, and longevity of vehicle maintenance and repair services. </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-4 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-300">
                                        <img class="position-absolute img-fluid w-100 h-300" src="{{asset('asset/img/service-2.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">10 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">10 Years of experience in auto servicing a pivotal role in ensuring the reliability, efficiency, and longevity of vehicle maintenance and repair services.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-4 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-300">
                                        <img class="position-absolute img-fluid w-100 h-300" src="{{asset('asset/img/service-3.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">10 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">10 Years of experience in auto servicing a pivotal role in ensuring the reliability, efficiency, and longevity of vehicle maintenance and repair services.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-4 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-300">
                                        <img class="position-absolute img-fluid w-100 h-300" src="{{asset('asset/img/service-4.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">10 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">10 Years of experience in auto servicing a pivotal role in ensuring the reliability, efficiency, and longevity of vehicle maintenance and repair services.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="" class="btn btn-primary py-3 px-4 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container">
        <span class="text-success error-text success_error" id="Error">  
        </span>
    </div>
  
    
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">Choosing a certified and award-winning car repair service provider  significantly  the longevity and performance of your vehicle.  When your car needs repair or maintenance, entrusting it to a provider with a proven track record ensures that it receives the highest quality of care</p>
                    </div>
                </div>
                <div id="aa" class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form  id="addVehicle">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0  " placeholder="Model" id="model" name="model" style="height: 55px;">
                                    <span class=" error-text model_error" style="color: white;">  
                                    </span>
                                   
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0  " placeholder="Make"id="make" name="make" style="height: 55px;">
                                    <span class=" error-text make_error" style="color: white;">  
                                    </span>
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0  " placeholder="License Plate"  id="licensePlate" name="licensePlate" style="height: 55px;">
                                    <span class=" error-text licensePlate_error" style="color: white;">  
                                    </span>
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0 " placeholder="year" id="year" name="year" style="height: 55px;">
                                    <span class=" error-text year_error" style="color: white;">  
                                    </span>
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date" class="form-control border-0 datetimepicker-input  " id="repairDate" name="repairDate" placeholder="Service Date" data-target="#date1" 
                                        data-toggle="datetimepicker" style="height: 55px;" aria-describedby="emailHelp">
                                        <span class=" error-text repairDate_error" style="color: white;">  
                                        </span>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <textarea class="form-control border-0" placeholder="Special Request" id="description"   name="description"></textarea>
                                    <span class=" error-text description_error" style="color: white;">  
                                    </span>
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                    
                                    <div class="form-check" style="color: white;">
                                        <input class="form-check-input" type="checkbox" id="DiagnosticEngineer" name="DiagnosticEngineer" value="DiagnosticEngineer">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Diagnostic Engineer:
                                        </label>
                                    </div>
                                     
                                    <div class="form-check" style="color: white;">
                                        <input class="form-check-input" type="checkbox" id="MechanicTechnician" name="MechanicTechnician" value="MechanicTechnician">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Mechanic Technician:
                                        </label>
                                    </div>
                                    <div class="form-check" style="color: white;">
                                        <input class="form-check-input" type="checkbox" id="CarWash" name="CarWash" value="CarWash">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Car Wash:
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                   
                                    
                                    <div class="form-check" style="color: white;">
                                        <input class="form-check-input" type="checkbox" id="AutoElectro" name="AutoElectro" value="AutoElectro">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Auto Electro:
                                        </label>
                                    </div>
                                   
                                    <div class="form-check" style="color: white;">
                                        <input class="form-check-input" type="checkbox" id="TiresReplacement" name="TiresReplacement" value="TiresReplacement">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tires Replacement:
                                        </label>
                                    </div>
                                    <div class="form-check" style="color: white;">
                                        <input class="form-check-input" type="checkbox" id="OilChanging" name="OilChanging" value="OilChanging">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Oil Changing:
                                        </label>
                                    </div> 
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                @foreach ($employees as $employee)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('images')}}\{{$employee->image}}" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0"> {{$employee->firstName}}  {{$employee->lastName}} </h5>
                                
                                @switch($employee->position)
                                    @case("DiagnosticEngineer")
                                        <small>Diagnostic Engineer </small>
                                        @break
                                    @case("AutoElectro")
                                        <small>Auto Electro </small>
                                        @break
                                    @case("EngineServicing")
                                        <small>Engine Servicing</small>
                                        @break
                                    @case("TiresReplacement")
                                        <small>Tires Replacement </small>
                                        @break    
                                    @default
                                        <small>Oil Changing</small>
                                @endswitch
                            </br><small>{{$employee->experience}} year</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                
               {{--  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('asset/img/team2.png')}}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('asset/img/team4.png')}}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('asset/img/team6.png')}}" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($oxx as $opinion)
                    <div class="testimonial-item text-center">
                        <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{asset('profile')}}/{{$opinion->user->image}}" style="width: 80px; height: 80px;">
                        <h5 class="mb-0">{{$opinion->user->firstName}}  {{$opinion->user->lastName}}</h5>
                        <p>
                            <div class="star-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $opinion->rating)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                        </p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">{{$opinion->opinion}}.</p>
                        </div>
                    </div>
                @endforeach
               
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

   

@endsection
@section('script')
        {{-- jquery  --}}
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
         $('#addVehicle').submit(function(e){
            e.preventDefault();
            
            let make= $('#make').val();
            let model= $('#model').val();
            let licensePlate= $('#licensePlate').val();
            let year= $('#year').val();

            let repairDate= $('#repairDate').val();
            let description= $('#description').val();

            let DiagnosticEngineer = $('#DiagnosticEngineer').is(':checked') ? $('#DiagnosticEngineer').val() : ' ' ;
            let MechanicTechnician = $('#MechanicTechnician').is(':checked') ? $('#MechanicTechnician').val() : ' ' ;
            let AutoElectro = $('#AutoElectro').is(':checked') ? $('#AutoElectro').val() : ' ' ;
            let CarWash = $('#CarWash').is(':checked') ? $('#CarWash').val() : ' ' ;
            let TiresReplacement = $('#TiresReplacement').is(':checked') ? $('#TiresReplacement').val() : ' ' ;
            let OilChanging = $('#OilChanging').is(':checked') ? $('#OilChanging').val() : ' ' ;

           
            
            
        
            let _token=$('input[name=_token]').val();
        
            $.ajax({
                url:"{{Route('addRepair')}}",
                type:'POST',
                data:{
                    
                    make:make,
                    model:model,
                    licensePlate:licensePlate,
                    year:year,
                    repairDate:repairDate,
                    description:description,
                    CarWash:CarWash,
                    DiagnosticEngineer:DiagnosticEngineer,
                    MechanicTechnician:MechanicTechnician,
                    AutoElectro:AutoElectro,
                    TiresReplacement:TiresReplacement,
                    OilChanging:OilChanging,
                    _token:_token
                },beforeSend:function(){
                    $(document).find('spin.error-text').text('');
                },
                
                success:function(response){
                    console.log(response);
                    
                    if(response.status ==0)
                    {
                        $.each(response.error,function(prefix,val){
                            $('span.'+ prefix+'_error').text(val[0]);
                        });
                    }
                    else
                    {
                        console.log(response);
                        $('span.success_error').text(response.success);
                        $('#addVehicle')[0].reset();
                        

                        
                            
                        
                    }
                } 

            })
        });
        function hideSessionMessage() {
            var sessionMessage = document.getElementById('Error');
            if (sessionMessage) {
                sessionMessage.style.display = 'none';
            }
        }

        // Hide the session message after 1 minute (60000 milliseconds)
        setTimeout(hideSessionMessage, 10000); 
       
        
    </script>
             
@endsection