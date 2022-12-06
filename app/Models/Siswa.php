<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\User;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $guarded = [];

    public function Jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    
}
