@extends('client.layout.default')
@section('title', 'Dashboard')
@section('nav')
        <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
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
        <li class="nav-item">
            <a class="nav-link collapsed" href="/consumption" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consumption">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Consumption</span>
            </a>
        </li>

        <!-- Nav Item - Invoice -->
        <li class="nav-item">
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
            <a class="nav-link collapsed" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log Out" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>

@stop
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Personal Information</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Total of invoices -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div
                            class="
                            text-xs
                            font-weight-bold
                            text-primary text-uppercase
                            mb-1
                            "
                        >
                            Total Invoices
                        </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Invoices that have been paid -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div
                            class="
                            text-xs
                            font-weight-bold
                            text-success text-uppercase
                            mb-1
                            "
                        >
                            Total Invoices Paid
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            0
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Total invoice which didn't paid -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div
                                class="
                                text-xs
                                font-weight-bold
                                text-info text-uppercase
                                mb-1
                                "
                            >
                                Total Unpaid Invoices
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                0
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hand-holding-usd fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content Row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Invoice in progress</h6>
                </div>
                <div class="card-body container-fluid">
                <div class="col-lg-12 bg-info mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">Sipoufo Yvan</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">10 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i class="fas fa-arrow-right text-primary" style="font-size: 30px; cursor:pointer"
                        ></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-info mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">Bryan</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">9 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i class="fas fa-arrow-right text-primary" style="font-size: 30px; cursor:pointer"
                        ></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-info mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">Christian</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">9 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                        <div class="col-auto">
                            <i class="fas fa-arrow-right text-primary" style="font-size: 30px; cursor:pointer"
                            ></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-info mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">CFS</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">9 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i class="fas fa-arrow-right text-primary" style="font-size: 30px; cursor:pointer"
                        ></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Unpaid Invoices</h6>
                </div>
                <div class="card-body container-fluid">
                <div class="col-lg-12 bg-danger mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">Sipoufo Yvan</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">10 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i
                        class="fas fa-lightbulb"
                        style="font-size: 30px; color: red"
                        ></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-danger mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">Bryan</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">9 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i
                        class="fas fa-lightbulb"
                        style="font-size: 30px; color: red"
                        ></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-danger mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">Christian</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">9 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i
                        class="fas fa-lightbulb"
                        style="font-size: 30px; color: red"
                        ></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 bg-danger mb-2 row">
                    <div class="text-white col-md-4">
                    <div class="">
                        Nom
                        <div class="text-white-50 small">CFS</div>
                    </div>
                    </div>
                    <div class="text-white col-md-4">
                    <div class="">
                        Consumption
                        <div class="text-white-50 small">
                        40 m<sup>3</sup>
                        </div>
                    </div>
                    </div>
                    <div class="text-white col-md-3">
                    <div class="">
                        amount
                        <div class="text-white-50 small">9 000Fcfa</div>
                    </div>
                    </div>
                    <div class="text-white col-md-1">
                    <div class="col-auto">
                        <i
                        class="fas fa-lightbulb"
                        style="font-size: 30px; color: red"
                        ></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">About Your Account</h6>
                </div>
                <div class="card-body container-fluid">
                    <p>Owner's Name : Sipof Yvan</p>
                    <p>Customer's Name : Christian kepya</p>
                    <p>Meter Number : UIX2024</p>
                    <p>Subscription Price : 50000Franc CFA</p>
                    <p>Subscription Date : 25 juin 2019</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product</h6>
                </div>
                <div class="card-body">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                    <li
                        data-target="#demo"
                        data-slide-to="0"
                        class="active"
                    ></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                        class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                        style="width: 25rem"
                        src="/img/undraw_posting_photo.svg"
                        alt="Los Angeles"
                        />
                        <div class="carousel-caption-description">
                        <p>
                            This is the caption description text for image 1.
                        </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                        class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                        style="width: 25rem"
                        src="/img/undraw_posting_photo.svg"
                        alt="Chicago"
                        />
                        <div class="carousel-caption-description">
                        <p>
                            This is the caption description text for image 2.
                        </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                        class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                        style="width: 25rem"
                        src="/img/undraw_posting_photo.svg"
                        alt="New York"
                        />
                        <div class="carousel-caption-description">
                        <p>
                            This is the caption description text for image 3.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- Left and right controls -->
                    <a
                    class="carousel-control-prev"
                    href="#demo"
                    data-slide="prev"
                    >
                    <i
                        class="fas fa-hand-point-left"
                        style="font-size: 40px; color: black"
                    ></i>
                    </a>
                    <a
                    class="carousel-control-next"
                    href="#demo"
                    data-slide="next"
                    >
                    <i
                        class="fas fa-hand-point-right"
                        style="font-size: 40px; color: black"
                    ></i>
                    </a>
                </div>
                </div>
            </div>
        </div>

    </div>
@stop