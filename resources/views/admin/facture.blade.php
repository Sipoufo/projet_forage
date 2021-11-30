@extends('admin.layouts.skeleton')
@section('title', 'Invoice')
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
            <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices">
                <i class="fas fa-fw fa-cog"></i>
                <span>Consumption</span>
            </a>
            <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities2" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Consumption</h6>
                    <a class="collapse-item" href="/admin/consumption" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices paid">All</a>
                    <a class="collapse-item" href="/admin/consumption-that-are-paid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices paid">Consumption Paid</a>
                    <a class="collapse-item" href="/admin/consumption-that-are-unpaid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices unpaid">Consumption UnPaid</a>
                </div>
            </div>
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
            <a class="nav-link collapsed" href="/admin/invoice/addInformation">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Invoices</span>
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

        <!-- Nav Item - Finances -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/finances">
            <i class="fas fa-wallet"></i>
            <span>Finances</span>
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
@if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if(Session::has('messageErr'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
        {{ Session::get('messageErr') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="py-3 d-flex flex-row align-items-center justify-content-between ">
    <h4 class="m-0 font-weight-bold text-primary">
        Add Invoices
    </h4>

    <form action="/admin/facture/search_custumer" novalidate method="post" enctype="multipart/form-data" class="form-horizontal row-border">
        <div class="col-sm-12">
            <div class="row">
                @csrf
                <div class="col-9">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Name of user">
                </div>
                <div class="col-2">
                    <button class="btn-sm btn-success" type="submit" name="search" id="search"><i class="fas fa-search"></i></button>
                </div>
            </div>

        </div>
    </form>

</div>
<div class="container-fluid" id="users">
    <section class="d-flex">
        @foreach($users as $user)
            <section class="card mr-2 mb-2" style="border-radius: 10px; border-color: black; border-style: solid; width: 300px;">
                <section class="d-flex justify-content-between">
                    <section>
                        <img src="{{$user ->profileImage}}" class="mt-2 mb-2" alt="illisible" style="position: relative; height: 90px; width: 90px; border-radius: 50%; margin-right: .5rem;margin-left: .5rem;background-color: gainsboro;">
                    </section>
                    <section class="mr-2">
                        <h5>{{$user->name}}</h5>
                        <span>{{$user->IdCompteur}}</span> 
                        <section class="d-flex justify-content-end mt-2 mb-2">
                            <button type="button" class="btn btn-primary index" style="border-radius: 10px;" id="index" role="button" data-toggle="modal" data-target="#modal-{{ $user->_id }}" target="invoice" data-client="{{$user-> _id}}">Add Invoice</span>
                        </section>

                        <!-- medium modal -->
                        <div class="modal fade" tabindex="-1" id="modal-{{ $user->_id }}" role="dialog" aria-labelledby="mediumModalLabel" data-backdrop="static"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <section>
                                            Add Invoice
                                        </section>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form data-toggle="validator" action="{{route('addOneInvoice')}}" method="post" class="col-lg-8 offset-lg-2">
                                            @csrf
                                            {{method_field('post')}}
                                            <div class="form-group mb-3" id="b_userId">
                                                <div class="input-group">User Id</div>
                                                <input type="text" class="form-control" placeholder="user Id" id="userId" required id="userId">                  
                                            </div>
                                            <div class="form-group mb-3" id="b_date">
                                                <div class="input-group">Date</div>
                                                <input type="date" class="form-control" placeholder="Date" id="date" name="date" required>                  
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group">New index</div>
                                                <input type="number" class="form-control" placeholder="new index" id="newIndex" name="newIndex" required>                  
                                            </div>
                                            <div class="form-group mb-3" id="b_oldIndex">
                                                <div class="input-group">Old index</div>
                                                <input type="number" class="form-control" placeholder="old index" id="oldIndex" name="oldIndex" value="0">                  
                                            </div>
                                            <div class="row form-group float-right">
                                                <button type="submit" class="btn btn-primary" id="addInvoice" name="addInvoice"> Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
        @endforeach
    </section>
</div>

<script src="vendor/jquery/jquery.min.js"></script>

    <script>
        let user = document.getElementById('index');
        let oldIndex = document.getElementById("b_oldIndex");
        let b_userId = document.getElementById("b_userId");
        let userId = document.getElementById("userId");

        let token = <?php 
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            echo json_encode($tokenVal); 
        ?>;

        let autorization = 'Bearer ' + token;
        // alert('Authorization : ' + autorization);

        let idUser = 0;

        user.addEventListener("click", (event) => {
            console.log('event : ', event);
            idUser = event.target.dataset.client;
            userId.value = '' + idUser;
            b_userId.hidden = true;   

            // alert('id : ' + idUser);

            var setting = {
                type: "GET",
                url: "http://localhost:4000/admin/facture/haveInvoice/" + idUser,
                headers: {
                    "Authorization": autorization
                },
            }
            $.ajax(setting)
                .done((data) => {
                    if (data.result == false) {
                        oldIndex.hidden = false;
                    } else {
                        oldIndex.hidden = true;
                    }
                    console.log(data);
                }).fail((data) => {
                    console.log('error ' + JSON.stringify(data));
                });
        });
    </script>

    <script>
        let b_date = document.getElementById("b_date");
        let date_creation = document.getElementById("date");
    
        var users = <?php echo json_encode($users); ?>;
        var date = new Date(<?php echo json_encode($date); ?>);
        let formatDate = date.getFullYear();

        if(date.getMonth() + 1 < 10) {
            formatDate = formatDate + "-0" + (date.getMonth() + 1);
        } else {
            formatDate = formatDate + "-" + (date.getMonth() + 1);
        }

        if (date.getDate() < 10 ) {
            formatDate = formatDate + "-0" + date.getDate();
        } else {
            formatDate = formatDate + "-" + date.getDate();
        }

        date_creation.value = '' + formatDate.toString();
        //date_creation.hidden = true;    
        b_date.hidden = true;       
        // *********************************************************

    </script>
@stop