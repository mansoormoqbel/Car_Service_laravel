<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Employee;
use App\Models\Repair;
use App\Models\Vehicle;
use App\Models\User;
use App\Models\Opinion;
use App\Models\Contact;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class IndexController extends Controller
{
  

   public function index()/*  : view */ {
      $oxx=Opinion::with(['user'])->get();/* paginate(4); */
     /*  return $oxx; */
      $employees=Employee::paginate(4);
    return view('index',compact('employees','oxx'));
   }
   public function about() : view {
      $employees=Employee::paginate(4);
    return view('about',compact('employees'));
   }
   public function service() : view {
      
      $oxx=Opinion::with(['user'])->get();/* paginate(4); */
      return view('service' ,compact('oxx'));
   }
   public function Technicians() : view {
      $employees=Employee::all();
    return view('technicians',compact('employees'));
   }
   public function booking() : view {
    return view('booking');
   }
   public function Error() : view {
    return view('Error');
   }
   public function Testimonial() : view {
      $oxx=Opinion::with(['user'])->get();/* paginate(4); */
    return view('testimonial',compact('oxx'));
   }
   public function Contact() : view {
    return view('Contact');
   }
   public function map() : view {
      return view('map');
   }
   public function addRepair(Request $request)  {
      $validator = Validator::make($request->all(),[
          
         'make' => ['required', 'string', 'max:255'],
         'model' => ['required', 'string', 'max:255'],
         'licensePlate' => ['required', 'string', 'max:255'],
         'year' => ['required','digits:4','integer','min:1930','max:' . date('Y')],
         'description' => ['required', 'string', 'max:255'],
         'repairDate' => ['required','date','after_or_equal:today'],
         
         
          
      ]); 
      if ($validator->passes()) {
         

         $DiagnosticEngineer = $request->DiagnosticEngineer;
         $MechanicTechnician = $request->MechanicTechnician;
         $AutoElectro = $request->AutoElectro;
         $TiresReplacement = $request->TiresReplacement;
         $OilChanging = $request->OilChanging;
         $CarWash = $request->CarWash;
         $data = [$DiagnosticEngineer,$AutoElectro,$MechanicTechnician,$TiresReplacement,$OilChanging,$CarWash ];
         $existingUsers = Employee::whereIn('position', $data)->get();
            $user_id=Auth()->id();
            $vehicle=new Vehicle();
            $vehicle->make=$request->make;
            $vehicle->model=$request->model;
            $vehicle->licensePlate=$request->licensePlate;
            $vehicle->year=$request->year;
            $vehicle->user_id=$user_id;
            $vehicle->save();
         foreach ($existingUsers as $existingUser ) {
            $repair=new Repair();
            $repair->vehicleID= $vehicle->id;
            $repair->employeeID=$existingUser->id;
            $repair->repairDate=$request->repairDate;
            $repair->description=$request->description;
            $repair->cost=0.0;
            $repair->save();

         }
         return response()->json(['status'=>1, 'success'=>'Repair has been created successfully!']);
        
      }
      return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]); 
         
        
   }
   public function addOpinion(Request $request)  {
      $x= Auth::user()->id;
      
      $oxx=Opinion::with(['user'])->get();
         
         $validator = Validator::make($request->all(),[
             
             'opinion' => ['required', 'string', 'max:255'],
             'rating' => ['required', 'integer'],
             
             
         ]); 
         if($validator->passes()) 
         { 
             
            
             $opinion=new Opinion();
             $opinion->user_id=$x;
             $opinion->opinion=$request->opinion;
             $opinion->rating=$request->rating;
             $opinion->save();
             return view('testimonial' ,compact('oxx'))->with('message','Opinion has been created successfully ');
            /*  return response()->json(['status'=>1,'data'=>$opinion ,'data1'=>$user ,'success'=>'Opinion has been created successfully!']); */
         }
         return view('testimonial',compact('oxx'))->with(['status'=>0,'error' => $validator->errors()->toArray()]);
        /*  return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]);  */
   }
   public function addContact(Request $request)  {
      $validator = Validator::make($request->all(),[
         'firstName' => ['required', 'string', 'max:255'],
         'lastName' => ['required', 'string', 'max:255'],
         'message' => ['required', 'string', 'max:255'],
         'subject' => ['required', 'string', 'max:255'],
         'email' => ['required','string','email','max:255'],
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
         
        
     
         $contact->save();/*  */
         return redirect()->route('contact')->with('success', 'Repair added successfully!');
         return view('Contact');

         /* return response()->json(['status'=>1,'data'=>$contact ,'success'=>'Contact has been created successfully!']); */
     }
       return redirect()->route('contact')->with('success', 'Repair added successfully!');
   
    /*  return response()->json(['status'=>0,'error' => $validator->errors()->toArray()]);  */
   }
  
}

