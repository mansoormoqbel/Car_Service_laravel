@extends('layouts.admin')
@section('title', 'Contacts')
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
                Add Contact
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableContact">
            <thead class="table table-danger " >
              <tr> <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">phone</th>
                <th scope="col">email</th>
                
                <th scope="col">Handle</th>
              </tr>
              
            </thead>
            <tbody>
            
                @foreach ($contacts as $contact)
                    <tr id="tr{{$contact ->id}}">
                        <th scope="row">{{$contact->id}}</th>
                        <td id="fn{{$contact ->id}}" >{{$contact->firstName}}</td>
                        <td id="ln{{$contact ->id}}">{{$contact->lastName}}</td>
                        <td id="s{{$contact ->id}}">{{$contact->subject}}</td>
                        <td id="m{{$contact ->id}}">{{$contact->message}}</td>
                        <td id="ph{{$contact ->id}}">{{$contact->phone}}</td>
                        <td id="e{{$contact ->id}}">{{$contact->email}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editContact({{$contact->id}})" data-bs-target="#editContact"
                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                            <a href="javascript:void(0) "onclick="deleteContact({{$contact->id}})"
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addContact" action=""> 
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
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject </label>
                                <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text subject_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message </label>
                                <input type="text" class="form-control" id="message" name="message" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text message_error">  
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
        <div class="modal fade" id="editContact"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateSuplier" action=""> 
                            @csrf
                            <input type="hidden"  value="" id="id" name="id" >
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name </label>
                                <input type="text" class="form-control" id="firstName1" name="firstName1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text firstName_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name </label>
                                <input type="text" class="form-control" id="lastName1" name="lastName1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text lastName_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone </label>
                                <input type="text" class="form-control" id="phone1" name="phone1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text phone_error">  
                                </span>                          
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject </label>
                                <input type="text" class="form-control" id="subject1" name="subject1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text subject_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message </label>
                                <input type="text" class="form-control" id="message1" name="message1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text message_error">  
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
        $('#addContact').submit(function(e){
            e.preventDefault();
                let firstName= $('#firstName').val();
                let lastName= $('#lastName').val();
                let subject= $('#subject').val();
                let message= $('#message').val();
                let phone= $('#phone').val();
                let email=$('#email').val();
                
            
                let _token=$('input[name=_token]').val();
        
            $.ajax({
                url:"{{Route('admin.contact.create')}}",
                type:'POST',
                data:{
                
                    firstName:firstName,
                    lastName:lastName,
                    subject:subject,
                    message:message,
                    email:email,
                    phone:phone,
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
                        $('#tableContact tbody').prepend('<tr  id="tr'+ response.data.id +
                        '">  <th>'+response.data.id +'</th><td id="fn'+ response.data.id +'">'
                            + response.data.firstName +'</td><td id="ln'+ response.data.id +'">'+
                                response.data.lastName +'</td><td id="s'+response.data.subject+'">'+response.data.subject
                                    +'</td><td id="m'+response.data.message+'">'+response.data.message+'</td><td id="ph'+ response.data.id +'">'
                                    + response.data.phone +'</td><td id="e'+ response.data.id +'">'
                                        + response.data.email +'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editContact('+response.data.id+
                                            ')" data-bs-target="#editContact" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteContact('+response.data.id+
                                            ')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                            $('#addContact')[0].reset(); 
                            $('.exampleModal').modal('hide');
                            $('.modal-backdrop').modal('hide');  
                            $('span.success_error').text(response.success);

                            
                        
                    }
                } 

            })
        });
        function editContact(id){
            $.get('/admin/contact/edit/'+id,function(data,two,three){
                console.log(data);
                
                
                $('#id').val(data.id);
                $('#firstName1').val(data.firstName);
                $('#lastName1').val(data.lastName);
                $('#subject1').val(data.subject);
            
                $('#message1').val(data.message);
                $('#email1').val(data.email);
                $('#phone1').val(data.phone);
                /* console.log();($('#courses').val(data.subject)); */
                $('#editContact').modal('show');
            });
        }
        $('#UpdateSuplier').submit(function(e){
            e.preventDefault();
            let firstName= $('#firstName1').val();
            let lastName= $('#lastName1').val();
            let subject= $('#subject1').val();
            let message= $('#message1').val();
            let phone= $('#phone1').val();
            let email=$('#email1').val();
            let id=$('#id').val();
            
            let _token=$('input[name=_token]').val();
            
            $.ajax({
                url:"{{Route('admin.contact.update')}}",
                type:'POST',
                data:{
                    id:id,
                    firstName:firstName,
                    lastName:lastName,
                    subject:subject,
                    message:message,
                    email:email,
                    phone:phone,
                    _token:_token
                },beforeSend:function(){
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
                        
                        $("#fn"+response.data.id ).text(response.data.firstName);
                        $("#ln"+response.data.id ).text(response.data.lastName);
                        $("#m"+response.data.id ).text(response.data.message);
                        $("#s"+response.data.id ).text(response.data.subject);
                        $('#e'+response.data.id ).text(response.data.email);
                        $('#ph'+response.data.id ).text(response.data.phone);
                        $('#UpdateSuplier')[0].reset();
                        $('.editSupplier').modal('hide');  
                        $('span.success_error').text(response.success);
                        
                    }
        
                    
                }
            })
        })
        function deleteContact(id){
    
            if(confirm("Do you want delete this Record? ")){

                _token=$('input[name=_token]').val();
                $.ajax({
                    
                    url:"/admin/contact/delete/"+id,
                    type:'delete',
                    data:{
                        _token:_token,
                    },
                    success:function(response){
                        console.log(response);
                        $('#tr'+id).remove();
                        $('span.error_error').text(response.error1);
                        
                    }
                });
            }
        }
        function hideSessionMessage1() {
            var sessionMessage = document.getElementById('Error');
            if (sessionMessage) {
                sessionMessage.style.display = 'none';
            }
        }

         // Hide the session message after 1 minute (30000 milliseconds)
        setTimeout(hideSessionMessage1, 30000);
        function hideSessionMessage() {
            var sessionMessage = document.getElementById('Error1');
            if (sessionMessage) {
                sessionMessage.style.display = 'none';
            }
        }

        // Hide the session message after 1 minute (60000 milliseconds)
        setTimeout(hideSessionMessage, 30000); 
    </script>
             
@endsection