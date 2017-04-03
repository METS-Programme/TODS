<?php

namespace App\Http\Controllers;

use App\Models\User;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;
use Request;

class UserRegController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //Display Available users
    public function showUsers(){

        $users = user::all();
        //$users = user::latest('created_at')->get();


        return view('layouts.people', compact('users'));
    }
    //display User Details
    public function userDetails($id){

        $users = user::findOrFail($id);

        return view('layouts.person', compact('users'));

    }
    //Create New User
    public function createUser(){

        //return $users; this returns json
        return view('layouts.create');
    }
    //Store Date in the database
    public function store(){

        //$input = Request::get('fname'); to get a given value from the form
        //$input = Request::all();
        //user::create($input); //Mass create data

        user::create(Request::all());//inline for clean code

        /*$user = new user();

        $user->username = $input['username'];
        $user->firstname = $input['firstname'];
        $user->lastname = $input['lastname'];
        $user->password = $input['password'];
        $user->emailaddress = $input['emailaddress'];
        $user->phoneone = $input['phoneone'];
        $user->phonetwo = $input['phonetwo'];
        $user->ip = $input['ip'];
        $user->created_at = Carbon::now();*/




        //return $input;

        return redirect('people');
    }
}
