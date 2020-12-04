@extends('layouts.index')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/img/faces/polinema.png">
  <link rel="icon" type="image/png" href="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/img/faces/polinema.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DASHBOARD PSDKU POLINEMA KOTA KEDIRI
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/css/paper-dashboard.css">
  <link rel="stylesheet" href="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/css/paper-dashboard.css">
  <link href="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--<link href="http://localhost/AbdulMalik/laravel/ProjectUAS/public/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />-->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/demo/demo.css" rel="stylesheet" />
</head>
@section('title', 'Edit Dosen')
<?php $subtitle="Edit Dosen"; ?>

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
                                <h4 class="card-title">Edit Data Dosen</h4>
                                @foreach($data as $data)
                                <form action="/dosen/update/{{$data->nidn}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>NIDN </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" id="nidn" name="nidn" readonly class="form-control" value="{{$data->nidn}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" id="nama" name="nama" class="form-control" value="{{$data->nama}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Telf </label>
                                                <div class="form-group">
                                                <input type="text" id="telf" name="telf" class="form-control" value="{{$data->telf}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Prodi </label>
                                                <div class="form-group">
                                                <input type="text" id="prodi" name="prodi" class="form-control" value="{{$data->prodi}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Bidang Ilmu </label>
                                                <div class="form-group">
                                                <input type="text" id="bidang_ilmu" name="bidang_ilmu" class="form-control" value="{{$data->bidang_ilmu}}">
                                                </div>
                                            </div>
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
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/plugins/moment.min.js"></script>

        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/plugins/bootstrap-switch.js"></script>

        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

        <!-- Chart JS -->
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/plugins/chartjs.min.js"></script>

        <!--  Notifications Plugin    -->
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/plugins/bootstrap-notify.js"></script>

        <!-- Control Center for Paper Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/js/paper-dashboard.js?v=2.0.0" type="text/javascript"></script>

        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src="http://localhost/AbdulMalik/laravel/politeknikihza/public/assets/demo/js/demo.js"></script>
@endsection
