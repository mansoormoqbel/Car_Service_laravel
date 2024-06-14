@extends('layouts.admin')
@section('title', 'Suppler')
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
                Add Supplier
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableSupplier">
            <thead class="table table-danger " >
              <tr>{{--  'supplierName',
                'phone',
                'address',
                'email' --}}
                
                <th scope="col">#</th>
                <th scope="col">Supplier Name</th>
                <th scope="col">address</th>
                <th scope="col">phone</th>
                <th scope="col">email</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
            
                @foreach ($suppliers as $supplier)
                <tr id="tr{{$supplier ->id}}">
                    <th scope="row">{{$supplier->id}}</th>
                    <td id="sn{{$supplier ->id}}" >{{$supplier->supplierName}}</td>
                    <td id="a{{$supplier ->id}}">{{$supplier->address}}</td>
                    <td id="ph{{$supplier ->id}}">{{$supplier->phone}}</td>
                    <td id="e{{$supplier ->id}}">{{$supplier->email}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editSupplier({{$supplier->id}})" data-bs-target="#editSupplier"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                        <a href="javascript:void(0) "onclick="deleteSupplier({{$supplier->id}})"
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addSupplier" action=""> 
                            @csrf
                            <div class="mb-3">
                                <label for="supplierName" class="form-label">Supplier Name </label>
                                <input type="text" class="form-control" id="supplierName" name="supplierName" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text supplierName_error">  
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
                                <span class="text-danger error-text phone_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
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
        <div class="modal fade" id="editSupplier"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="UpdateSuplier" action=""> 
                            @csrf
                            <input type="hidden"  value="" id="id" name="id" >
                            <div class="mb-3">
                                <label for="supplierName" class="form-label">Supplier Name </label>
                                <input type="text" class="form-control" id="supplierName1" name="supplierName1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text supplierName_error">  
                                </span>                          
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone </label>
                                <input type="text" class="form-control" id="phone1" name="phone1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text phone_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address </label>
                                <input type="text" class="form-control" id="address1" name="address1" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text phone_error">  
                                </span>
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp">
                                <span class="text-danger error-text email_error">  
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
    $('#addSupplier').submit(function(e){
        e.preventDefault();
        let supplierName= $('#supplierName').val();
        let address= $('#address').val();
        let phone= $('#phone').val();
        let email=$('#email').val();
        let _token=$('input[name=_token]').val();
    
        $.ajax({
            url:"{{Route('admin.supplier.create')}}",
            type:'POST',
            data:{
               
                supplierName:supplierName,
                address:address,
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
                    $('#tableSupplier tbody').prepend('<tr  id="tr'+ response.data.id +
                    '">  <th>'+response.data.id +'</th><td id="sn'+ response.data.id +'">'
                        + response.data.supplierName +'</td><td id="a'+ response.data.id +'">'+
                             response.data.address +'</td><td id="ph'+ response.data.id +'">'
                                + response.data.phone +'</td><td id="e'+ response.data.id +'">'
                                    + response.data.email +'</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editSupplier('+response.data.id+
                                        ')" data-bs-target="#editSupplier" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteSupplier('+response.data.id+
                                        ')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                        $('#addSupplier')[0].reset(); 
                        $('.exampleModal').modal('hide');
                        $('.modal-backdrop').modal('hide');  
                        $('span.success_error').text(response.success);

                        
                    
                }
            } 

        })
    });
    function editSupplier(id){
        $.get('/admin/supplier/edit/'+id,function(data,two,three){
            console.log(data);
            
            $('#id').val(data.id);
            $('#supplierName1').val(data.supplierName);
           
            $('#address1').val(data.address);
            $('#email1').val(data.email);
            $('#phone1').val(data.phone);
            /* console.log();($('#courses').val(data.subject)); */
            $('#editSupplier').modal('show');
        });
    }
    $('#UpdateSuplier').submit(function(e){
        e.preventDefault();
        let supplierName= $('#supplierName1').val();
        let address= $('#address1').val();
        let phone= $('#phone1').val();
        let email=$('#email1').val();
        let id=$('#id').val();
        
        let _token=$('input[name=_token]').val();
        
        $.ajax({
            url:"{{Route('admin.supplier.update')}}",
            type:'POST',
            data:{
                id:id,
                supplierName:supplierName,
                address:address,
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
                    
                    $("#sn"+response.data.id ).text(response.data.supplierName);
                    $("#a"+response.data.id ).text(response.data.address);
                
                    $('#e'+response.data.id ).text(response.data.email);
                    $('#ph'+response.data.id ).text(response.data.phone);
                    $('#UpdateSuplier')[0].reset();
                    $('.editSupplier').modal('hide');  
                    $('span.success_error').text(response.success);
                    
                }
    
                
            }
        })
    })
    function deleteSupplier(id){
    
        if(confirm("Do you want delete this Record? ")){

            _token=$('input[name=_token]').val();
            $.ajax({
                
                url:"/admin/supplier/delete/"+id,
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