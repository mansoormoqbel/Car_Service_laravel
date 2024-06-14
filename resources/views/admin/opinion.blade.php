@extends('layouts.admin')
@section('title', 'Opinion')
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
                Add Opinion
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableOpinion">
            <thead class="table table-danger " >
              <tr>
                
                <th scope="col">#</th>
                <th scope="col">First Name </th>
                <th scope="col">Last Name</th>
                <th scope="col">opinion</th>
                <th scope="col">rating</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
            
                @foreach ($opinions as $opinion)
                <tr id="tr{{$opinion ->id}}">
                    <th scope="row">{{$opinion->id}}</th>
                    <td id="fn{{$opinion ->id}}" >{{$opinion->user->firstName}}</td>
                    <td id="ln{{$opinion ->id}}">{{$opinion->user->lastName}}</td>
                    <td id="o{{$opinion ->id}}">{{$opinion->opinion}}</td>
                    <td id="r{{$opinion ->id}}">{{$opinion->rating}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editOpioion({{$opinion->id}})" data-bs-target="#editOpioion"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                        <a href="javascript:void(0) "onclick="deleteOpinion({{$opinion->id}})"
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Opinion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addopinion" action=""> 
                            @csrf
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
                            <div class="mb-3">
                                <label for="opinion" class="form-label">Opinion </label>
                                <input type="text" class="form-control" id="opinion" name="opinion" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text opinion_error">  
                                </span>                          
                            </div>
                            <div class=" mb-3">
                                <label for="rating" class="form-label">Rating </label>
                                <input type="number" class="form-control" id="rating" name="rating" aria-describedby="emailHelp" min="1" max="5">
                                <span class="text-danger error-text rating_error">  
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
        <div class="modal fade" id="editOpioion"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateOpinion" action=""> 
                            @csrf
                            <input type="hidden"  value="" id="id" name="id" >
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
                            <div class="mb-3">
                                <label for="opinion" class="form-label">Opinion </label>
                                <input type="text" class="form-control" id="opinion1" name="opinion1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text opinion_error">  
                                </span>                          
                            </div>
                            <div class=" mb-3">
                                <label for="rating" class="form-label">Rating </label>
                                <input type="number" class="form-control" id="rating1" name="rating1" aria-describedby="emailHelp" min="1" max="5">
                                <span class="text-danger error-text rating_error">  
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
        $('#addopinion').submit(function(e){
            e.preventDefault();
            let UserName= $('#UserName').val();
            let opinion= $('#opinion').val();
            let rating= $('#rating').val();
            
            let _token=$('input[name=_token]').val();
        
            $.ajax({
                url:"{{Route('admin.opinion.create')}}",
                type:'POST',
                data:{
                
                    UserName:UserName,
                    opinion:opinion,
                    rating:rating,
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
                        $('#tableOpinion tbody').prepend('<tr  id="tr'+ response.data.id +
                        '">  <th>'+response.data.id +'</th><td id="fn'+ response.data.id +'">'
                            + response.data1.firstName +'</td><td id="ln'+ response.data.id +'">'+
                                response.data1.lastName +'</td><td id="o'+ response.data.id +'">'
                                    + response.data.opinion +'</td><td id="r'+ response.data.id +'">'
                                        + response.data.rating +'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editOpioion('+response.data.id+
                                            ')" data-bs-target="#editOpioion" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteOpinion('+response.data.id+
                                            ')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                            $('#addopinion')[0].reset(); 
                            $('.exampleModal').modal('hide');
                            $('.modal-backdrop').modal('hide');  
                            $('span.success_error').text(response.success);

                            
                        
                    }
                } 

            })
        });
        function editOpioion(id){
            $.get('/admin/opinion/edit/'+id,function(data,two,three){
                console.log(data);
                
                $('#id').val(data.id);
                $('#UserName1').val(data.user_id);
            
                $('#opinion1').val(data.opinion);
                $('#rating1').val(data.rating);
               
                /* console.log();($('#courses').val(data.subject)); */
                $('#editOpioion').modal('show');
            });
        }
        $('#UpdateOpinion').submit(function(e){
            e.preventDefault();
           
            let UserName= $('#UserName1').val();
            let opinion= $('#opinion1').val();
            let rating= $('#rating1').val();
            
            let id=$('#id').val();
            
            let _token=$('input[name=_token]').val();
            
            $.ajax({
                url:"{{Route('admin.opinion.update')}}",
                type:'POST',
                data:{
                    id:id,
                    UserName:UserName,
                    opinion:opinion,
                    rating:rating,
                    
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
                        
                        $("#fn"+response.data.id ).text(response.data1.firstName);
                        $("#ln"+response.data.id ).text(response.data1.lastName);
                    
                        $('#o'+response.data.id ).text(response.data.opinion);
                        $('#r'+response.data.id ).text(response.data.rating);
                        $('#UpdateOpinion')[0].reset();
                        $('.editOpioion').modal('hide');  
                        $('span.success_error').text(response.success);
                        
                    }
        
                    
                }
            })
        })
        function deleteOpinion(id){
        
            if(confirm("Do you want delete this Record? ")){

                _token=$('input[name=_token]').val();
                $.ajax({
                    
                    url:"/admin/opinion/delete/"+id,
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