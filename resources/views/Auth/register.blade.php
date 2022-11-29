<link rel="stylesheet" href="{{asset ('assets/loginSign/register.css')}}">

<form class="login">
  <form id="formDaftar" action="addForm('{{ route('simpanRegister') }}')" method="POST">
        @csrf
        @method('PUT')

   <!-- Add Nama  -->
    <label class="mb-2" for="nama"></label>
    <input type="text" name="nama" id="nama" placeholder="Username" value="{{ old('nama')}}" class="form-control">
        
  <!-- Nisn -->
  <label class="mb-2" for="nisn"></label>
  <input type="text" name="nisn" id="nisn" placeholder="NISN" value="{{ old('nisn')}}"  class="form-control">

  <!-- Add Jurusan -->
  <div class="my-1">
  <label class="mb-15" for="jurusan_id"></label>
    <select name="jurusan_id" id="jurusan_id" value="{{ old('jurusan_id')}}" class="form-control">
      <option selected>Pilih Jurusan...</option>
        @foreach($jurusan as $jurusan)
          <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
        @endforeach
       </select>
      </div>
    </div>
</div>

  <!-- Add Email -->
  <!-- <div class="my-1">
    <label class="mb-2" for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email')}}" class="form-control">
  </div> -->

  <!-- Add Telepon -->
  <!-- Add Jenis Kelamin -->
  <!-- Add Agama -->
  <!-- Add Tempat Lahir -->
  <!-- Add Tanggal Lahir -->
  <!-- Add Alamat -->
  <!-- Add Asal Sekolah -->

  <button>Sign up</button>
</form>

<a href="https://codepen.io/davinci/" target="_blank">check my other pens</a>
