@extends('layouts.user')
@section('title', 'Testimonial')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asset/img/car1.jpg')}});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                <nav aria-label="breadcrumb">
                    <!-- testimonial -->
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pages.testimonial')}}">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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


    <div class="login-container">
    
    
        
        <div {{-- class="col-md-8" --}}>
            <div  {{-- class="card" --}}>
                
    
                <div {{-- class="card-body" --}}>
                    <form method="POST" action="{{ route('addOpinion') }}">
                        @csrf
                        
                        
                        <div class="row mb-3">
                            <label for="opinion" class="col-md-4 col-form-label text-md-end">{{ __('Opinion') }}</label>
    
                            <div class="col-md-6">
                                {{-- <input id="opinion" type="text" class="form-control @error('opinion') is-invalid @enderror" name="opinion" value="{{ old('opinion') }}" required autocomplete="opinion" autofocus> --}}
                                <textarea class="form-control  @error('opinion') is-invalid @enderror" id="opinion" rows="3" name="opinion" value="{{ old('opinion') }}"  autocomplete="opinion" autofocus></textarea>
                                @error('opinion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                                
                            <label for="rating" class="col-md-4 col-form-label text-md-end">{{ __('Rating') }}</label>
    
                            <div class="col-md-6">
                                <input  type="number" class="form-control " id="rating" name="rating"   min="1" max="5">
    
                                @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        
    
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Sent') }}
                                </button>
    
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            
    </div>
@endsection