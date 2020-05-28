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
        $input = $request->all();
        $dataStep = 1;
        $dataSequence = 2;
        
       // $data = $request->session()->all(); print('<pre>'); print_r($data); exit;

        if($request->ajax())
        {
            if($request->isMethod('post')){
                if($input['dataStep'] == 1 && $input['dataSequence'] == 2){
                    //for email part
                    $validator = Validator::make($input, [
                        'email' => 'required|email|unique:users'
                    ]);
                                       
                    if ($validator->passes()) {
                        $this->storestepsvalue($request);
                        return response()->json(['success'=>'Proceed to next Step','nxtDataStep'=>'1','nxtDataSeq'=>'3']);
                    }

                    return response()->json(['error'=>$validator->errors()->all()]);
                }                

                if($input['dataStep'] == 1 && $input['dataSequence'] == 3){
                    //for email part
                    $validator = Validator::make($input, [
                        'gender' => 'required|in:female,male,other'
                    ]);
                                       
                    if ($validator->passes()) {
                        $this->storestepsvalue($request);
                        return response()->json(['success'=>'Proceed to next Step','nxtDataStep'=>'2','nxtDataSeq'=>'3']);
                    }

                    return response()->json(['error'=>$validator->errors()->all()]);
                }


                if($input['dataStep'] == 2 && $input['dataSequence'] == 3){
                    //for email part

                    $validator = Validator::make($input, [
                        'gender' => 'required|in:female,male,other'
                    ]);
                                       
                    if ($validator->passes()) {
                        return response()->json(['success'=>'Proceed to next Step','nxtDataStep'=>'3','nxtDataSeq'=>'3']);
                    }

                    return response()->json(['error'=>$validator->errors()->all()]);
                }

            }
        }

//print_r($input); exit;
/*
            if($input['dataStep'] == 3 && $input['dataSequence'] == 3){
                //For DOB

                $dataStep = 4;
                $dataSequence = 3;
            }

            if($input['dataStep'] == 4 && $input['dataSequence'] == 3){
                //For fnam, lname, email, p hone email, pswd

                $dataStep = 5;
                $dataSequence = 3;
            }
*/


        return view('register');        
       // return view('register',['dataStep'=>$dataStep,'dataSequence'=>$dataSequence]);        
    }      

    private function storestepsvalue($request)
    {
        $input = $request->all();
        if($input['dataStep'] == 1 && $input['dataSequence'] == 2 && $input['email'] != '')
            $request->session()->put('email',$input['email']);

        if($input['dataStep'] == 1 && $input['dataSequence'] == 3 && $input['gender'] != '')
            $request->session()->put('gender',$input['gender']);
    }
}
