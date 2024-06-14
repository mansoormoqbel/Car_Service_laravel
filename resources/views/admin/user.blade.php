@extends('layouts.admin')
@section('title', 'user')
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
                Add User
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableUser">
            <thead class="table table-danger " >
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">phone</th>
                <th scope="col">email</th>
                
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
            
                @foreach ($users as $user)
                <tr id="tr{{$user ->id}}">
                    <th scope="row">{{$user->id}}</th>
                    <td id="fn{{$user ->id}}" >{{$user->firstName}}</td>
                    <td id="ln{{$user ->id}}">{{$user->lastName}}</td>
                    <td id="a{{$user ->id}}">{{$user->address}}</td>
                    <td id="ph{{$user ->id}}">{{$user->phone}}</td>
                    <td id="e{{$user ->id}}">{{$user->email}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editUser({{$user->id}})" data-bs-target="#editUser"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                        <a href="javascript:void(0) "onclick="deleteUser({{$user->id}})"
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
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addUser" action=""> 
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
                                <label for="address" class="form-label">Address </label>
                                <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text address_error">  
                                </span>                          
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="image" class="form-label"> Image User</label>
                                <input id="image" type="file" class="form-control" name="image"  > 
                                <span class="text-danger error-text image_error">  
                                </span>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="form-label ">{{ __('Password') }}</label>
    
                                
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    <span class="text-danger error-text password_error">  
                                    </span>
                                
                            </div>
    
                            
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                
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
        <div class="modal fade" id="editUser"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateUser" action=""> 
                            @csrf
                            <input type="hidden"  value="" id="id" name="id" >
                            <div class="mb-3">
                                <label for="firstname1" class="form-label">First Name </label>
                                <input type="text" class="form-control" id="firstname1" name="firstName" aria-describedby="emailHelp">
                                <span class="text-danger error-text firstName_error">  

                            </div>
                            <div class="mb-3">
                                <label for="lastname1" class="form-label">Last Name </label>
                                <input type="text" class="form-control" id="lastname1" name="lastName" aria-describedby="emailHelp">
                                <span class="text-danger error-text lastName_error">  

                            </div>
                            <div class="mb-3">
                                <label for="address1" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address1" name="address" aria-describedby="emailHelp">
                                <span class="text-danger error-text address_error">  

                            </div>
                            
                            <div class=" mb-3">
                                <label for="phone1" class="form-label">Phone Number </label>
                                <input type="text" class="form-control" id="phone1" name="phone" aria-describedby="emailHelp">
                                <span class="text-danger error-text phone_error">  
                            </div>
                            <div class=" mb-3">
                                <label for="email1" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email1" name="email" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
                            </div>
                            <div class=" mb-3">
                                <label for="image" class="form-label"> Image User</label>
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
    <!-- end update user with ajax  -->
@endsection
@section('script')
        {{-- jquery  --}}
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
        <script>
            $('#addUser').submit(function(e){
                e.preventDefault();
                /* let firstName= $('#firstName').val();
                let lastName= $('#lastName').val();
                let address= $('#address').val();
                let phone= $('#phone').val();
                let email=$('#email').val();
                let password= $('#password').val();
                let password_confirmation= $('#password_confirmation').val();
            
                let _token=$('input[name=_token]').val(); */
                var formData = new FormData(this);
            
                $.ajax({
                    url:"{{Route('admin.user.create')}}",
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
                            if(response.data.stats == 1){
                                $('#tableUser tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +'</th><td id="fn'+ response.data.id +'">'+ response.data.firstName +'</td><td id="ln'+ response.data.id +'">'+ response.data.lastName +'</td><td id="a'+ response.data.id +'">'+ response.data.address +'</td><td id="ph'+ response.data.id +'">'+ response.data.phone +'</td><td id="e'+ response.data.id +'">'+ response.data.email +'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editUser('+response.data.id+')" data-bs-target="#editUser" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteUser('+response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addUser')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');  
                            }else{
                                $('#tableUser tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +'</th><td id="fn'+ response.data.id +'">'+ response.data.firstName +'</td><td id="ln'+ response.data.id +'">'+ response.data.lastName +'</td><td id="a'+ response.data.id +'">'+ response.data.address +'</td><td id="ph'+ response.data.id +'">'+ response.data.phone +'</td><td id="e'+ response.data.id +'">'+ response.data.email +'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editUser('+response.data.id+')" data-bs-target="#editUser" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteUser('+response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                                $('#addUser')[0].reset(); 
                                $('.exampleModal').modal('hide');
                                $('.modal-backdrop').modal('hide');  
                            }
                            
                        }
                    } 

                })
            });
            function editUser(id){
                $.get('/admin/user/edit/'+id,function(data,two,three){
                   console.log(data);
                   
                    $('#id').val(data.id);
                    $('#firstname1').val(data.firstName);
                    $('#lastname1').val(data.lastName);
                    $('#address1').val(data.address);
                    $('#email1').val(data.email);
                    $('#phone1').val(data.phone);
                    /* console.log();($('#courses').val(data.subject)); */
                    $('#editUser').modal('show');
                });
            }
            $('#UpdateUser').submit(function(e){
                e.preventDefault();
               /*  let firstname= $('#firstname1').val();
                let lastname= $('#lastname1').val();
                let address= $('#address1').val();
                let phone= $('#phone1').val();
                let email=$('#email1').val();
                let id=$('#id').val();
               
                let _token=$('input[name=_token]').val(); */
                var formData = new FormData(this);
                $.ajax({
                    url:"{{Route('admin.user.update')}}",
                    type:'POST',
                    data:formData,
                    contentType: false,
                    processData: false,
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
                            console.log(response[0]);
                            
                            $("#fn"+response[0].id ).text(response[0].firstName);
                            $("#ln"+response[0].id ).text(response[0].lastName);
                            $("#a"+response[0].id ).text(response[0].address);
                        
                            $('#e'+response[0].id ).text(response[0].email);
                            $('#ph'+response[0].id ).text(response[0].phone);
                            $('#UpdateUser')[0].reset();
                            $('.editUser').modal('hide');  
                        }
            
                        
                    }
                })
            })
            function deleteUser(id){
            
                if(confirm("Do you want delete this Record? ")){

                    _token=$('input[name=_token]').val();
                    $.ajax({
                        
                        url:"/admin/user/delete/"+id,
                        type:'delete',
                        data:{
                            _token:_token,
                        },
                        success:function(respones){
                            console.log(respones);
                            $('#tr'+id).remove();
                        }
                    });
                }
            }
            
        </script>        
    @endsection