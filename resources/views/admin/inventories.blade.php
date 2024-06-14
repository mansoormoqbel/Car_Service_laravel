@extends('layouts.admin')
@section('title', 'inventories')
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
                Add Inventory
            </a>
        <table class="table align-middle table-dark table-hover table-striped "id="tableInventory">
            <thead class="table table-danger " >
              <tr>
                
                <th scope="col">#</th>
                <th scope="col">Item Name</th>
                
                <th scope="col">supplierName</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">price piece</th>
                
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
            
                @foreach ($inventories as $inventory)
                <tr id="tr{{$inventory ->id}}">
                    <th scope="row">{{$inventory->id}}</th>
                    <td id="in{{$inventory ->id}}" >{{$inventory->itemName}}</td>
                    <td id="sn{{$inventory ->id}}">{{$inventory->supplier->supplierName}}</td>
                    <td id="q{{$inventory ->id}}">{{$inventory->quantity}}</td>
                    <td id="i{{$inventory ->id}}"><img id="image{{$inventory ->id}}" src="{{asset('Inventories_item')}}/{{$inventory->image}}" style="max-width:52px; max-hieght:52px" alt=""></td>
                    <td id="c{{$inventory ->id}}">{{$inventory->cost}}</td>
                    
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <a href="javascript:void(0)" data-bs-toggle="modal" onclick="editInventory({{$inventory->id}})" data-bs-target="#editInventory"
                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                        <a href="javascript:void(0) "onclick="deleteEmployee({{$inventory->id}})"
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
                        <h5 class="modal-title" id="exampleModalLabel">Add Inventory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addInvevtory" action=""> 
                            @csrf
                            <div class="mb-3">
                                <label for="supplierName" class="form-label">Supplier Name  </label>
                                <select class="form-select form-select-sm" name="supplierName" id="supplierName" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{$supplier->id}}"> {{$supplier->supplierName}}  </option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text supplierName_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="itemName" class="form-label">Item Name</label>
                                <input type="text" class="form-control" id="itemName" name="itemName" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text itemName_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text quantity_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="cost" class="form-label">price piece</label>
                                <input type="text" class="form-control" id="cost" name="cost" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text cost_error">  
                                </span>                          
                            </div>
                            <div class=" mb-3">
                                <label for="image" class="form-label"> Image Item</label>
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
        <div class="modal fade" id="editInventory"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="supplierName" class="form-label">Supplier Name  </label>
                                <select class="form-select form-select-sm" name="supplierName" id="supplierName1" aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{$supplier->id}}"> {{$supplier->supplierName}}  </option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text supplierName_error">  
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="itemName" class="form-label">Item Name</label>
                                <input type="text" class="form-control" id="itemName1" name="itemName" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text itemName_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="text" class="form-control" id="quantity1" name="quantity" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text quantity_error">  
                                </span>                          
                            </div>
                            <div class="mb-3">
                                <label for="cost" class="form-label">price piece</label>
                                <input type="text" class="form-control" id="cost1" name="cost" aria-describedby="emailHelp">                           
                                <span class="text-danger error-text cost_error">  
                                </span>                          
                            </div>
                            <div class=" mb-3">
                                <label for="image" class="form-label"> Image Item</label>
                                <input id="image1" type="file" class="form-control" name="image"  > 
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
        $('#addInvevtory').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
    
            $.ajax({
                url:"{{Route('admin.inventory.create')}}",
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
                       
                        $('#tableInventory tbody').prepend('<tr  id="tr'+ response.data.id +'">  <th>'+response.data.id +
                            '</th><td id="in'
                            + response.data.id +'">'+ response.data.itemName 
                            +'</td><td id="sn'+ response.data.id +'">'+ response.data1.supplierName +
                                '</td><td id="q'+ response.data.id +'">'+ response.data.quantity +
                                    '</td><td id="i'+ response.data.id +'"><img src="{{asset('Inventories_item')}}/'+ response.data.image 
                                        +'" style="max-width:52px; max-hieght:52px" alt="'+ response.data.itemName +
                                        ' image"></td><td id="c'+ response.data.id +'">'+ response.data.cost +
                                            '</td><td><div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-bs-toggle="modal" onclick="editInventory('
                                                    +response.data.id+')" data-bs-target="#editInventory" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a><a href="javascript:void(0)"  onclick="deleteEmployee('
                                                    +response.data.id+')"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a></td></tr>');
                        $('#addInvevtory')[0].reset(); 
                        $('.exampleModal').modal('hide');
                        $('.modal-backdrop').modal('hide');  
                       
                        
                    }
                } 

            })
        });
        function editInventory(id){
            $.get('/admin/inventory/edit/'+id,function(data,two,three){
            console.log(data);
            
                $('#id').val(data.id);
                $('#supplierName1').val(data.supplierID);
                $('#itemName1').val(data.itemName);
                $('#quantity1').val(data.quantity);
                $('#cost1').val(data.cost);
                $('#image1').val(data.image);
                /* console.log();($('#courses').val(data.subject)); */
                $('#editInventory').modal('show');
            });
        }
        $('#UpdateUser').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
           
        
            $.ajax({
                url:"{{Route('admin.inventory.update')}}",
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
                        console.log(response);
                        
                        $("#in"+response.data.id ).text(response.data.itemName);
                        $("#sn"+response.data.id ).text(response.data1.supplierName);
                        $("#q"+response.data.id ).text(response.data.quantity);
                        if (response.data && response.data.id && response.data.image) {
                            $("#image" + response.data.id).attr("src", "{{ asset('Inventories_item') }}/" + response.data.image);
                        } else {
                            console.error("Response data is not in the expected format.");
                        }
                       
                        $('#c'+response.data.id ).text(response.data.cost);
                        $('#UpdateUser')[0].reset();
                        $('.editInventory').modal('hide');
                        /* $( "#greatphoto" ).attr( "title", "Photo by Kelly Clark" ); */  
                    }
        
                    
                }
            })
        })
    </script>
             
@endsection