@extends('Client.layout.default')
    @section('title', 'Consumption')
    @section('nav')
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
            <a class="nav-link" href="/home">
            <i class="fas fa-home"></i>
            <span>Home</span></a
            >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Informations</div>

        <!-- Nav Item - consumption -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="/consumption" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consumption">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Consumption</span>
            </a>
        </li>

        <!-- Nav Item - Invoice -->
        <li class="nav-item ">
            <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices">
                <i class="fas fa-money-bill-alt"></i>
                <span>Invoice</span>
            </a>
            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Invoices</h6>
                    <a class="collapse-item" href="/invoices_paid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices paid">Invoices Paid</a>
                    <a class="collapse-item" href="/unpaid_invoices" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices unpaid">Unpaid Invoices</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/tchat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification">
            <i class="fas fa-file-archive"></i>
            <span>Notification</span>
            </a>
        </li>

        <!-- Nav Item - Profile Setting -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/user" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profile Setting</span>
            </a>
        </li>

        <!-- Nav Item - Policy -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/clauses" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
            <i class="fas fa-list"></i>
            <span>Confidentiality Clauses</span>
            </a>
        </li>

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log Out" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>

@stop
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Consumption</h1>
        <a href="#" class="btn btn-info btn-icon-split col-md-12 col-lg-2 offset-lg-5 mr-3">
            <span class="icon text-white-50">
                <i class="fas fa-info-circle"></i>
            </span>
            <span class="text">Monthly</span>
        </a>
        <a href="#" class="btn btn-success btn-icon-split col-md-12 col-lg-2 offset-lg-0">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Yearly</span>
        </a>
    </div>

    <div class="row">
        <!-- Detail Part -->
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Title -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Monthly</h6>
                </a>
                <!-- Corps -->
                <div class="collapse show container-fluid row" id="collapseCardExample">
                    <!-- Month -->
                    <div class="col-md-4 card-body">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            January</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">8 000Fcfa</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 card-body">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Febuary</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">40 000Fcfa</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 card-body">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            March</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">130 000Fcfa</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Title -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Yearly</h6>
                </a>
                <!-- Corps -->
                <div class="collapse show container-fluid row" id="collapseCardExample">
                    <!-- Month -->
                    <div class="col-md-4 card-body">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            2021</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">8 000Fcfa</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Year -->
                    <div class="col-md-4 card-body">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            2020</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">40 000Fcfa</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Month -->
                    <div class="col-md-4 card-body">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            2019</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">120 000Fcfa</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@stop
        