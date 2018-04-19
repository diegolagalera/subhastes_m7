<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Lisitacio;
use DB;


//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Mail;

//Enables us to output flash messaging
use Session;

class UserController extends Controller
{


    public function __construct() {
    $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {
   //Get all users and pass it to the view
       $users = User::all();
       return view('users.index')->with('users', $users);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create() {
   //Get all roles and pass it to the view
       $roles = Role::get();
       return view('users.create', ['roles'=>$roles]);
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
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['confirmation_code']=$request->email_token=$codi;
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
      dd("hola");

        $user = User::where('email_token',$code)->first();

        if(!$user){
            return redirect('/');
        }

        $user->verified =true;
        $user->email_token = null;
        $user->save();
        return redirect('login');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id) {
         $user = User::findOrFail($id); //Get user with specified id
         $roles = Role::get(); //Get all roles

         return view('users.edit', compact('user', 'roles')); //pass user and roles data to view

     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id) {
         $user = User::findOrFail($id); //Get role specified by id

     //Validate name, email and password fields
         $this->validate($request, [
             'name'=>'required|max:120',
             'email'=>'required|email|unique:users,email,'.$id,
             'password'=>'required|min:6|confirmed'
         ]);
         $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
         $roles = $request['roles']; //Retreive all roles
         $user->fill($input)->save();

         if (isset($roles)) {
             $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
         }
         else {
             $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
         }
         return redirect()->route('users.index')
             ->with('flash_message',
              'User successfully edited.');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     //Find a user with a given id and delete
         $user = User::findOrFail($id);
         $user->delete();

         return redirect()->route('users.index')
             ->with('flash_message',
              'User successfully deleted.');
     }
}
