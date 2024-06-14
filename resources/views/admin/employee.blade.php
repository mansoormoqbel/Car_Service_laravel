@extends('layouts.admin')
@section('title', 'Employee')
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
                Add Employee
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableUser">
            <thead class="table table-danger " >
              <tr>
                
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Experience</th>
                <th scope="col">position</th>
                <th scope="col">image</th>
                <th scope="col">phone</th>
                <th scope="col">email</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
            
                @foreach ($employees as $employee)
                <tr id="tr{{$employee ->id}}">
                    <th scope="row">{{$employee->id}}</th>
                    <td id="fn{{$employee ->id}}" >{{$employee->firstName}}</td>
                    <td id="ln{{$employee ->id}}">{{$employee->lastName}}</td>
                    <td id="ex{{$employee ->id}}">{{$employee->experience}} year</td>
                    <td id="p{{$employee ->id}}">{{$employee->position}}</td>
                    <td id="i{{$employee ->id}}"><img id="image{{$employee ->id}}" src="{{asset('images')}}/{{$employee->image}}" style="max-width:52px; max-hieght:52px" alt="{{$employee->firstName}}"></td>
                    <td id="ph{{$employee ->id}}">{{$employee->phone}}</td>
                    <td id="e{{$employee ->id}}">{{$employee->email}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editEmployee({{$employee->id}})" data-bs-target="#editEmployee"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                        <a href="javascript:void(0) "onclick="deleteEmployee({{$employee->id}})"
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addEmployee" action=""> 
                            @csrf
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name </label>
                                <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text firstName_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name </label>
                                <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text lastName_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone </label>
                                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text phone_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">experience </label>
                                <input type="text" class="form-control" id="experience" name="experience" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text experience_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">position </label>
                                <select class="form-select form-select-sm" name="position" id="position" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    <option value="DiagnosticEngineer">Diagnostic Engineer</option>
                                    <option value="MechanicTechnician">Mechanic Technician</option>
                                    <option value="AutoElectro">Auto Electro</option>
                                    <option value="TiresReplacement">Tires Replacement</option>
                                    <option value="OilChanging">Oil Changing</option>
                                    <option value="CarWash">Car Wash</option>
                                </select>
                            </div>
                            {{-- Technicians --}}
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="image" class="form-label"> Image Employee</label>
                                <input id="image" type="file" class="form-control" name="image"  > 
                                <span class="text-danger error-text image_error">  
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
        <div class="modal fade" id="editEmployee"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Employee </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateEmployee" action=""> 
                            @csrf
                            <input type="hidden"  value="" id="id" name="id" >
                            <div class="mb-3">
                                <label for="firstname1" class="form-label">First Name </label>
                                <input type="text" class="form-control" id="firstName1" name="firstName" aria-describedby="emailHelp">
                                <span class="text-danger error-text firstName_error">  

                            </div>
                            <div class="mb-3">
                                <label for="lastname1" class="form-label">Last Name </label>
                                <input type="text" class="form-control" id="lastName1" name="lastName" aria-describedby="emailHelp">
                                <span class="text-danger error-text lastName_error">  

                            </div>
                            <div class=" mb-3">
                                <label for="phone1" class="form-label">Phone Number </label>
                                <input type="text" class="form-control" id="phone1" name="phone" aria-describedby="emailHelp">
                                <span class="text-danger error-text phone_error">  
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">experience </label>
                                <input type="text" class="form-control" id="experience1" name="experience" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text experience_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">position </label>
                                <select class="form-select form-select-sm" name="position" id="position1" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    <option value="DiagnosticEngineer">Diagnostic Engineer</option>
                                    <option value="MechanicTechnician">Mechanic Technician</option>
                                    <option value="AutoElectro">Auto Electro</option>
                                    <option value="TiresReplacement">Tires Replacement</option>
                                    <option value="OilChanging">Oil Changing</option>
                                    <option value="CarWash">Car Wash</option>
                                </select>
                            </div>
                            
                            
                            <div class=" mb-3">
                                <label for="email1" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email1" name="email" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
                            </div>
                            <div class=" mb-3">
                                <label for="image" class="form-label"> Image Employee</label>
                                <input id="image" type="file" class="form-control" name="image"  > 
                                <span class="text-danger error-text image_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                               <img src="" alt="">
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
        $('#addEmployee').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
    
            $.ajax({
                url:"{{Route('admin.employee.create')}}",
                type:'POST',
                data:formData,
                contentType: false,
                processData: false,
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
                        $('#tableUser tbody').prepend('<tr  id="tr'+ response.data.id +
                        '">  <th>'+response.data.id +'</th><td id="fn'+ response.data.id +'">'+ 
                            response.data.firstName +'</td><td id="ln'+ response.data.id +'">'+ response.data.lastName +'</td><td id="ex'+ response.data.id +'">'+ response.data.experience +' year</td><td id="p'+ response.data.id +'">'+ response.data.position +'</td><td id="i'+ response.data.id +'"><img src="{{asset('images')}}/'+ response.data.image +'" style="max-width:52px; max-hieght:52px" alt="'+ response.data.firstName +' image"></td><td id="ph'+ response.data.id +'">'+ response.data.phone +'</td><td id="e'+ response.data.id +'">'+ response.data.email +'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editEmployee('+response.data.id+')" data-bs-target="#editEmployee" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteEmployee('+response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                        $('#addEmployee')[0].reset(); 
                        $('.exampleModal').modal('hide');
                        $('.modal-backdrop').modal('hide');  
                       
                        
                    }
                } 

            })
        });
        function editEmployee(id){
            $.get('/admin/employee/edit/'+id,function(data,two,three){
            console.log(data);
            
                $('#id').val(data.id);
                $('#firstName1').val(data.firstName);
                $('#lastName1').val(data.lastName);
                $('#experience1').val(data.experience);
                $('#position1').val(data.position);
                $('#email1').val(data.email);
                $('#phone1').val(data.phone);
                /* console.log();($('#courses').val(data.subject)); */
                $('#editEmployee').modal('show');
            });
        }
        $('#UpdateEmployee').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
           
        
            $.ajax({
                url:"{{Route('admin.employee.update')}}",
                type:'POST',
                data:formData,
                contentType: false,
                processData: false,
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
                        console.log(response[1]);
                        
                        $("#fn"+response.data.id ).text(response.data.firstName);
                        $("#ln"+response.data.id ).text(response.data.lastName);
                        $("#p"+response.data.id ).text(response.data.position);
                        $("#ex"+response.data.id ).text(response.data.experience+' year');
                        if (response.data && response.data.id && response.data.image) {
                            $("#image" + response.data.id).attr("src", "{{ asset('images') }}/" + response.data.image);
                        } else {
                            console.error("Response data is not in the expected format.");
                        }
                       /*  $("#image"+response.data.id ).attr( "scr", "{{asset('images')}}/"+response.data.image ); */
                        $('#e'+response.data.id ).text(response.data.email);
                        $('#ph'+response.data.id ).text(response.data.phone);
                        $('#UpdateEmployee')[0].reset();
                        $('.editEmployee').modal('hide');
                        /* $( "#greatphoto" ).attr( "title", "Photo by Kelly Clark" ); */  
                    }
        
                    
                }
            })
        })
        function deleteEmployee(id){
    
            if(confirm("Do you want delete this Record? ")){

                _token=$('input[name=_token]').val();
                $.ajax({
                    
                    url:"/admin/employee/delete/"+id,
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
        
    </script>
             
@endsection