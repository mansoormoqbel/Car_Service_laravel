@extends('layouts.admin')
@section('title', 'Repair')
@section('content')
    <div class="container">
        <span class="text-success error-text success_error" id="Error">  
        </span>
    </div>
    <div class="container">
        <span class="text-danger error-text error_error" id="Error1">  
        </span>
    </div>
    
    <div class="container mt-5">
            <a type="button" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1 float-start" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Repair
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableRepair">
            <thead class="table table-danger " >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Repair Date</th>
                    <th scope="col">description</th>
                    
                    <th scope="col">cost</th>
                    <th scope="col">model</th>
                    <th scope="col">make</th>
                    <th scope="col">position</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach ($repairs as $repair)
                    <tr id="tr{{$repair ->id}}">
                        <th scope="row">{{$repair->id}}</th>
                        <td id="rd{{$repair ->id}}" >{{$repair->repairDate}}</td>
                        <td id="d{{$repair ->id}}">{{$repair->description}}</td>
                        <td id="c{{$repair ->id}}">{{$repair->cost}}</td>
                        <td id="mo{{$repair ->id}}"> {{$repair->vehicle->model}}</td>
                        <td id="m{{$repair ->id}}">{{$repair->vehicle->make}}</td>
                            @switch( $repair->employee->position)
                                @case("DiagnosticEngineer")
                                    <td id="p{{$repair ->id}}">  Diagnostic Engineer</td>
                                    @break
                                @case("MechanicTechnician")
                                    <td id="p{{$repair ->id}}">  Mechanic Technician</td>
                                    @break
                                @case("TiresReplacement")
                                    <td id="p{{$repair ->id}}">  Tires Replacement</td> 
                                    @break
                                @default
                                    <td id="p{{$repair ->id}}">  Oil Changing </td>   
                            @endswitch
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            
                                <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair({{$repair->id}})" data-bs-target="#editRepair"
                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                                <a href="javascript:void(0) "onclick="deleteRepair({{$repair->id}})"
                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a>
                            </div>
                        </td>
                  </tr>
                @endforeach
              
             
            </tbody>
        </table>
    </div>
    <!-- start insert user with ajax  -->    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Repair</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addRepair" action=""> 
                            @csrf
                            <div class="mb-3">
                                <label for="vehicleID" class="form-label">Vehicel Name  </label>
                                <select class="form-select form-select-sm" name="vehicleID" id="vehicleID" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($vehicles as $vehicle)
                                        <option value="{{$vehicle->id}}"> {{$vehicle->make}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text vehicleID_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="employeeID" class="form-label">Test Name  </label>
                                <select class="form-select form-select-sm" name="employeeID" id="employeeID" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($employees as $employee)
                                        @switch( $employee->position)
                                            @case("DiagnosticEngineer")
                                                <option value="{{$employee->id}}">   Diagnostic Engineer</option>
                                                
                                                    @break
                                            @case("CarWash")
                                                <option value="{{$employee->id}}">   Car Wash</option>
                                                    @break
                                            @case("AutoElectro")
                                                <option value="{{$employee->id}}">   Auto Electro</option>
                                                    @break
                                            @case("MechanicTechnician")
                                                <option value="{{$employee->id}}">  Mechanic Technician</option>
                                                    @break
                                            @case("TiresReplacement")
                                                <option value="{{$employee->id}}"> Tires Replacement</option>
                                                    
                                                    @break
                                            @default
                                                <option value="{{$employee->id}}">  Oil Changing </option>
                                                    
                                        @endswitch
                                    @endforeach
                                </select>
                                <span class="text-danger error-text employeeID_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="repairDate" class="form-label">repair Date  </label>
                                <input type="date" class="form-control" id="repairDate" name="repairDate" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text repairDate_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                <span class="text-danger error-text description_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="cost" class="form-label">Cost </label>
                                <input type="text" class="form-control" id="cost" name="cost" aria-describedby="emailHelp">
                                <span class="text-danger error-text cost_error">  
                                </span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- end insert user with ajax  --> 
    <!-- start update user with ajax  -->
        <!-- Modal -->
        <div class="modal fade" id="editRepair"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Repair</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateRepair" action=""> 
                            @csrf
                            <input type="hidden"  value="" id="id" name="id" >
                            <div class="mb-3">
                                <label for="vehicleID" class="form-label">Vehicel Name  </label>
                                <select class="form-select form-select-sm" name="vehicleID1" id="vehicleID1" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($vehicles as $vehicle)
                                        <option value="{{$vehicle->id}}"> {{$vehicle->make}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text vehicleID_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="employeeID" class="form-label">Test Name  </label>
                                <select class="form-select form-select-sm" name="employeeID1" id="employeeID1" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                        @foreach ($employees as $employee)
                                            @switch( $employee->position)
                                                @case("DiagnosticEngineer")
                                                    <option value="{{$employee->id}}">   Diagnostic Engineer</option>
                                                        @break
                                                @case("CarWash")
                                                    <option value="{{$employee->id}}">   Car Wash</option>
                                                        @break
                                                @case("AutoElectro")
                                                    <option value="{{$employee->id}}">   Auto Electro</option>
                                                        @break
                                                @case("MechanicTechnician")
                                                    <option value="{{$employee->id}}">  Mechanic Technician</option>
                                                        @break
                                                @case("TiresReplacement")
                                                    <option value="{{$employee->id}}"> Tires Replacement</option>
                                                        
                                                        @break
                                                @default
                                                    <option value="{{$employee->id}}">  Oil Changing </option>
                                                        
                                            @endswitch
                                        @endforeach
                                </select>
                                <span class="text-danger error-text employeeID_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="repairDate" class="form-label">repair Date  </label>
                                <input type="date" class="form-control" id="repairDate1" name="repairDate1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text repairDate_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <textarea class="form-control" id="description1" name="description1" rows="3"></textarea>
                                <span class="text-danger error-text description_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="cost" class="form-label">Cost </label>
                                <input type="text" class="form-control" id="cost1" name="cost1" aria-describedby="emailHelp">
                                <span class="text-danger error-text cost_error">  
                                </span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- end update user with ajax  -->
@endsection
@section('script')
        {{-- jquery  --}}
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $('#addRepair').submit(function(e){
            e.preventDefault();
            let vehicleID= $('#vehicleID').val();
            let employeeID= $('#employeeID').val();
            let repairDate= $('#repairDate').val();
            let description= $('#description').val();
            let cost= $('#cost').val();
            
          
        
            let _token=$('input[name=_token]').val();
    
            $.ajax({
                url:"{{Route('admin.repair.create')}}",
                type:'POST',
                data:{
                    vehicleID:vehicleID,
                    employeeID:employeeID,
                    repairDate:repairDate,
                    description:description,
                    cost:cost,
                    _token:_token

                },
                beforeSend:function(){
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
                        switch (response.data2.position) {
                            case "DiagnosticEngineer":
                                $('#tableRepair tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                                '</th><td id="rd'+ response.data.id +'">'+ response.data.repairDate +
                                    '</td><td id="d'+ response.data.id +'">'+ response.data.description +
                                        '</td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                            '</td><td id="mo'+ response.data.id +'">'+response.data1.model+
                                                '</td><td id="m'+ response.data.id +'">'+response.data1.make+'</td><td id="p'+ response.data.id +
                                                    '">Diagnostic Engineer</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair('+
                                                    response.data.id+
                                                    ')" data-bs-target="#editRepair" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteRepair('
                                                    +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addRepair')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');  
                                
                                break;
                            case "MechanicTechnician":
                                $('#tableRepair tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                                    '</th><td id="rd'+ response.data.id +'">'+ response.data.repairDate +
                                        '</td><td id="d'+ response.data.id +'">'+ response.data.description +
                                            '</td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                                '</td><td id="mo'+ response.data.id +'">'+response.data1.model+
                                                    '</td><td id="m'+ response.data.id +'">'+ response.data1.make +
                                                        '</td><td id="p'+ response.data.id +'">Mechanic Technician</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair('+
                                                        response.data.id+
                                                        ')" data-bs-target="#editRepair" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteRepair('
                                                        +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addRepair')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');  
                                
                                break;
                            case "TiresReplacement":
                                $('#tableRepair tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                                        '</th><td id="rd'+ response.data.id +'">'+ response.data.repairDate +
                                            '</td><td id="d'+ response.data.id +'">'+ response.data.description +
                                                '</td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                                    '</td><td id="mo'+ response.data.id +'">'+response.data1.model+
                                                        '</td><td id="m'+ response.data.id +'">'+ response.data1.make+
                                                            '</td><td id="p'+ response.data.id +'">Tires Replacement</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair('+
                                                            response.data.id+
                                                            ')" data-bs-target="#editRepair" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteRepair('
                                                            +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addRepair')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');
                              
                                break;
                            case "CarWash":
                                $('#tableRepair tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                                        '</th><td id="rd'+ response.data.id +'">'+ response.data.repairDate +
                                            '</td><td id="d'+ response.data.id +'">'+ response.data.description +
                                                '</td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                                    '</td><td id="mo'+ response.data.id +'">'+response.data1.model+
                                                        '</td><td id="m'+ response.data.id +'">'+ response.data1.make+
                                                            '</td><td id="p'+ response.data.id +'">Car Wash</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair('+
                                                            response.data.id+
                                                            ')" data-bs-target="#editRepair" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteRepair('
                                                            +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addRepair')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');
                              
                                break;
                            case "AutoElectro":
                                $('#tableRepair tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                                        '</th><td id="rd'+ response.data.id +'">'+ response.data.repairDate +
                                            '</td><td id="d'+ response.data.id +'">'+ response.data.description +
                                                '</td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                                    '</td><td id="mo'+ response.data.id +'">'+response.data1.model+
                                                        '</td><td id="m'+ response.data.id +'">'+ response.data1.make+
                                                            '</td><td id="p'+ response.data.id +'">Auto Electro</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair('+
                                                            response.data.id+
                                                            ')" data-bs-target="#editRepair" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteRepair('
                                                            +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addRepair')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');
                              
                                break;
                            default:
                            $('#tableRepair tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                                        '</th><td id="rd'+ response.data.id +'">'+ response.data.repairDate +
                                            '</td><td id="d'+ response.data.id +'">'+ response.data.description +
                                                '</td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                                    '</td><td id="mo'+ response.data.id +'">'+response.data1.model+
                                                        '</td><td id="m'+ response.data.id +'">'+ response.data1.make+
                                                            '</td><td id="p'+ response.data.id +'"> Oil Changing</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editRepair('+
                                                            response.data.id+
                                                            ')" data-bs-target="#editRepair" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteRepair('
                                                            +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addRepair')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');
                                
                        }

                       
                        
                    }
                } 

            })
        });
        function editRepair(id){
            $.get('/admin/repair/edit/'+id,function(data,two,three){
            console.log(data);
            
                $('#id').val(data.id);
                $('#vehicleID1').val(data.vehicleID);
                $('#employeeID1').val(data.employeeID);
                $('#repairDate1').val(data.repairDate);
                $('#description1').val(data.description);
                $('#cost1').val(data.cost);
                /* console.log();($('#courses').val(data.subject)); */
                $('#editRepair').modal('show');
            });
        }
        $('#UpdateRepair').submit(function(e){
            e.preventDefault();
            let id= $('#id').val();
            let vehicleID= $('#vehicleID1').val();
            let employeeID= $('#employeeID1').val();
            let repairDate= $('#repairDate1').val();
            let description= $('#description1').val();
            let cost= $('#cost1').val();
            let _token=$('input[name=_token]').val();
           
        
            $.ajax({
                url:"{{Route('admin.repair.update')}}",
                type:'POST',
                data:{
                    id:id,
                    vehicleID:vehicleID,
                    employeeID:employeeID,
                    repairDate:repairDate,
                    description:description,
                    cost:cost,
                    _token:_token

                },
                beforeSend:function(){
                    $(document).find('spin.error-text').text('');
                },
                success:function(response){
                    console.log(response.data);

                    if(response.status ==0){
                        
                        $.each(response.error,function(prefix,val){
                            $('span.'+ prefix+'_error').text(val[0]);
                        });
                    }else{
                        console.log(response);

                        
                        $("#rd"+response.data.id ).text(response.data.repairDate);
                        $("#d"+response.data.id ).text(response.data.description);
                        $("#c"+response.data.id ).text(response.data.cost);
                        
                       /*  $("#image"+response.data.id ).attr( "scr", "{{asset('images')}}/"+response.data.image ); */
                        $('#mo'+response.data.id ).text(response.data1.model);
                        $('#m'+response.data.id ).text(response.data1.make);
                        switch (response.data2.position) {
                            case "DiagnosticEngineer":
                                $('#p'+response.data.id ).text("Diagnostic Engineer");
                                break;
                            case "MechanicTechnician":
                                $('#p'+response.data.id ).text("Mechanic Technician");
                                break;
                            case "TiresReplacement":
                                $('#p'+response.data.id ).text("Tires Replacement");
                                break;
                            case "AutoElectro":
                                $('#p'+response.data.id ).text("Auto Electro");
                            case "CarWash":
                                $('#p'+response.data.id ).text("Car Wash");
                               
                                break;
                            default:
                            $('#p'+response.data.id ).text("Oil Changing");
                                
                        }
                        
                        $('#UpdateRepair')[0].reset();
                        $('.editUser').modal('hide');
                        /* $( "#greatphoto" ).attr( "title", "Photo by Kelly Clark" ); */  
                    }
        
                    
                }
            })
        })


        
        function deleteRepair(id){
    
            if(confirm("Do you want delete this Record? ")){

                _token=$('input[name=_token]').val();
                $.ajax({
                    
                    url:"/admin/repair/delete/"+id,
                    type:'delete',
                    data:{
                        _token:_token,
                    },
                    success:function(respones){
                        console.log(respones);
                        $('#tr'+id).remove();
                        $.each(response.error,function(prefix,val){
                            $('span.'+ prefix+'_error').text(val[0]);
                        });
                    }
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('repairDate');
            const today = new Date().toISOString().split('T')[0];
            const maxDate = new Date();
            maxDate.setDate(maxDate.getDate() + 30); // Change 30 to the number of days you want to allow
            const maxDateString = maxDate.toISOString().split('T')[0];

            dateInput.setAttribute('min', today);
            dateInput.setAttribute('max', maxDateString);
        });

        
    </script>
             
@endsection