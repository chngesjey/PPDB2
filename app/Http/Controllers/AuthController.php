<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function postlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email harus di isi',
            'password.required' => 'Password harus di isi'
        ]);

        $request->session()->regenerate();
        if(Auth::attempt($credentials)){
            if(Auth::user()->role_id == 1){
                return redirect('/dashboard');
            }
            if(Auth::user()->role_id == 2){
                return redirect('/profile');
            }
        }
        return redirect('/login');
    }

     public function register()
    {
        $jurusan = Jurusan::all();

        return view('auth.register', compact('jurusan'));
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
        return redirect('/');
    }
}