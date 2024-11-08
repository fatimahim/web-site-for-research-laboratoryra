<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Concerns\validatesAttributes;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;


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
            'type'=> ['Integer'],
            'nom' => ['required', 'string', 'max:255'],
            'Prénom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tél' => ['required'],
            'Grade' => ['required', 'string', 'max:3'],
            'Equipe'=> ['required', 'string', 'max:255'],
            'Encadrant' => ['required', 'string', 'max:255'],
            'Etablissement' =>[ 'string', 'max:255'],
            'Cne' => ['required', 'string', 'max:255'],
            'Cin' => ['required', 'string', 'max:255'],
            'image' => [ 'required'],
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
        $file_extension=$data['image']->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/profs';
        $data['image']->move($path,$file_name);
        return User::create([
            
            'type' => $data['type'],
            'nom' => $data['nom'],
            'Prénom' => $data['Prénom'],
            'email' => $data['email'],
            'tél' => $data['tél'],
            'Grade' => $data['Grade'],
            'Equipe' => $data['Equipe'],
            'Encadrant' => $data['Encadrant'],
            'co-Encadrant' => $data['co-Encadrant'],
            'Cne' => $data['Cne'],
            'Cin' => $data['Cin'],
            'Etablissement' => $data['Etablissement'],
            'image'=>$file_name,
            'password' => Hash::make($data['password']),
            'activation_code'=>Str::random(8),
            'is_activated'=>false,
        ]);
    }
public function showRegistrationForm1(){
    return view('auth.registerprof');
}
public function showRegistrationForm2(){
    return view('auth.register');
}
/**
     * Create a new controller instance.
     *
     * @return RedirectResponse
     */
public function register(Request $request)
{   
    $input = $request->all();

    $this->validator($request->all())->validate();
    $user=$this->create($request->all());
      if($user){
    if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    {
        
    if (auth()->user()->type == 'Prof') {
            return redirect()->route('Prof.home');
        } 
        else if(auth()->user()->type == 'doctorant'){
            return redirect()->route('home');
        }
         else {
        Auth::logout();
        return redirect()->route('register')
            ->with('error','Email-Address And Password Are Wrong.');
     }
      
}
}}
}
