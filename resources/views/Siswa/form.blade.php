<div class="modal fade" id="modalForm" padding-right: 17px; aria-modal="true" role="dialog" data-backdrop="static" data_keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                         <!-- Add Nama  -->
                        <label class="" for="nama">Nama Siswa</label>
                        <input type="text" autocomplete="off" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Add Alamat -->
                        <label class="" for="alamat">Alamat</label>
                        <input type="text" autocomplete="off" name="alamat" id="alamat" value="{{ old('alamat')}}" class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Add Jenis Kelamin -->
                        <div class="my-1">
                            <label class="mb-2" for="nama">Jenis Kelamin</label>
                            <br>
                            <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                <option value="Laki-laki"> Laki-Laki</option>
                                <option value="Perempuan"> Perempuan</option>
                            </select>

                            
                            <!-- Add Kelas  -->
                            <label class="mt-2" for="nama">Kelas</label>
                            <select type="text" name="kelas_id" id="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($kelas as $kelas)
                                <option value="{{$kelas->id}}">{{$kelas->nama}}</option>
                                @endforeach
                                @error('kelas_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </select>
                        </div>
                        
                        <!-- Add Jurusan  -->
                       <label class="mt-2" for="nama">Jurusan</label>
                       <select type="text" name="jurusan_id" id="jurusan_id" value="{{ old('jurusan_id')}}" class="form-control @error('jurusan_id') is-invalid @enderror">
                           <option selected>Pilih...</option>
                           @foreach($jurusan as $jurusan)
                               <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                           @endforeach
                       @error('jurusan_id')
                           <div class="text-danger">
                               {{ $message }}
                           </div>
                       @enderror
                       </select>
                        
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>