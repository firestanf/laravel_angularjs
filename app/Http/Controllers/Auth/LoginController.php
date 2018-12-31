<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Hash;
use Validator;


use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     
    public function __construct()
    {   
        $this->middleware('guest')->except('logout');
    }
    public function Show_login()
    {
        return view('auth.login');
    }
    public function Process_login()
    {   
        
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $validator = Validator::make(Input::all(), $rules);

        // echo $validator->messages();
        
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else 
        {
                // create our user data for the authentication
                $userdata = array(
                    'email'     => Input::get('email'),
                    'password'  => Input::get('password')
                );


            //manual version    
            //     $user = new User();

            //     $user=$user::where(function($query){
            //         $query->where('email','=',Input::get('email'));
            //         // ->where('password','=',Input::get('password'))
            //     })->get();
             
            //   if(count($user) != 0){  
                
            //     if(Hash::check(Input::get('password'),$user[0]['password']))
            //     {
            //             echo 'SUCCESS!';
            //     }
            //     else
            //     {
            //         return redirect('login')->with('status', 'Email Or Password False');
            //     }

            //   }
            //   else
            //   {return redirect('login')->with('status', 'Email Or Password False');}

                // Using Auth library
                if (Auth::attempt($userdata)) {
                    echo 'SUCCESS!';
                } else {        
                    return redirect('login')->with('status', 'Email Or Password False');                    
                }
        }
    }

}
