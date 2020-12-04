@extends('layouts.index')
@section('title', 'Dosen')
<?php $subtitle="Dosen"; ?>

@section('content')
   <div class="content">
        <div class="container-fluid">
            <!-- Flash Message -->
            @if(session()->get('success'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span>
                  <b> success - </b> {{ session()->get('success')}} !!
                </span>
              </div>
            @endif
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Dosen</h4>
                  <br>
                  <div class="form-group">
                    <form action="/dosen/search" method="POST">
                      @csrf
                      <div class="customize-input">
                      <input class="form-control custom-shadow custom-radius border-0 bg-white" type="text" id="cari" name="cari" placeholder="Search" aria-label="Search" value="{{old('cari')}}" style="padding-right: 5em;">
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Bidang Ilmu</th>
                        <th>Telf</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        @forelse($ndata as $dsn)
                        <tr>
                          <td>{{$loop->iteration + $ndata->firstItem() -1}}</td>
                          <td>{{$dsn->nidn}}</td>
                          <td>{{$dsn->nama}}</td>
                          <td>{{$dsn->prodi}}</td>
                          <td>{{$dsn->bidang_ilmu}}</td>
                          <td>{{$dsn->telf}}</td>
                          <td>
                            <!-- Button Detail -->
                            <a class="btn btn-primary btn-sm"
                               href="/dosen/show/{{$dsn->nidn}}" role="button">
                               Detail
                            </a>
                            <!-- Button Edit -->
                            <a class="btn btn-warning btn-sm"
                               href="/dosen/edit/{{$dsn->nidn}}" role="button">
                               Edit
                            </a>
                            <!-- Button Hapus -->
                            <a class="btn btn-danger btn-sm"
                               href="/dosen/delete/{{$dsn->nidn}}" role="button">
                               Delete
                            </a>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="7" style="text-align: center">Tidak Ada Data</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                    <a class="btn btn-info btn-sm"
                      href="/dosen/create" role="button">
                      Create Data
                    </a>
                  </div>
                  <br> <br>
                      {!! $ndata->links('pagination::bootstrap-4') !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
</style>
