<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use  App\Models\Contact;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    public function Index() : View {
        $contacts=Contact::all();
        return  view('admin.contact',compact('contacts'));
    }
    public function store(Request $request)
    { 
        
        try{
            $validator = Validator::make($request->all(),[
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'message' => ['required', 'string', 'max:255'],
                'subject' => ['required', 'string', 'max:255'],
                'email' => ['required','string','email','max:255','unique:employees'],
                'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
                
            ]); 
            if($validator->passes()) 
            { 
               
                $contact=new Contact();
                $contact->firstName=$request->firstName;
                $contact->lastName=$request->lastName;
                $contact->message=$request->message;
                $contact->subject=$request->subject;
                $contact->email=$request->email;
                $contact->phone=$request->phone;
                
               
            
                $contact->save();
                return response()->json(['status'=>1,'data'=>$contact ,'success'=>'Contact has been created successfully!']);
            }
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
            
            
           
        }catch(\Throwable $th){
           
            return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        }
       
    
    }
    public function edit($id)
    {
        $contact= Contact::find($id);
        return response()->json($contact);
    }
    public function update(request $request)
    {
       
        
        $validator = Validator::make($request->all(),[
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255','unique:employees'],
            'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'],
            
        ]); 
        if($validator->passes()) 
        { 
            /* return response()->json(['status'=>1,'data'=>$request->firstName]); */
            $contact=Contact::find($request->id);
            $contact->firstName=$request->firstName;
            $contact->lastName=$request->lastName;
            $contact->message=$request->message;
            $contact->subject=$request->subject;
            $contact->email=$request->email;
            $contact->phone=$request->phone;
            $contact->save();
            return response()->json(['status'=>1,'data'=>$contact,'success'=>'Contact has been update successfully!']); 
        }
        return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
        
            
           
        
          
    }
    public function Delete($id){
        try {
           
            $contact= Contact::find($id);
            $contact->delete();
            return response()->json(['error1'=>'Contact has been delete successfully!']);
        } catch (\Throwable $th) {
           return $th;
        }
       
    } 
}
