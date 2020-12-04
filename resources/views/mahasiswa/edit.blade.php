@extends('layouts.index')
@section('title', 'Edit Mahasiswa')
<?php $subtitle="Edit Mahasiswa"; ?>

@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="content">

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Row Label</h4>
                                @foreach($data as $data)
                                <form action="/mahasiswa/update/{{$data->nim}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>NIM </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" id="nim" name="nim" readonly class="form-control" value="{{$data->nim}}">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Nama </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" id="nama" name="nama" class="form-control" value="{{$data->nama}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Tanggal Lahir </label>
                                                <div class="form-group">
                                                <input type="text" id="tgllahir" name="tgllahir" class="form-control" value="{{$data->tanggal_lahir}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Email </label>
                                                <div class="form-group">
                                                <input type="text" id="email" name="email" class="form-control" value="{{$data->email}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-warning pull-right">Edit Data</button>
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
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection
