<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use  App\Models\Supplier;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function Index() : View {
        $suppliers=Supplier::all();
        return  view('admin.supplier',compact('suppliers'));
    }
    public function store(Request $request)
    { 
        
        try{
            $validator = Validator::make($request->all(),[
                
                'supplierName' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'email' => ['required','string','email','max:255','unique:employees'],
                'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
                
            ]); 
            if($validator->passes()) 
            { 
               
                $supplier=new Supplier();
                $supplier->supplierName=$request->supplierName;
                $supplier->address=$request->address;
                $supplier->email=$request->email;
                $supplier->phone=$request->phone;
                
               
            
                $supplier->save();
                return response()->json(['status'=>1,'data'=>$supplier ,'success'=>'Supplier has been created successfully!']);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $supplier= Supplier::find($id);
        return response()->json($supplier);
    }
    public function update(request $request)
    {
       
        
        $validator = Validator::make($request->all(),[
                
            'supplierName' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255','unique:employees'],
            'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
            
        ]); 
        if($validator->passes()) 
        { 
            /* return response()->json(['status'=>1,'data'=>$request->firstName]); */
            $supplier=Supplier::find($request->id);
            $supplier->supplierName=$request->supplierName;
            $supplier->address=$request->address;
            $supplier->email=$request->email;
            $supplier->phone=$request->phone;
            $supplier->save();
            return response()->json(['status'=>1,'data'=>$supplier,'success'=>'Supplier has been update successfully!']); 
        }
        return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        
            
           
        
          
    }
    public function Delete($id){
        try {
           
            $supplier= Supplier::find($id);
            $supplier->delete();
            return response()->json(['error1'=>'Supplier has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
