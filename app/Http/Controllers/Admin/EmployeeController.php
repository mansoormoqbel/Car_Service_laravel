<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use  App\Models\Employee;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function Index() : View {
        $employees=Employee::all();
        return  view('admin.employee',compact('employees'));
    }
    public function store(Request $request)
    { 
        
        
        /* 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', */
        try{
            $validator = Validator::make($request->all(),[
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'image' => [ 'required','image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
                'email' => ['required','string','email','max:255','unique:employees'],
                'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
                'experience' => ['required', 'integer','numeric'],
                
            ]); 
            if($validator->passes()) 
            { 
                if ($request->has('image')) {
                    $image=$request->file('image');
                    
                    $imageName=time().'.'.$image->extension();
                    $image->move(public_path('images'),$imageName);
               
                }
                /* return response()->json(['status'=>1,'data'=>$request]); */
                $employee=new Employee();
                $employee->firstName=$request->firstName;
                $employee->lastName=$request->lastName;
                $employee->position=$request->position;
                $employee->experience=$request->experience;
                $employee->email=$request->email;
                $employee->phone=$request->phone;
                $employee->image=$imageName;
               
            
                $employee->save();
                return response()->json(['status'=>1,'data'=>$employee]);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $employee= Employee::find($id);
        return response()->json($employee);
    }
    public function update(request $request)
    {
       /*  return response()->json(['status'=>1,'data'=>$request]); experience*/
            
            $validator = Validator::make($request->all(),[
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'image' => [ 'image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
                'email' => ['required','string','email','max:255'/* ,'unique:employees' */],
                'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
                'experience' => ['required', 'integer','numeric'],
            ]); 
            if($validator->passes()) 
            { 
                if ($request->has('image' )!= NULL) {
                    $image=$request->file('image');
                    
                    $imageName=time().'.'.$image->extension();
                    $image->move(public_path('images'),$imageName);

                    $employee=Employee::find($request->id);
                    $employee->firstName=$request->firstName;
                    $employee->lastName=$request->lastName;
                    $employee->position=$request->position;
                    $employee->email=$request->email;
                    $employee->phone=$request->phone;
                    $employee->experience=$request->experience;
                    $employee->image=$imageName;
                   
                
                    $employee->save();
                    return response()->json(['status'=>1,'data'=>$employee]);
                }else{
                    /* return response()->json(['status'=>1,'data'=>$request->firstName]); */
                    $employee=Employee::find($request->id);
                    $employee->firstName=$request->firstName;
                    $employee->lastName=$request->lastName;
                    $employee->position=$request->position;
                    $employee->experience=$request->experience;
                    $employee->email=$request->email;
                    $employee->phone=$request->phone;
                    
                   
                
                    $employee->save();
                    return response()->json(['status'=>1,'data'=>$employee]);
                }
                
                
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        
          
    }
    public function Delete($id){
        try {
            $employee= Employee::find($id);
            $employee->delete();
            return response()->json(['success'=>'Employee has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
