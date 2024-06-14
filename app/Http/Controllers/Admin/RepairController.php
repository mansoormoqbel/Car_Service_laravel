<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Repair;
use App\Models\Vehicle;
use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class RepairController extends Controller
{
    public function Index()
    {
        $employees=Employee::all();
        $vehicles=Vehicle::all();

        $repairs = Repair::with(['vehicle.user', 'employee'])->get();
        /* return $repairs; */
        return view('admin.repair', compact('repairs','employees','vehicles'));
    }
    public function store(Request $request)
    { 
        
        try{
            $options = Employee::pluck('id')->toArray();
            $options1 = Vehicle::pluck('id')->toArray(); 
            $validator = Validator::make($request->all(),[
                
                'description' => ['required', 'string', 'max:255'],
                'cost' => ['required', 'decimal:2,4','numeric'],
                'repairDate' => ['required','date','after_or_equal:today'],
                'employeeID' => ['required', 'in:' . implode(',', $options)],
                'vehicleID' => ['required', 'in:' . implode(',', $options1)],
               
                
            ]); 
            if($validator->passes()) 
            { 
                $id=$request->employeeID;
                $id1=$request->vehicleID;
                $vehicle= Vehicle::find($id1);
                $employee= Employee::find($id);
                
               
                $repair=new Repair();
                $repair->vehicleID=$request->vehicleID;
                $repair->employeeID=$request->employeeID;
                $repair->repairDate=$request->repairDate;
                $repair->description=$request->description;
                $repair->cost=$request->cost;
                
               
            
                $repair->save();
                return response()->json(['status'=>1,'data'=>$repair ,'data1'=>$vehicle,'data2'=>$employee,'success'=>'Supplier has been created successfully!']);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $repair= Repair::find($id);
        return response()->json($repair);
    }
    public function update(request $request)
    {
       
        
        $options = Employee::pluck('id')->toArray();
        $options1 = Vehicle::pluck('id')->toArray(); 
        $validator = Validator::make($request->all(),[
            
            'description' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'decimal:2,4','numeric'],
            'repairDate' => ['required','date','after_or_equal:today'],
            'employeeID' => ['required', 'in:' . implode(',', $options)],
            'vehicleID' => ['required', 'in:' . implode(',', $options1)],
            
            
        ]); 
        if($validator->passes()) 
        { 
            /* return response()->json(['status'=>1,'data'=>$request->make]); */ 
            $id=$request->employeeID;
            $id1=$request->vehicleID;
            $vehicle= Vehicle::find($id1);
            $employee= Employee::find($id);
            
            $repair = Repair::find($request->id);
            if ($repair === null) {
                return response()->json(['error' => 'Vehicle not found'], 404);
            }
            $repair->vehicleID=$request->vehicleID;
            $repair->employeeID=$request->employeeID;
            $repair->repairDate=$request->repairDate;
            $repair->description=$request->description;
            $repair->cost=$request->cost;
            $repair->save();
            return response()->json(['status'=>1,'data'=>$repair,'data1'=>$vehicle,'data2'=>$employee,'success'=>'Supplier has been update successfully!']); 
        }
        return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        
            
           
        
          
    }

    public function Delete($id){
        try {
           
            $repair= Repair::find($id);
            $repair->delete();
            return response()->json(['error1'=>'Repair has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
