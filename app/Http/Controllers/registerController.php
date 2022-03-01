<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class registerController extends Controller
{
    public function index(){
        return view('register.index', [
            'title'=>'register',
            'active'=> 'register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:111|min:6',
            'username'=>['required', 'min:6', 'max:100', 'unique:users'],
            'email'=>['required', 'unique:users','min:6', 'max:100', 'email:dns'],
            'password' => ['required', 'min:6', 'max:100'],
        ]);

        // $validatedData['password']=bcrypt($validatedData['password']);
        $validatedData['password']=Hash::make($validatedData['password']);
        
        User::create($validatedData);
        return redirect('/login')->with('success', 'register success!');

        
    }
}
