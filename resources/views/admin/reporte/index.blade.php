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

                <!-- DataTales Example -->
                <div class="col-xl-7 col-lg-5">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Uso</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Area</th>
                                            <th>Pasillo</th>
                                            <th>Cajon</th>
                                            <th>Veces usado</th>
                                            <th>% de uso</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>A</th>
                                            <th>A1</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>45%</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>C</td>
                                            <td>C2</td>
                                            <td>2</td>
                                            <td>9</td>
                                            <td>70%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gráfica en dona</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <hr>
                            Cajones más utilizados durante los eventos.
                        </div>
                    </div>
                </div>

                <!-- DataTales Example -->
                <div class="col-xl-7 col-lg-5">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Disponibilidad</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Area</th>
                                            <th>Pasillo</th>
                                            <th>Cajon</th>
                                            <th>% de disponibilidad</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>A</th>
                                            <th>A2</th>
                                            <th>5</th>
                                            <th>60%</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>B</td>
                                            <td>B1</td>
                                            <td>3</td>
                                            <td>40%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Grafica de barras</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>
                            <hr>
                            Disponibilidad de los cajones de estacionamiento de una hora específica.
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