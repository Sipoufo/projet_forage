@extends('admin.layouts.skeleton')
@section('title', 'Consumption')
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
        <li class="nav-item active">
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

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Consumption</h1> 
    </div>

        <div class="flex d-flex justify-content-between mb-1">
            <!-- Detail Part -->
            <form action="{{url('/admin/search_invoices')}}" method="post" role="form">
                @csrf
                <div class="flex d-flex align-items-center">
                    entries :
                    <select class="form-control ml-2" style="width: 70px;" id="select_size" name="select_size" value="<?= $size ?>">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                    <input type="submit" name="send_pagination" id="send_pagination" placeholder="Show" class="ml-1 btn btn-primary">
                </div>
            </form>
            <form action="{{url('/admin/search_invoices')}}" method="post" role="form">
                @csrf
                <div class="flex d-flex align-items-center">
                    search By : 
                    <select class="form-control ml-2" name="type" id="type" style="width: 100px;">
                    <option value="month">Month</option>
                    <option value="year">Year</option>
                    </select>
                    <input type="number" name="search" id="search" class="form-control ml-2" style="width: 100px;"/>
                    <input type="submit" name="send_search" id="send_search" class="ml-1 btn btn-primary">
                </div>
            </form>
        </div>
        <div class="row">
            <!-- Detail Part -->
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Facture</h6>
                    </div>
                    <div class="card-body container-fluid">
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead class="thead thead-danger">
                        <tr>
                            <th>Name</th>
                            <th style="text-align: center">Consumption</th>
                            <th style="text-align: center">Amount</th>
                            <th style="text-align: center">UnPaid</th>
                            <th style="text-align: center">Pénalité</th>
                            <th style="text-align: center">Date Paiement</th>
                            <th style="text-align: right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($invoices as $invoice)
                            <tr>
                                <td>{{$client[$loop ->index]->name}}</td>
                                <td style="text-align: center">{{$invoice -> consommation}} m<sup>3</sup></td>
                                <td style="text-align: center">{{$invoice -> montantConsommation}}</td>
                                <td style="text-align: center">{{$invoice -> montantImpaye}} FCFA</td>
                                <td style="text-align: center">{{$invoice -> penalite}} FCFA</td>
                                <td style="text-align: center">{{$invoice -> dateFacturation}}</td>
                                <td style="text-align: right">
                                    <a href="{{ url('/admin/detail-consumption/'.$invoice->_id.'/edit') }}" class="btn btn-xs btn-primary pull-right">
                                        <i class="fa fa-pencil-alt" style="font-size: 20px;">
                                        </i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex d-flex justify-content-end mb-1">
            <!-- Detail Part -->
            @for($i = 0; $i < $page; $i++)
                <a href="{{ url('/admin/consumption/page/'.($i+1).'/size/'.$size) }}">
                <button class="ml-1 btn btn-primary"  style="width: 40px;" name="page_search" id="page_search">{{$i + 1}}</button>
                </a>
            @endfor
        </div>

@stop