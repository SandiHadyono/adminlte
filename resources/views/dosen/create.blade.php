@extends('layouts.index')
@section('title', 'Create Dosen')
<?php $subtitle="Create Dosen"; ?>

@section('content')
        <div class="Content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Data Dosen</h4>
                                <form action="/dosen/store" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>NIDN </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" id="nidn" name="nidn" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" id="nama" name="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Telf </label>
                                                <div class="form-group">
                                                <input type="text" id="telf" name="telf" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Prodi </label>
                                                <div class="form-group">
                                                <input type="text" id="prodi" name="prodi" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Bidang Ilmu </label>
                                                <div class="form-group">
                                                <input type="text" id="bidang_ilmu" name="bidang_ilmu" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                          <button type="submit" class="btn btn-info pull-right">Create Data</button>
                                        </div>
                                    </div>
                                </form>
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
