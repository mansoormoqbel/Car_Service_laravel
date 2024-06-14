@extends('layouts.user')
@section('title', 'Home')
@section('content')


@endsection
@section('')

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