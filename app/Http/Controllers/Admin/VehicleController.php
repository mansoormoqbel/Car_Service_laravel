<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    public function Index() : View {
        
        $vehicles=Vehicle::with('user')->get();
        $users=User::where('is_admin','!=',1)->get();
        
        return  view('admin.vehicle',compact('vehicles','users'));
    }
    public function store(Request $request)
    { 
                   
        
        try{
            $options = User::pluck('id')->toArray(); 
            $validator = Validator::make($request->all(),[
                
                'make' => ['required', 'string', 'max:255'],
                'model' => ['required', 'string', 'max:255'],
                'licensePlate' => ['required', 'string', 'max:255'],
                'year' => ['required','digits:4','integer','min:1930','max:' . date('Y')],
                'UserName' => ['required', 'in:' . implode(',', $options)],
               
                
            ]); 
            if($validator->passes()) 
            { 
                $id=$request->UserName;
                $user= User::find($id);
                
               
                $vehicle=new Vehicle();
                $vehicle->make=$request->make;
                $vehicle->model=$request->model;
                $vehicle->licensePlate=$request->licensePlate;
                $vehicle->year=$request->year;
                $vehicle->user_id=$request->UserName;
                
               
            
                $vehicle->save();
                return response()->json(['status'=>1,'data'=>$vehicle ,'data1'=>$user,'success'=>'Supplier has been created successfully!']);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $vehicle= Vehicle::find($id);
        return response()->json($vehicle);
    }
    public function update(request $request)
    {
       
        
        $options = User::pluck('id')->toArray(); 
        $validator = Validator::make($request->all(),[
            
            'make' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'licensePlate' => ['required', 'string', 'max:255'],
            'year' => ['required','digits:4','integer','min:1930','max:' . date('Y')],
            'UserName' => ['required', 'in:' . implode(',', $options)],
            
            
        ]); 
        if($validator->passes()) 
        { 
            /* return response()->json(['status'=>1,'data'=>$request->make]); */ 
            $id=$request->UserName;
            $user= User::find($id);
            
            $vehicle = Vehicle::find($request->id);
            if ($vehicle === null) {
                return response()->json(['error' => 'Vehicle not found'], 404);
            }
            $vehicle->make = $request->make;
            $vehicle->model = $request->model;
            $vehicle->licensePlate=$request->licensePlate;
            $vehicle->year=$request->year;
            $vehicle->user_id=$request->UserName;
            $vehicle->save();
            return response()->json(['status'=>1,'data'=>$vehicle,'data1'=>$user,'success'=>'Supplier has been update successfully!']); 
        }
        return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        
            
           
        
          
    }

    public function Delete($id){
        try {
           
            $vehicle= Vehicle::find($id);
            $vehicle->delete();
            return response()->json(['error1'=>'Supplier has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
