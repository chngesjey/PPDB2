<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PPDB Register</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset ('assets/modules/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset ('assets/modules/all.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/components.css')}}">
    <link rel="stylesheet" href="feedback.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <!-- <img src="https://yt3.ggpht.com/ytc/AMLnZu9JW4gVnRwef3M2GbDxrfyO00bqDxawTFifLKcY=s900-c-k-c0x00ffffff-no-rj" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                  <div class="form-group">
                        <form action="{{route('simpanRegister')}}" method="POST">
                            @csrf
                            <label for="nama">Username</label>
                            <input id="nama" type="text" class="form-control" name="nama" autocomplete="off" autofocus required>
                        </div>
                    <!-- <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div> -->
                 

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  
                    <div class="form-group">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>

                    <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="nisn">NISN</label>
                                    <input type="text" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="jurusan_id">Jurusan</label>
                                    <br>
                                    <select name="jurusan_id" id="jurusan_id" value="{{ old('jurusan_id')}}" class="form-control" required>
                                        <option selected>Pilih...</option>
                                        @foreach($jurusan as $jurusan)
                                            <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="telepon">Telepon</label>
                                    <input type="text" name="telepon" id="telepon" value="{{ old('telepon')}}" class="form-control" required>
                                </div>
                            </div>
                  

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                                    <br>
                                    <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control" required>
                                        <option selected>Pilih...</option>
                                        <option value="Laki-laki"> Laki-Laki</option>
                                        <option value="Perempuan"> Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="">
                                    <label class="mb-2" for="agama">Agama</label>
                                    <input type="text" name="agama" id="agama" value="{{ old('agama')}}" class="form-control" required>
                                </div>
                            </div>

                            
                            <div class="col-12 col-lg-6 col-md-6">
                              <div class="">
                                    <label class="mb-2" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir')}}" class="form-control" required>
                                </div>
                              </div>
                            </div>

                            <div class="row my-1">
                            <div class="col-12">
                                <div class="">
                                    <label class="mb-2" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir')}}" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="alamat">Alamat</label>
                                    <textarea class="form-control"  id="alamat" name="alamat" placeholder="..." required></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="asal_sekolah">Asal Sekolah</label>
                                    <textarea class="form-control"  id="asal_sekolah" name="asal_sekolah" placeholder="..." required></textarea>
                                </div>
                            </div>
                        </div>
                    <!-- <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div> -->

                  <!-- <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control selectric">
                        <option>Indonesia</option>
                        <option>Palestine</option>
                        <option>Syria</option>
                        <option>Malaysia</option>
                        <option>Thailand</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Province</label>
                      <select class="form-control selectric">
                        <option>West Java</option>
                        <option>East Java</option>
                      </select>
                    </div>
                  </div> -->

                  <!-- <div class="row">
                    <div class="form-group col-6">
                      <label>City</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Postal Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div> -->

                  <div class="form-group">
                    <div class="container"></div>                       
                        <a href="{{route('login')}}" class="nav-link">Sudah Memiliki Akun</a>
                    </div>
                  </div>

                  <!-- Tombol Submit -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>

                </form>
              </div>
            </div>
            <!-- Footer -->
            @include('template.footer')
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset ('assets/modules-js/jquery.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/popper.js')}}"></script>
    <script src="{{asset ('assets/modules-js/tooltip.js')}}"></script>
    <script src="{{asset ('assets/modules-js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/moment.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>