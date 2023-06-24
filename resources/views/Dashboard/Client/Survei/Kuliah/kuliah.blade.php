<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Survei Kerja</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('update_kuliah')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" value="{{$data->nama_lengkap ?? ''}}"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            name="nama_lengkap" placeholder="Nama Lengkap" readonly>
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
                                            name="tempat_lahir" placeholder="Tempat Lahir" readonly>
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
                                            name="tanggal_lahir" placeholder="Tanggal Lahir" readonly>
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
                                            placeholder="Nama Ibu" readonly>
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
                                            name="nama_ayah" placeholder="Nama Ayah" readonly>
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
                                            placeholder="Alamat Lengkap" readonly>{{$data->alamat ?? ''}}</textarea>
                                        @error('alamat')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kampus</label>
                                        <input type="text" value="{{$kerja->nama_kampus ?? ''}}"
                                            class="form-control @error('nama_kampus') is-invalid @enderror"
                                            name="nama_kampus" placeholder="Nama Tempat Kerja">
                                        @error('nama_kampus')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Masuk Kampus</label>
                                        <input type="date" value="{{$kerja->tanggal_masuk_kampus ?? ''}}"
                                            class="form-control @error('tanggal_masuk_kampus') is-invalid @enderror"
                                            name="tanggal_masuk_kampus" placeholder="Tanggal Mulai Kerja">
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
                                            placeholder="Alamat Tempat Kerja">{{$kerja->alamat_kampus ?? ''}}</textarea>
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
                                            placeholder="Saran Untuk Sekolah">{{$kerja->saran ?? ''}}</textarea>
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
