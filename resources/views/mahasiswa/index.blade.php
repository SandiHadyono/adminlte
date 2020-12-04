@extends('layouts.index')
@include('layouts.navbar')
@section('title', 'Mahasiswa')


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
                  <h4 class="card-title ">Data Mahasiswa</h4>
									<form action="/mahasiswa/search" method="POST">
										@csrf
										<div class="input-group input-group-sm">
                      <input class="form-control form-control-navbar border-1 bg-white" type="search" id="cari" name="cari" placeholder="Search" aria-label="Search" value="{{old('cari')}}" style="padding-right: 5em;">
                      <div class="input-group-append">
                        <button class="btn" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
										</div>
									</form>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        @forelse($ndata as $data)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->nim}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->tanggal_lahir}}</td>
                          <td>{{$data->email}}</td>
                          <td>
                            <!-- Button Detail -->
                            <a class="btn btn-primary btn-sm"
                               href="/mahasiswa/show/{{$data->nim}}" role="button">
                               Detail
                            </a>
                            <!-- Button Detail -->
                            <a class="btn btn-warning btn-sm"
                               href="/mahasiswa/edit/{{$data->nim}}" role="button">
                               Edit
                            </a>
                            <!-- Button Hapus -->
                            <a class="btn btn-danger btn-sm"
                               href="/mahasiswa/delete/{{$data->nim}}" role="button">
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
                      href="/mahasiswa/create" role="button">
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
