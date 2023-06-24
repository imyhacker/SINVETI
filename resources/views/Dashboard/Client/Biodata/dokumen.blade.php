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
                                <h4>Silahkan Isi Dokumen</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('upload_akta')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                               
                                <div class="form-group">
                                    <label>Akta Kelahiran*</label>
                                    <input type="file" class="form-control-file" name="upload_akta">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" value="Upload Dokumen Akta Kelahiran">
                                </div>
                                </form>
                              
                                <form action="{{route('upload_kk')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                               
                                <div class="form-group">
                                    <label>Kartu Keluarga*</label>
                                    <input type="file" class="form-control-file" name="media_kk">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" value="Upload Dokumen Kartu Keluarga">
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
