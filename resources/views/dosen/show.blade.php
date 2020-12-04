@extends('layouts.index')
@section('title', 'Detail Dosen')
<?php $subtitle="Detail Dosen"; ?>

@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail Data Dosen</h4>
                                @foreach($datadsn as $dsn)
                                <form action="/dosen/show/{{$dsn->nidn}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>NIDN </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nidn" value="{{$dsn->nidn}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nama" value="{{$dsn->nama}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Prodi </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="prodi" value="{{$dsn->prodi}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Bidang Ilmu </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="bidang_ilmu" value="{{$dsn->bidang_ilmu}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Jalan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="jalan" value="{{$dsn->alamat->jalan}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            <label>Kelurahan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="kelurahan" value="{{$dsn->alamat->kelurahan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label>Kecamatan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="kecamatan" value="{{$dsn->alamat->kecamatan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label>Kota </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="kota" value="{{$dsn->alamat->kota}}">
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
                                <h4 class="card-title">Data Perwalian</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @forelse($datamhs->walimahasiswa as $mhs)
                                                <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$mhs->nim}}</td>
                                                <td>{{$mhs->nama}}</td>
                                                <td>{{$mhs->email}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                <td colspan="7" style="text-align: center">Data Tidak Ada</td>
                                                </tr>
                                                @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-20">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Nilai</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Mata Kuliah</th>
                                            <th>Tugas</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @forelse($datanli as $nlmhs)
                                                <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$nlmhs->nim_dinilai}}</td>
                                                <td>{{$nlmhs->mahasiswa->nama}}</td>
                                                <td>{{$nlmhs->matkul->nama}}</td>
                                                <td>{{$nlmhs->tugas}}</td>
                                                <td>{{$nlmhs->uts}}</td>
                                                <td>{{$nlmhs->uas}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                <td colspan="7" style="text-align: center">Data Tidak Ada</td>
                                                </tr>
                                                @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
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
