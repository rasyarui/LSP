<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(){
        return view('login/login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required|min:5|max:100'
        ]);
        // dd('berhasil login');


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'Login Successfuly');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
