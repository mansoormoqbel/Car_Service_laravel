@extends('layouts.user')
@section('title', 'services')
@section('content')

     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asset/img/car1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{Route('service')}}">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
            let DiagnosticEngineer= $('#DiagnosticEngineer').val();
            let MechanicTechnician= $('#MechanicTechnician').val();
            let AutoElectro= $('#AutoElectro').val();

            let TiresReplacement= $('#TiresReplacement').val();
            let OilChanging= $('#OilChanging').val();
            
            
        
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