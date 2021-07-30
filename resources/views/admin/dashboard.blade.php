@extends('admin.layouts.skeleton')
@section('title', 'Dashboard')
@section('nav')
        <li class="nav-item active">
            <a class="nav-link" href="/admin/home">
            <i class="fas fa-home"></i>
            <span>Home</span></a
            >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Information</div>

        <!-- Nav Item - consumption -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/consumption">
            <i class="fas fa-fw fa-cog"></i>
            <span>consumption</span>
            </a>
        </li>

        <!-- Nav Item - Customer -->
        <li class="nav-item">
            <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
                <i class="fas fa-address-book"></i>
                <span>Customer</span>
            </a>
            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Customers</h6>
                    <a class="collapse-item" href="/admin/customer">Manage customers</a>
                    <a class="collapse-item" href="/admin/administrator">Manage Administrators</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseUtilities"
            aria-expanded="true"
            aria-controls="collapseUtilities"
            >
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Payment</span>
            </a>
            <div
            id="collapseUtilities"
            class="collapse"
            aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar"
            >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Payment information</h6>
                <a class="collapse-item" href="/admin/facture">Facture</a>
                <a class="collapse-item" href="/admin/status">Status</a>
            </div>
            </div>
        </li>

        <!-- Nav Item - Notification -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/chat">
            <i class="fas fa-file-archive"></i>
            <span>Notification</span>
            </a>
        </li>

        <!-- Nav Item - Stock -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Stock</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Stock Information</h6>
                    <a class="collapse-item" href="/admin/products_types">Products type</a>
                    <a class="collapse-item" href="/admin/manage_products">Manage products</a>
                    <a class="collapse-item" href="/admin/stock/1">Stock</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/map">
            <i class="fas fa-map-marker-alt"></i>
            <span>Map</span>
            </a>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/clauses">
            <i class="fas fa-list"></i>
            <span>Confidentiality Clauses</span>
            </a>
        </li>

        <!-- Nav Item - profile -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/profile">
            <i class="fas fa-user"></i>
            <span>Profile</span>
            </a>
        </li>

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>
@stop
@section('content')

<!-- Page Heading -->
<div
class="d-sm-flex align-items-center justify-content-between mb-4"
>
<h1 class="h3 mb-0 text-gray-800">Personal Information</h1>
<a
  href="#"
  class="
    d-none d-sm-inline-block
    btn btn-sm btn-primary
    shadow-sm
  "
  ><i class="fas fa-download fa-sm text-white-50"></i> Generate
  Report</a
>
</div>
<!-- Content Row -->
<div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
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
            Earnings (Monthly)
          </div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
            400 000Fcfa
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
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
            Personal Orange Money
          </div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
            215 000
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
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
            People who have paid
          </div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div
                class="
                  h5
                  mb-0
                  mr-3
                  font-weight-bold
                  text-gray-800
                "
              >
                80%
              </div>
            </div>
            <div class="col">
              <div class="progress progress-sm mr-2">
                <div
                  class="progress-bar bg-info"
                  role="progressbar"
                  style="width: 50%"
                  aria-valuenow="50"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <i
            class="fas fa-clipboard-list fa-2x text-gray-300"
          ></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div
            class="
              text-xs
              font-weight-bold
              text-warning text-uppercase
              mb-1
            "
          >
            Nb. product remaining
          </div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
            200
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-wrench fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Content Row -->

<div class="row">
<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div
      class="
        card-header
        py-3
        d-flex
        flex-row
        align-items-center
        justify-content-between
      "
    >
      <h6 class="m-0 font-weight-bold text-primary">
        Earnings Overview
      </h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area">
        <canvas id="myAreaChart"></canvas>
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
      <h6 class="m-0 font-weight-bold text-primary">Facture</h6>
    </div>
    <div class="card-body container-fluid">
      <!-- <h4 class="small font-weight-bold">Server Migration <span
                              class="float-right">20%</span></h4>
                      <div class="progress mb-4">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> -->
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

  <!-- Approach -->
  <!-- <div class="card shadow mb-4">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                  </div>
                  <div class="card-body">
                      <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                          CSS bloat and poor page performance. Custom CSS classes are used to create
                          custom components and custom utility classes.</p>
                      <p class="mb-0">Before working with this theme, you should become familiar with the
                          Bootstrap framework, especially the utility classes.</p>
                  </div>
              </div> -->
</div>
</div>



@stop