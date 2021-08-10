@extends('Client.layout.default')
@section('title', 'User')
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
        <li class="nav-item ">
          <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapseUtilities2é" aria-expanded="true" aria-controls="collapseUtilities1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices">
              <i class="fas fa-file-invoice-dollar"></i>
              <span>Buget</span>
          </a>
          <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities1" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Buget</h6>
                  <a class="collapse-item" href="/budget-stat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices paid">statistics</a>
                  <a class="collapse-item" href="/budget-detail" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices unpaid">Detail</a>
              </div>
          </div>
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

        <!-- Nav Item - Profile Setting -->
        <li class="nav-item active">
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

<div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                @if(Session::has('photo'))
                  @php
                      $photo = url('storage/'.Session::get('photo'))
                  @endphp
                @else
                  @php
                      $photo = '/img/undraw_profile.svg'
                  @endphp   
                @endif
                <img src="{{$photo}}" alt="Admin" class="rounded-circle" width="150">
                <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> -->
                <div class="mt-3">
                  <h4><?= $data['name']?></h4>
                  <p class="text-secondary mb-1"><?= $data['email']?></p>
                  <p class="text-muted font-size-sm"><?= $data['phone']?></p>
                  <!-- <button class="btn btn-primary">Follow</button>
                  <button class="btn btn-outline-primary">Message</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= $data['name']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= $data['email']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= $data['phone']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Birthday</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= $data['birthday']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Home</h6>
                </div>
                <?php $localisation = $data['localisation'] ;?>
                <div class="col-sm-9 text-secondary">
                  <?= $localisation['description']?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Registered at</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= date('d-m-Y H:i:s', strtotime($data['createdAt']))?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Updated at</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?= date('d-m-Y H:i:s', strtotime($data['updatedAt']))?>
                </div>
              </div>
              <hr>
              <div class="row text-center">
                <div class="col-sm-12">
                  <a class="btn btn-info btn-block" target="_self" href="/user/editProfile">Edit</a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>
</div>
             
@stop
        