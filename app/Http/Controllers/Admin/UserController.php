<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use  App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function User() : View {
        $users=User::Where('is_admin',0)->get();
        return  view('admin.user',compact('users'));
    }
    public function store(Request $request)
    { 
        $validator = Validator::make($request->all(),[
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'address' => [ 'string', 'max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'image' => [ 'image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
            'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
            'password' => ['required','string','min:8','confirmed'], 
        ]); 
        if($validator->passes()) 
        {   
            if ($request->has('image' )!= NULL) {
                $image=$request->file('image');
                
                $imageName=time().'.'.$image->extension();
                $image->move(public_path('profile'),$imageName);
                $user=new User();
                $user->firstName=$request->firstName;
                $user->lastName=$request->lastName;
                $user->address=$request->address;
                $user->email=$request->email;
                $user->image=$imageName;
                $user->phone=$request->phone;
                $user->password=Hash::make($request->password);
            
                $user->save();
                return response()->json(['status'=>1,'data'=>$user]);
            }else{
                $user=new User();
                $user->firstName=$request->firstName;
                $user->lastName=$request->lastName;
                $user->address=$request->address;
                $user->email=$request->email;
                $user->image='';
                $user->phone=$request->phone;
                $user->password=Hash::make($request->password);
            
                $user->save();
                return response()->json(['status'=>1,'data'=>$user]);
            }
        }
        
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        
       
        
   
    }
    public function edit($id)
    {
        $user1= User::find($id);
        return response()->json($user1);
    }
    public function update(request $data)
    {
        
        /* return response()->json([$data]); */
        $validator = Validator::make($data->all(),[
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'address' => [ 'string', 'max:255'],
            'image' => [ 'image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
        ]); 
        if($validator->passes()) 
        {
            $user=User::find($data->id);
            if ($user === null) {
                // Log the error and handle it appropriately
                error_log('User not found with ID: ' . $data->input('id'));
                return response()->json(['error' => 'User not found'], 404);
            }
            if($data->has('image')!= Null){
                $image=$data->file('image');
                
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('profile'),$imageName);
           /*  return response()->json([$data]); */
           /*  $user=User::find($data->id); */
           /* input('firstName') */
           $user->firstName=$data->input('firstName');
           $user->lastName=$data->input('lastName');
           $user->address=$data->input('address');
           $user->email=$data->input('email');
           $user->phone=$data->input('phone');
           $user->image=$imageName;
           /*  $user->firstName=$data->firstName;
            $user->lastName=$data->lastName;
            $user->address=$data->address;
            $user->email=$data->email;
            $user->phone=$data->phone;
            $user->image=$imageName; */
           
           
            $user->save();
            return response()->json(['status'=>1,$user]);
            }else{
               /*  return response()->json([$data]); */
            $user=User::find($data->id);
            $user->firstName=$data->firstName;
            $user->lastName=$data->lastName;
            $user->address=$data->address;
            $user->email=$data->email;
            $user->phone=$data->phone;
           
           
            $user->save();
            return response()->json(['status'=>1,$user]);

            }
            
        }
        return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
    }
    public function Delete($id){
        try {
            $user= User::find($id);
            $user->delete();
            return response()->json(['success'=>'User has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
