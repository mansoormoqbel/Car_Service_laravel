<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\View\View;
use  App\Models\User;
use  App\Models\Opinion;
use Illuminate\Support\Facades\Validator;

class OpinionController extends Controller
{
    public function Index() : View {
        $users=User::Where('is_admin',0)->get();
        $opinions=Opinion::with( ['user'] )->get();
      /*   return $users; */
        return  view('admin.opinion',compact('opinions','users'));
    }
    public function store(Request $request)
    { 
       
        try{
            $options = User::pluck('id')->toArray();
            $validator = Validator::make($request->all(),[
                'UserName' => ['required', 'in:' . implode(',', $options)],
                'opinion' => ['required', 'string', 'max:255'],
                'rating' => ['required', 'integer'],
                
                
            ]); 
            if($validator->passes()) 
            { 
                $id=$request->UserName;
                $user= User::find($id);
               
                $opinion=new Opinion();
                $opinion->user_id=$request->UserName;
                $opinion->opinion=$request->opinion;
                $opinion->rating=$request->rating;
                
                
               
            
                $opinion->save();
                return response()->json(['status'=>1,'data'=>$opinion ,'data1'=>$user ,'success'=>'Opinion has been created successfully!']);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $opinion= Opinion::find($id);
        return response()->json($opinion);
    }
    public function update(request $request)
    {
        $options = User::pluck('id')->toArray();
        $validator = Validator::make($request->all(),[
            'UserName' => ['required', 'in:' . implode(',', $options)],
            'opinion' => ['required', 'string', 'max:255'],
            'rating' => ['required', 'integer'],   
        ]); 
        if($validator->passes()) 
        { 

                
            $id=$request->UserName;
            $user= User::find($id);
            
            $opinion = Opinion::find($request->id);
            if ($opinion === null) {
                return response()->json(['error' => 'Vehicle not found'], 404);
            }
            $opinion->user_id=$request->UserName;
            $opinion->opinion=$request->opinion;
            $opinion->rating=$request->rating;
            $opinion->save();
            return response()->json(['status'=>1,'data'=>$opinion,'data1'=>$user,'success'=>'opinion has been update successfully!']); 
        }
        return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]);  
    }
    public function Delete($id){
        try {
           
            $opinion= Opinion::find($id);
            $opinion->delete();
            return response()->json(['error1'=>'Opinion has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
