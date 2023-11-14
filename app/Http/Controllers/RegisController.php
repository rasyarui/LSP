<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register'
        ]);
    }


    public function store(Request $request){

        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required|min:5|max:100'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success','Registration Success');

    }



}
