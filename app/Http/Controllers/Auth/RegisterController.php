<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {/*  */
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => [ 'required','image','mimes:jpeg,png,jpg,gif,svg' ,'max:2048'],
            'phone' => ['required', 'regex:/^(\+962|0)7[7-9]\d{7}$/'], // Example regex pattern for Jordanian phone numbers
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (isset($data['image']) != NULL) {
            /* $image=$data->file('image'); */
            $image=$data['image'];
            
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('profile'),$imageName);
            return User::create([
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'phone' => $data['phone'],
                'address' => '',
                'email' => $data['email'],
                'is_admin' => 0,
                'image'=>$imageName,
                'password' => Hash::make($data['password']),
            ]);
        }else{
            return User::create([
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'phone' => $data['phone'],
                'address' => '',
                'email' => $data['email'],
                'is_admin' => 0,
                'image'=>'',
                'password' => Hash::make($data['password']),
            ]);
        }
        
    }
}
