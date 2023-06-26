<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
 <x-dcore.notif />
        <div class="main-content">
            <section class="section">

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Data</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('update_siswa', $data->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" value="{{$data->nama_lengkap ?? ''}}"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            name="nama_lengkap" placeholder="Nama Lengkap" >
                                        @error('nama_lengkap')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" value="{{$data->tempat_lahir ?? ''}}"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" placeholder="Tempat Lahir" >
                                        @error('tempat_lahir')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" value="{{$data->tanggal_lahir ?? ''}}"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            name="tanggal_lahir" placeholder="Tanggal Lahir" >
                                        @error('tanggal_lahir')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" value="{{$data->nama_ibu ?? ''}}"
                                            class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu"
                                            placeholder="Nama Ibu" >
                                        @error('nama_ibu')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" value="{{$data->nama_ayah ?? ''}}"
                                            class="form-control @error('nama_ayah') is-invalid @enderror"
                                            name="nama_ayah" placeholder="Nama Ayah" >
                                        @error('nama_ayah')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Lengkap</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror"
                                            name="alamat" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Alamat Lengkap" >{{$data->alamat ?? ''}}</textarea>
                                        @error('alamat')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Lulus Tahun Ajaran</label>
                                        <input type="text" value="{{$data->tahun_ajaran ?? ''}}"
                                            class="form-control @error('tahun_ajaran') is-invalid @enderror"
                                            name="tahun_ajaran" placeholder="Lulus Tahun Ajaran 20xx / 20xx">
                                        @error('tahun_ajaran')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Status</label>
<select name="status" class="form-control" id="eexampleFormControlSelect1">
      <option disabled selected value>Pilih Status</option>
      <option @if($data->status == 'kerja') selected @endif>kerja</option>
      
      <option @if($data->status == 'kuliah') selected @endif>kuliah</option>
    </select>
                                        @error('tahun_ajaran')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Nama Tempat Kerja</label>
                                        <input type="text" value="{{$data->nama_tempat_kerja ?? ''}}"
                                            class="form-control @error('nama_tempat_kerja') is-invalid @enderror"
                                            name="nama_tempat_kerja" placeholder="Nama Tempat Kerja">
                                        @error('nama_tempat_kerja')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Mulai Kerja</label>
                                        <input type="date" value="{{$data->tanggal_mulai_kerja ?? ''}}"
                                            class="form-control @error('tanggal_mulai_kerja') is-invalid @enderror"
                                            name="tanggal_mulai_kerja" placeholder="Tanggal Mulai Kerja">
                                        @error('tanggal_mulai_kerja')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Tempat Kerja</label>
                                        <textarea
                                            class="form-control @error('alamat_tempat_kerja') is-invalid @enderror"
                                            name="alamat_tempat_kerja" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Alamat Tempat Kerja">{{$data->alamat_tempat_kerja ?? ''}}</textarea>
                                        @error('alamat_tempat_kerja')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Kampus</label>
                                        <input type="text" value="{{$data->nama_kampus ?? ''}}"
                                            class="form-control @error('nama_kampus') is-invalid @enderror"
                                            name="nama_kampus" placeholder="Nama Kampus">
                                        @error('nama_kampus')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Masuk Kampus</label>
                                        <input type="date" value="{{$data->tanggal_masuk_kampus ?? ''}}"
                                            class="form-control @error('tanggal_masuk_kampus') is-invalid @enderror"
                                            name="tanggal_masuk_kampus"
                                            placeholder="Tanggal Mulai Ngampus">
                                        @error('tanggal_masuk_kampus')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Kampus</label>
                                        <textarea
                                            class="form-control @error('alamat_kampus') is-invalid @enderror"
                                            name="alamat_kampus" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Alamat Tempat Kampus">{{$data->alamat_kampus ?? ''}}</textarea>
                                        @error('alamat_kampus')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label>Saran Untuk Sekolah</label>
                                        <textarea
                                            class="form-control @error('saran') is-invalid @enderror"
                                            name="saran" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Saran Untuk Sekolah">{{$data->saran ?? ''}}</textarea>
                                        @error('saran')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block"
                                            value="Upload / Update Data Survei">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
