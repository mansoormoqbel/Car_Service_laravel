@extends('layouts.admin')
@section('title', 'Vehicle')
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
                Add Vehicel
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableVehicle">
            <thead class="table table-danger " >
              <tr>
                <th scope="col">#</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">License Plate</th>
                <th scope="col">First Name User</th>
                <th scope="col">Last Name User</th>
                <th scope="col">Year</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
            
                @foreach ($vehicles as $vehicle)
                <tr id="tr{{$vehicle ->id}}">
                    <th scope="row">{{$vehicle->id}}</th>
                    <td id="m{{$vehicle ->id}}" >{{$vehicle->make}}</td>
                    <td id="mo{{$vehicle ->id}}">{{$vehicle->model}}</td>
                    <td id="lp{{$vehicle ->id}}">{{$vehicle->licensePlate}}</td>
                    <td id="fn{{$vehicle ->id}}">{{$vehicle->user->firstName}}</td>
                    <td id="ln{{$vehicle ->id}}">{{$vehicle->user->lastName}}</td>
                    <td id="y{{$vehicle ->id}}">{{$vehicle->year}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editVehicle({{$vehicle->id}})" data-bs-target="#editVehicle"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                        <a href="javascript:void(0) "onclick="deleteVehicle({{$vehicle->id}})"
                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a>


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
                        <h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addVehicle" action=""> 
                            @csrf
                            <div class="mb-3">
                                <label for="make" class="form-label"> Make</label>
                                <input type="text" class="form-control" id="make" name="make" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text make_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="model" class="form-label">Model </label>
                                <input type="text" class="form-control" id="model" name="model" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text model_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="licensePlate" class="form-label">License Plate </label>
                                <input type="text" class="form-control" id="licensePlate" name="licensePlate" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text licensePlate_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="UserName" class="form-label">User Name  </label>
                                <select class="form-select form-select-sm" name="UserName" id="UserName" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}"> {{$user->firstName}}. {{$user->lastName}}  </option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text UserName_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="year" class="form-label">Year </label>
                                <input type="text" class="form-control" id="year" name="year" aria-describedby="emailHelp">
                                <span class="text-danger error-text year_error">  
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
        <div class="modal fade" id="editVehicle"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateVehicle" action=""> 
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <div class="mb-3">
                                <label for="make" class="form-label"> Make</label>
                                <input type="text" class="form-control" id="make1" name="make1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text make_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="model" class="form-label">Model </label>
                                <input type="text" class="form-control" id="model1" name="model1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text model_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="licensePlate" class="form-label">License Plate </label>
                                <input type="text" class="form-control" id="licensePlate1" name="licensePlate1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text licensePlate_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="UserName" class="form-label">User Name  </label>
                                <select class="form-select form-select-sm" name="UserName1" id="UserName1" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}"> {{$user->firstName}}. {{$user->lastName}}  </option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text UserName_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="year" class="form-label">Year </label>
                                <input type="text" class="form-control" id="year1" name="year1" aria-describedby="emailHelp">
                                <span class="text-danger error-text year_error">  
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
        $('#addVehicle').submit(function(e){
            e.preventDefault();
            
            let make= $('#make').val();
            let model= $('#model').val();
            let licensePlate= $('#licensePlate').val();
            let year= $('#year').val();
            
            let UserName= $('#UserName').val();
        
            let _token=$('input[name=_token]').val();
        
            $.ajax({
                url:"{{Route('admin.vehicle.create')}}",
                type:'POST',
                data:{
                    
                    make:make,
                    model:model,
                    licensePlate:licensePlate,
                    year:year,
                    UserName:UserName,
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
                        

                        $('#tableVehicle tbody').prepend('<tr  id="tr'
                        + response.data.id +
                        '">  <th>'+response.data.id +
                            '</th><td id="m'+ response.data.id +
                            '">'+ response.data.make +
                            '</td><td id="mo'+ response.data.id +
                            '">'+ response.data.model +
                            '</td><td id="lp'+ response.data.id +
                            '">'+ response.data.licensePlate +
                            '</td><td id="fn'+ response.data.id +'">'
                                + response.data1.firstName +'</td><td id="ln'
                                + response.data.id +'">'+ response.data1.lastName +
                                '</td><td id="y'+response.data.id+'">'+response.data.year+'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editVehicle('+
                                    response.data.id+')" data-bs-target="#editVehicle" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteVehicle('
                                    +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                            $('#addVehicle')[0].reset(); 
                            $('.exampleModal').modal('hide');
                            $('.modal-backdrop').modal('hide');  
                            
                        
                    }
                } 

            })
        });
        function editVehicle(id){
            $.get('/admin/vehicle/edit/'+id,function(data,two,three){
            console.log(data);
            
                $('#id').val(data.id);
                $('#make1').val(data.make);
                $('#model1').val(data.model);
                $('#licensePlate1').val(data.licensePlate);
                $('#year1').val(data.year);
                $('#UserName1').val(data.user_id);
                /* console.log();($('#courses').val(data.subject)); */
                $('#editVehicle').modal('show');
            });
        }
        $('#UpdateVehicle').submit(function(e){
            e.preventDefault();
            let id= $('#id').val();
            let make= $('#make1').val();
            let model= $('#model1').val();
            let licensePlate= $('#licensePlate1').val();
            let year= $('#year1').val();
            
            let UserName= $('#UserName1').val();
        
            let _token=$('input[name=_token]').val();
           
        
            $.ajax({
                url:"{{Route('admin.vehicle.update')}}",
                type:'POST',
                data:{
                    id:id,
                    make:make,
                    model:model,
                    licensePlate:licensePlate,
                    year:year,
                    UserName:UserName,
                    _token:_token
                },
                beforeSend:function(){
                    $(document).find('spin.error-text').text('');
                },
                success:function(response){
                    console.log(response);

                    if(response.status ==0){
                        
                        $.each(response.error,function(prefix,val){
                            $('span.'+ prefix+'_error').text(val[0]);
                        });
                    }else{
                        console.log(response[1]);
                        
                        $("#mo"+response.data.id ).text(response.data.model);
                        $("#m"+response.data.id ).text(response.data.make);
                        $("#lp"+response.data.id ).text(response.data.licensePlate);
                        
                        $('#y'+response.data.id ).text(response.data.year);
                        $('#fn'+response.data.id ).text(response.data1.firstName);
                        $('#ln'+response.data.id ).text(response.data1.lastName);
                        $('#UpdateVehicle')[0].reset();
                        $('.editVehicle').modal('hide');
                        /* $( "#greatphoto" ).attr( "title", "Photo by Kelly Clark" ); */  
                    }
        
                    
                }
            })
        })

        function deleteVehicle(id){
    
            if(confirm("Do you want delete this Record? ")){

                _token=$('input[name=_token]').val();
                $.ajax({
                    
                    url:"/admin/vehicle/delete/"+id,
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
       
        document.addEventListener('DOMContentLoaded', (event) => {
            const dateInput = document.getElementById('year');
            const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
            dateInput.setAttribute('min', today);
        });
        function hideSessionMessage1() {
            var sessionMessage = document.getElementById('Error');
            if (sessionMessage) {
                sessionMessage.style.display = 'none';
            }
        }

        // Hide the session message after 1 minute (60000 milliseconds)
        setTimeout(hideSessionMessage1, 10000);
        function hideSessionMessage() {
            var sessionMessage = document.getElementById('Error1');
            if (sessionMessage) {
                sessionMessage.style.display = 'none';
            }
        }

        // Hide the session message after 1 minute (60000 milliseconds)
        setTimeout(hideSessionMessage, 10000); 
    </script>
             
@endsection