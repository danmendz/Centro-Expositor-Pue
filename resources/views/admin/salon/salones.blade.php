@extends('admin.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Salones</title>
    <link href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Salones</h1>
        <p class="mb-4">Salones registrados en la plataforma.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Salones</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th>Acción</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

</html>
@endsection