@extends('admin.app')

@section('template_title')
    Reportes
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body id="page-top">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Reportes de uso</h1>
            <p class="mb-4">Reportes sobre el uso de cajones en los distintos eventos registrados en nuestra plataforma.</p>

            <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">

                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            <hr>
                            Cajones más usados en los eventos
                        </div>
                    </div>

                    <!-- Bar Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>
                            <hr>
                            Cajones más usados en los eventos
                        </div>
                    </div>

                </div>

                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <hr>
                            Cajones más usados durante todo el mes.
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Page level custom scripts -->
    <script src="{{asset('libs/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('libs/sbadmin/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('libs/sbadmin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('libs/sbadmin/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('libs/sbadmin/js/demo/chart-bar-demo.js')}}"></script>
    <link href="{{asset('libs/sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</body>

</html>
@endsection