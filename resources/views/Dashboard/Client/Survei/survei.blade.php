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
                                <h4>Survei Alumni</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Kerja</h5>
                                                <p class="card-text">Jika Kalian Telah Bekerja Maka Klik Tombol Di Bawah Ini Ya.</p>
                                                <a href="{{route('kerja')}}" class="btn btn-primary btn-block">Klik Disini</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Kuliah</h5>
                                                <p class="card-text">Jika Kalian Kuliah Maka Klik Tombol Di Bawah Ini Ya.</p>

                                                <a href="{{route('kuliah')}}" class="btn btn-primary btn-block">Klik Disini</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
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
