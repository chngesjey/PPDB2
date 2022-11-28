<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Session;
use App\Models\User;
use Auth;
use DB;
use Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $kredentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        // cek apakah Login Valid
        if(Auth::attempt($kredentials)) {
            // cek apakah user status = active
            if(Auth::user()->status != 'active') {
                Session::flash('status', 'failed');
                Session::flash('message', 'Your Account is Not Active Yet. Please Contact Admin :)');
                return redirect('/login');
            }
            Session::flash('status', 'failed');
            Session::flash('message', 'Login Invalid');
            return redirect('/login');
        }
    }

    public function register()
    {
        return view('auth.login');
    }
    
    public function simpanRegister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);

        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect('/login');
    }
}
