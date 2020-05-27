<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    private $last_dataStep = 1;
    private $last_dataSequence = 2;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    } 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $method = $request->method();
        $dataStep = 1;
        $dataSequence = 2;
//echo $method;

        if($request->isMethod('post'))
        {


            $input = $request->all();
            if($this->last_dataStep == 1 && $this->last_dataSequence == 2){
                request()->validate([            
                    'email' => 'required|email|unique:users'
                ]);

                //$this->last_dataStep = 1;
                //$this->last_dataSequence = 3;
                $dataStep = 1;
                $dataSequence = 3;
            }

            if($this->last_dataStep == 1 && $this->last_dataSequence == 3){
                //For gender

                $dataStep = 2;
                $dataSequence = 3;
            }

            if($this->last_dataStep == 2 && $this->last_dataSequence == 3){
                //For identification

                $dataStep = 3;
                $dataSequence = 3;
            }

            if($this->last_dataStep == 3 && $this->last_dataSequence == 3){
                //For DOB

                $this->last_dataStep = 4;
                $this->last_dataSequence = 3;
            }

            if($this->last_dataStep == 4 && $this->last_dataSequence == 3){
                //For fnam, lname, email, p hone email, pswd

                $this->last_dataStep = 5;
                $this->last_dataSequence = 3;
            }
/*
            //echo "test"; exit;
  echo $this->last_dataStep;
            echo 'br/>';
            echo $this->last_dataSequence;
            exit; */
        }
    
        $this->last_dataStep = $dataStep;
        $this->last_dataSequence = $dataSequence;


          

        return view('register',['dataStep'=>$dataStep,'dataSequence'=>$dataSequence]);        
    }      
}
