@extends('admin.layouts.skeleton')
@section('title', 'Customer')
<style>
 /* .btn:hover{
    background-color: #e7e7e7;
 } */

</style>
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
        <li class="nav-item">
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
        <h1 class="h3 mb-0 text-gray-800">Customers</h1> 
        <a href="/admin/customer/addCustomer" class="btn btn-primary"> Add a customer </a>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <!-- Basic Card Example -->
    <?php 
        if($customers['status'] == 200){ 

            $informations = $customers['result'];

            foreach($informations as $key => $info) { 
                $location = $info['localisation'];
                $description = $location['description'];
                $status = $info['status'];   
            ?>
            <div class="col-md-6 col-lg-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success">
            
                                <h6 class="m-0 font-weight-bold text-white" style="font-size:25px;"><?=$info['name']?>

                                <a href="#" class="btn bg-success float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                    <span class="icon"  style="color:white;">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>

                                <a href="#" class="btn bg-success float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                    <span class="icon"  style="color:white;">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>

                                </h6>
                        </div>
                        <?php 
                            if(!empty($info['profileImage'])){
                                $image = url('storage/'.$info['profileImage']);
                            }else{
                                $image = "/img/undraw_profile.svg";
                            }

                        ?>
                        <div class="card-body text-center"><img class="img-profile rounded-circle w-75" src='<?= $image ?>' />
                            <hr /> 
                            <table>
                                <tr>
                                    <td>Nom : </td>
                                    <td><?=$info['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Number: </td>
                                    <td><?= $info['phone'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address: </td>
                                    <td><?= $description ?></td>
                                </tr>
                            </table>

                            <?php 
                                if($status == 1){ ?>

                                    <a href="#" class="btn btn-success btn-icon-split text-center" style="margin-top:10px;">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Active</span>
                                    </a>
                            <?php }else{ ?>

                                <a href="#" class="btn btn-warning btn-icon-split text-center" style="margin-top:10px;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span class="text">Block</span>
                                </a>

                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
     <?php } 
        }
     ?>       
    </div> 

@stop