@extends('admin.layouts.skeleton')
@section('title', 'Dashboard')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Status /3Months</h1>
    </div>

    <!-- Month -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">January</h1>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Sipoufo Djiodom Loïc Yvan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">8 000Fcfa</div>
                        </div>
                        <div class="col-auto">
                            <a href="#.php"><i class="fas fa-phone-alt fa-2x text-gray-300"></i></a>
                            <a href="#.php"><i class="fas fa-comment-dots fa-2x text-gray-300"></i></a>
                            <a href="#.php"><i class="fas fa-smile fa-2x" style='color:green'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Bryan Christian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">8 000Fcfa</div>
                        </div>
                        <div class="col-auto">
                            <div class="col-auto">
                                <a href="#.php"><i class="fas fa-phone-alt fa-2x text-gray-300"></i></a>
                                <a href="#.php"><i class="fas fa-comment-dots fa-2x text-gray-300"></i></a>
                                <a href="#.php" data-toggle="modal" data-target="#activeModal"><i class="fas fa-frown fa-2x" style='color:red'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Month -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">February</h1>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Sipoufo Djiodom Loïc Yvan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">8 000Fcfa</div>
                        </div>
                        <div class="col-auto">
                            <a href="#.php"><i class="fas fa-phone-alt fa-2x text-gray-300"></i></a>
                            <a href="#.php"><i class="fas fa-comment-dots fa-2x text-gray-300"></i></a>
                            <a href="#.php"><i class="fas fa-smile fa-2x" style='color:green'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop