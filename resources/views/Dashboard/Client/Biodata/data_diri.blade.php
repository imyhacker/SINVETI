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
                                <h4>Silahkan Isi Data Diri</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('upload_data_diri')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" value="{{$data->nama_lengkap ?? ''}}"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            name="nama_lengkap" placeholder="Nama Lengkap">
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
                                            name="tempat_lahir" placeholder="Tempat Lahir">
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
                                            name="tanggal_lahir" placeholder="Tanggal Lahir">
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
                                            placeholder="Nama Ibu">
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
                                            name="nama_ayah" placeholder="Nama Ayah">
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
                                            placeholder="Alamat Lengkap">{{$data->alamat ?? ''}}</textarea>
                                        @error('alamat')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-block"
                                            value="Upload / Update Data Diri">
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
