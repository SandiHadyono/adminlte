@extends('layouts.index')
@section('title', 'Detail Mahasiswa')
<?php $subtitle="Detail Mahasiswa"; ?>

@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="content">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail Data Mahasiswa</h4> <br> 
                                @foreach($datamhs as $mhs)
                                <form action="/mahasiswa/show/{{$mhs->nim}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nama" value="{{$mhs->nama}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Email </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="email" value="{{$mhs->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Tanggal Lahir </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mhs->tanggal_lahir}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Dosen Wali </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mhs->wali->nama}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <div class="col-lg-20">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nilai Mahasiswa</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                            <th>No</th>
                                            <th>Mata Kuliah</th>
                                            <th>Dosen</th>
                                            <th>Tugas</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @forelse($datanli as $nli)
                                                <tr>
                                                <td>{{$loop->iteration + $datanli->firstItem() - 1}}</td>
                                                <td>{{$nli->matkul->nama}}</td>
                                                <td>{{$nli->dosen->nama}}</td>
                                                <td>{{$nli->tugas}}</td>
                                                <td>{{$nli->uts}}</td>
                                                <td>{{$nli->uas}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                <td colspan="7" style="text-align: center">mhs Tidak Ada</td>
                                                </tr>
                                                @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-sm-flex justify-content-center">
                                      {!! $datanli->links() !!}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection
