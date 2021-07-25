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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Administrators</h1> 
         @if(Session::has('profile'))
            @if(Session::get('profile') == "superAdmin")
            <a href="/admin/administrator/addAdministrator" class="btn btn-primary"> Add an administrator </a>
          @endif
        @endif
    </div>

    <?php if($administrators['status'] == 200){ 

            $informations = $administrators['result']; ?>

    <div class="container">
      <table class="table table-striped table-light table-hover table-sm table-responsive-lg text-center">
        <thead style="background-color:#4e73df;color:white;">
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            @if(Session::has('profile'))
                @if(Session::get('profile') == "superAdmin")
                    <th>Active/Blocked</th>
                @endif
            @endif
            <th>Registered_at</th>
            <th>Actions</th> 
          </tr>
        </thead>
        <tbody>

            <?php

                foreach($informations as $key => $info) { 
                    $name = $info['name'];
                    $email = $info['email'];
                    $phone = $info['phone'];
                    $registered_at = date('d-m-Y H:i:s', strtotime($info['createdAt'])); 

                    if(!empty($info['profileImage'])){
                        $image = url('storage/'.$info['profileImage']);
                    }else{
                        $image = "/img/undraw_profile.svg";
                    }
            ?>
          <tr style="background-color:white;color:black;">
            <td><img class="img-profile" src='<?= $image ?>' height="40" width="40"/></td>
            <td><?= $name ?></td>
            <td><?= $email ?></td>
            <td><?= $phone ?></td>
            @if(Session::has('profile'))
                @if(Session::get('profile') == "superAdmin")
                    <td>
                        @if($info['status'] == true)
                            <a href="#">
                            <button class="btn btn-sm btn-space btn-success rounded-pill"><span class="icon mdi mdi-checkbox-marked-circle-outline"></span>Active</button>
                            </a>
                        
                        @else
                            <a href="#">
                            <button class="btn btn-sm btn-space btn-danger rounded-pill"><span class="icon mdi mdi-checkbox-marked-circle-outline"></span>Blocked</button>
                            </a>
                        @endif
                    </td>
                @endif
            @endif
            <td><?= $registered_at ?></td>
            <td>
                    @if(Session::has('profile'))
                
                        @if(Session::get('profile') != "superAdmin")

                            {{ _('No action') }}
                    
                        @else

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
                        @endif
                    @endif
            </td>
          </tr>
          <?php } ?>    
        </tbody>
      </table>
    </div>
    <?php } ?>        

@stop