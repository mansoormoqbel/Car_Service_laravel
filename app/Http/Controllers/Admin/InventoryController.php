<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Inventory;
use  App\Models\Supplier;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;


class InventoryController extends Controller
{
    public function Index()
    {
        
        $suppliers=Supplier::all();

        $inventories = Inventory::with(['supplier'])->get();
        /* return $inventories; */
        return view('admin.inventories', compact('inventories','suppliers'));
    }
    public function store(Request $request)
    { 
        
        try{
            $options = Supplier::pluck('id')->toArray();
            
            $validator = Validator::make($request->all(),[
                
                'itemName' => ['required', 'string', 'max:255'],
                'image' => [ 'required','image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
                'cost' => ['required', 'decimal:2,4','numeric'],
                'quantity' => ['required', 'integer','numeric'],
                'supplierName' => ['required', 'in:' . implode(',', $options)],
                
               
                
            ]); 
            if($validator->passes()) 
            { 
                if ($request->has('image')) {
                    $image=$request->file('image');
                    
                    $imageName=time().'.'.$image->extension();
                    $image->move(public_path('Inventories_item'),$imageName);
               
                }
                $id=$request->supplierName;
                $supplier= Supplier::find($id);
                
               
                $inventory=new Inventory();
                $inventory->itemName=$request->itemName;
                $inventory->image= $imageName;
                $inventory->quantity=$request->quantity;
                $inventory->supplierID=$request->supplierName;
                $inventory->cost=$request->cost;
                
               
            
                $inventory->save();
                return response()->json(['status'=>1,'data'=>$inventory ,'data1'=>$supplier,'success'=>'Supplier has been created successfully!']);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $inventory= Inventory::find($id);
        return response()->json($inventory);
    }
    public function update(request $request)
    {
       /*  return response()->json(['status'=>1,'data'=>$request]); */
        
            $options = Supplier::pluck('id')->toArray();
                    
            $validator = Validator::make($request->all(),[
                
                'itemName' => ['required', 'string', 'max:255'],
                'image' => [ 'image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
                'cost' => ['required', 'decimal:2,4','numeric'],
                'quantity' => ['required', 'integer','numeric'],
                'supplierName' => ['required', 'in:' . implode(',', $options)],
                
                
                
            ]); 
            if($validator->passes()) 
            { 
                if ($request->has('image' )!= NULL) {
                    $image=$request->file('image');
                    $imageName=time().'.'.$image->extension();
                    $image->move(public_path('Inventories_item'),$imageName);
                    $supplier=Supplier::find($request->supplierName);
                    $inventory=Inventory::find($request->id);
                    $inventory->itemName=$request->itemName;
                    $inventory->quantity=$request->quantity;
                    $inventory->supplierID=$request->supplierName;
                    $inventory->cost=$request->cost;
                    $inventory->image=$imageName;
                   
                
                    $inventory->save();
                    return response()->json(['status'=>1,'data'=>$inventory,'data1'=>$supplier]);
                }else{
                    $supplier=Supplier::find($request->supplierName);
                    $inventory=Inventory::find($request->id);
                    $inventory->itemName=$request->itemName;
                    $inventory->quantity=$request->quantity;
                    $inventory->supplierID=$request->supplierName;
                    $inventory->cost=$request->cost;
                    

                    
                    
                    
                   
                
                    $inventory->save();
                    return response()->json(['status'=>1,'data'=>$inventory ,'data1'=>$supplier]);
                }
                
                
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        
          
    }

}
