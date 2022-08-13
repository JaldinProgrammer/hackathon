<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        $users->load('jobPosition');
        //dd($users);
        return view('users.all')->with(compact('users'));
    }

    public function create(){
        $credentials =   Request()->validate([
            'name' => ['required','string']
        ]);
        User::create([
            'name' => request('name'),
        ]);
        return redirect()->route('speciality.all');
    }

}
