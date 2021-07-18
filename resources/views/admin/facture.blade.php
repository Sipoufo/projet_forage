@extends('admin.layouts.skeleton')
@section('title', 'Bill')
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
        <li class="nav-item active">
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

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>
@stop
@section('content')

<div class="card mb-4">
    <div class="card-header">
        Add an Invoice
    </div>
    <div class="card-body">
        <div class="container">
            <form method="post" action="/admin/facture" class="col-lg-8 offset-lg-2">
                    <?php 
						if (!empty($_error)) {
							echo '<div class="text-danger">'.$error.'</div>';
						}
					?>
                {{csrf_field()}}
                <div class="form-group mb-3">
                    <div class="input-group">Personnel</div>
        
                    <select name="idClient" id="idClient">
                        <?php 
                            foreach($users as $p){echo '<option value='.$p.'>'.$p.'</option>';} 
                        ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">New index</div>
                    <input type="number" class="form-control" placeholder="new index" id="newIndex" name="newIndex" required>                  
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">Last index</div>
                    <input type="number" class="form-control" placeholder="last index" id="lastIndex" name="lastIndex" required>                  
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">Price of KW</div>
                    <input type="number" class="form-control" placeholder="price of kilo wath" id="priceKW" name="priceKW" required>                  
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">Limit date of paiement</div>
                    <input type="date" class="form-control" id="dataLimitePaid" name="dataLimitePaid" placeholder="limit date of payement" required>                  
                </div>
            
                <div class="row float-right">
                    <a href="#">
                        <button class="btn btn-primary" name="connect" type="submit">Register</button>
                    </a>
                    <a href="/admin/administrator">
                        <button class="btn btn-secondary ml-2" type="button">Cancel</button>
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@stop