<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Auth;
use Mail;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


//Enables us to output flash messaging
use Session;

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
    protected $redirectTo = '/home';

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
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'nom' => 'required|string|max:255',
    //         'cognom' => 'required|string|max:255',
    //         'dni' => 'required|string|max:255',
    //         'pais' => 'required|string|max:255',
    //         'codi_postal' => 'required|string|max:255',
    //         'ciutat' => 'required|string|max:255',
    //         'telefon' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }


    /** @return \Illuminate\Http\Response
    */
    public function create() {
    //Get all roles and pass it to the view
      $roles = Role::get();
      return view('auth.register', ['roles'=>$roles]);

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    // public function store(Request $request)
    // {
    //     //
    // }

    public function store(Request $request) {
//Validate name, email and password fields
    $codi=str_random(25);
    $this->validate($request, [
        'name'=>'required|max:120',
        'surname'=>'required|max:120',
        'dni'=>'required|max:120',
        'country'=>'required|max:120',
        'cp'=>'required|max:120',
        'city'=>'required|max:120',
        'tel'=>'required|max:120',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:6|confirmed'
    ]);
    $request['email_token']=$codi;
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['confirmation_code']=$request->email_token;
    $user = User::create($request->only('email', 'name', 'password','surname','dni','country','cp','city','tel','email_token')); //Retrieving only the email and password data

    $roles = $request['roles']; //Retrieving the roles field
//Checking if a role was selected
    if (isset($roles)) {

        foreach ($roles as $role) {
        $role_r = Role::where('id', '=', $role)->firstOrFail();
        $user->assignRole($role_r); //Assigning role to user
        }
    }
    //email
    Mail::send('email.confirmation_code',['data'=>$data],function($mail) use ($data){

                $mail->subject('complete verificacion');
                $mail->to($data['email'],$data['name']);

            });


//Redirect to the users.index view and display message
    return redirect()->route('users.index')
        ->with('flash_message',
         'User successfully added.');

    }

    public function verify($code)
    {
        $user = User::where('email_token',$code)->first();

        if(!$user){
          dd("hola");
            return redirect('/');
        }

        $user->verified =true;
        $user->email_token = 0;
        $user->save();
        return redirect('login');

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'nom' => $data['nom'],
    //         'cognom' => $data['cognom'],
    //         'dni' => $data['dni'],
    //         'pais' => $data['pais'],
    //         'codi_postal' => $data['codi_postal'],
    //         'ciutat' => $data['ciutat'],
    //         'telefon' => $data['telefon'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //         'email_token' => base64_encode($data['email']),
    //     ]);
    // }
}
