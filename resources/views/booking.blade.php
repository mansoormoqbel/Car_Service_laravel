@extends('layouts.user')
@section('title', 'booking')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asset/img/car1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pages.booking')}}">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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



    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Call To Action //</h6>
                    <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                    <p class="mb-0">Service Inquiries,Pricing,Availability,Parts and Materials,Technicians,Logistics,Payment and COVID-19 Protocols.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+012 345 6789</h3>
                        <a href="" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->



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