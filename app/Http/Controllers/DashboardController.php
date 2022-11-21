<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Jurusan;

class DashboardController extends Controller
{
   public function index()
   {
      $siswa = Siswa::all();
      $kelas = Kelas::all();
      $jurusan = Jurusan::all();
      $user = User::all();
      return view('dashboard.index', compact('user', 'siswa', 'kelas', 'jurusan'));
   }
}
