<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use Validator;
use Str;
use Auth;

class AuthController extends Controller
{
    public function login()
    {  
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
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

        // $user = new User;
        // $user->name = $request->nama;
        // $user->password = bcrypt('12345678');
        // $user->remember_token = Str::random(20);
        // $user->email = $request->email;
        // $user->role_id = 2;
        // $user->status = 'inactive';
        // $user->save();


        $user = User::create([
            'role_id' => 2,
            'name' => $request->nama,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'remember_token' => Str::random(20),
            'status' => 'inactive',
        ]);

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jurusan_id' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
            'nisn' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
        ]);

        //membuat table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}