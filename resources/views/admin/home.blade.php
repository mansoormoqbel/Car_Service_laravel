@extends('layouts.admin')
@section('title', 'Admin Home')
@section('content')
  
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total User <i class="fas fa-users"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.user')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Employee <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.employee')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Supplier <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.supplier')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Vehicle <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.vehicle')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Repair <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.repair')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Inventory <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.inventory')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Contact <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.contact')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Opinion <i class="fas fa-person-fill-gear"></i></h5>
                        {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        <a href="{{Route('admin.opinion')}}" class="btn btn-primary">Go Show</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
            
            
    
@endsection