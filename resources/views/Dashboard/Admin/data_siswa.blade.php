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
                  <h4>Data Alumni</h4>
                </div>
                <div class="card-body table-responsive">
<table id="myTable" class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>TTL</th>
            <th>TA</th>
            <th>Status</th>
            <th>Opt</th>
        </tr>
    </thead>
    <tbody>
      @php $no = 1; @endphp
      @foreach($data as $d)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$d->nama_lengkap}}</td>
            <td>{{$d->tempat_lahir}},{{$d->tanggal_lahir}}</td>
            
            <td>{{$d->tahun_ajaran}}</td>
            <td>{{$d->status}}</td>
            <td>
              <a href="{{route('edit_siswa', $d->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
       @endforeach
    </tbody>
</table>
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