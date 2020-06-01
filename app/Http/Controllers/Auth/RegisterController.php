<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $country = DB::table('countrys')->select('id','country_name')->get();
        $city = DB::table('citys')->select('id','city_name')->where('id', '=', '0')->get();

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

                    //print_r($input);    exit;
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
                    //for identification part                   
                    $this->storestepsvalue($request);                
                    return response()->json(['success'=>'Proceed to next Step','nxtDataStep'=>'3','nxtDataSeq'=>'3']);
                }

                if($input['dataStep'] == 3 && $input['dataSequence'] == 4){
                    //for email part
                    $validator = Validator::make($input, [
                        'country' => 'required|exists:countrys,id',
                        'city' => 'required|exists:citys,id',
                        'postal_code' => 'postal_code:IN,FI,AU,US'

                    ]);
                                       
                    if ($validator->passes()) {
                        $this->storestepsvalue($request);
                        return response()->json(['success'=>'Proceed to next Step','nxtDataStep'=>'4','nxtDataSeq'=>'3']);
                    }

                    return response()->json(['error'=>$validator->errors()->all()]);
                }

                if($input['dataStep'] == 4 && $input['dataSequence'] == 3){
                    //for email part
                    $validator = Validator::make($input, [
                         'birth_date'   => 'required|date|date_format:Y-m-d|before:13 years ago',
                    ]);
                                       
                    if ($validator->passes()) {
                        $this->storestepsvalue($request);
                        return response()->json(['success'=>'Proceed to next Step','nxtDataStep'=>'5','nxtDataSeq'=>'3']);
                    }

                    return response()->json(['error'=>$validator->errors()->all()]);
                }

                if($input['dataStep'] == 5 && $input['dataSequence'] == 3){
                    //for email part
                    $validator = Validator::make($input, [
                         'first_name'   => 'required|min:2|max:50',
                         'last_name'   => 'required|min:2|max:50',
                         'parent_phone_email'   => 'required|min:2|max:50',
                         'password'   => 'required|min:2|max:50',
                         'terms_conditions' => 'required'
                    ]);
                            

                    if ($validator->passes()) {

                    }

                    return response()->json(['error'=>$validator->errors()->all()]);
                }

            }
        }


        return view('register',['country'=>$country,'city'=>$city]);        
       // return view('register',['dataStep'=>$dataStep,'dataSequence'=>$dataSequence]);        
    }      

    public function getCityList(Request $request)
    {
        $city = DB::table('citys')
        ->where('country_id',$request->country_id)
        ->pluck('city_name','id');
        return response()->json($city);
    }
 
    private function storestepsvalue($request)
    {
        $input = $request->all();


        if($input['dataStep'] == 1 && $input['dataSequence'] == 2 && $input['email'] != '')
            $request->session()->put('email',$input['email']);

        if($input['dataStep'] == 1 && $input['dataSequence'] == 3 && $input['gender'] != '')
            $request->session()->put('gender',$input['gender']);

        if($input['dataStep'] == 2 && $input['dataSequence'] == 3 && $input['identification'] != '')
            $request->session()->put('identification',$input['identification']);

        if($input['dataStep'] == 3 && $input['dataSequence'] == 4){

            //print('<pre>');     print_r($input);

            if($input['country'] != '')
                $request->session()->put('country',$input['country']);

            if($input['city'] != '')
                $request->session()->put('city',$input['city']);

            if($input['postal_code'] != '')
                $request->session()->put('postal_code',$input['postal_code']);

            if($input['country_name'] != '')
                $request->session()->put('country_name',$input['country_name']);

            if($input['city_name'] != '')
                $request->session()->put('city_name',$input['city_name']);
        }

        if($input['dataStep'] == 4 && $input['dataSequence'] == 3 && $input['birth_date'] != '')
            $request->session()->put('birth_date',$input['birth_date']);
    }
}
