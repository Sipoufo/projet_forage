@extends('admin.layouts.skeleton')
@section('title', 'Administrator')
@section('nav')
        <li class="nav-item">
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
        <li class="nav-item active">
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
        <li class="nav-item ">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Stock</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Stock Information</h6>
                    <a class="collapse-item" href="/admin/add">Add</a>
                    <a class="collapse-item" href="/admin/remove">Remove</a>
                    <a class="collapse-item" href="/admin/stock">Stock</a>
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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Administrators</h1> 
        <a href="/admin/administrator/addAdministrator" class="btn btn-primary"> Add an administrator </a>
    </div>

    <div class="container">
      <table class="table table-striped table-light table-hover table-sm table-responsive-lg text-center">
        <thead style="background-color:#4e73df;color:white;">
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Registered_at</th>
            <th>Actions</th> 
          </tr>
        </thead>
        <tbody>
          <tr style="background-color:white;color:black;">
            <td>image.png</td>
            <td>Fenyom Bryan</td>
            <td>bryan@gmail.com</td>
            <td>698445628</td>
            <td>2021-07-08 16:01:30</td>
            <td>
            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>

            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
            </td>
          </tr>
          <tr style="background-color:white;color:black;">
            <td>image.png</td>
            <td>Sipoufo Loic Yvan</td>
            <td>popof@gmail.com</td>
            <td>672345628</td>
            <td>2021-07-08 16:01:30</td>
            <td>
            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>

            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
            </td>
          </tr>
          <tr style="background-color:white;color:black;">
            <td>image.png</td>
            <td>Kepya Christian</td>
            <td>christian@gmail.com</td>
            <td>690345628</td>
            <td>2021-07-08 16:01:30</td>
            <td>
            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>

            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
        

@stop