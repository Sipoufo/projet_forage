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

<div class="card mb-4">
    <div class="card-header">
        Detail of Invoice
    </div>
    <div class="card-body">
        <div class="container">
            
            <?php if (isset($messageOK)){?>
                    <div class="alert alert-success alert-dismissible fade show"><i class="fas fa-check-circle"></i> <?= $messageOK ?> 
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
            <?php } ?>
            <?php if (isset($messageErr)){?>
                    <div class="alert alert-danger alert-dismissible fade show"><i class="fas fa-exclamation-triangle"></i><?= $messageErr ?> 
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
            <?php } ?>
            
            <form method="post" action="/admin/facture/{{$invoice->_id}}" class="col-lg-8 offset-lg-2">
                {{csrf_field()}}
                <div class="form-group mb-3">
                    <div class="input-group">Personnel</div>
        
                    <select name="idClient" id="idClient" class="form-control" disabled>
                        <option value={{$client -> _id}}>{{ $client -> name }}</option>
                    </select>
                </div>
            
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">New index</div>
                            <input type="number" class="form-control" placeholder="new index" id="newIndex" name="newIndex" value="<?= $invoice  -> newIndex?>" required>                  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">Old index</div>
                            <input type="number" disabled class="form-control" placeholder="old index" id="oldIndex" name="oldIndex" value="<?= $invoice  -> oldIndex?>" required>                  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">Consumption</div>
                            <input type="number" disabled class="form-control" placeholder="new index" id="newIndex" name="consommation" value="<?= $invoice  -> consommation?>" required>                  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">Penalty</div>
                            <input type="number" class="form-control" placeholder="penalty" id="penalty" name="penalty" value="<?= $invoice  -> penalite?>" required>                  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">date Facturation</div>
                            <input type="date" disabled class="form-control" placeholder="new index" id="newIndex" name="newIndex" value="<?= $invoice  -> dateFacturation?>" required>                  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">Observation</div>
                            <input type="text" class="form-control" placeholder="Observation" id="observation" name="observation" value="<?= $invoice  -> observation?>" required>                  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">Date of spicy</div>
                            <input type="date" class="form-control" id="dateSpicy" name="dateSpicy" placeholder="Date of spicy" value="<?= $invoice  -> dateReleveNewIndex?>" required>                  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <div class="input-group">Date Limit of paiement</div>
                            <input type="date" disabled class="form-control" id="dataPaid" name="dataPaid" placeholder="Date of payement" value="<?= $invoice  -> dataLimitePaid?>" required>                  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <div class="input-group">Amount</div>
                            <input type="number" disabled class="form-control" placeholder="consumption" id="consumption" name="consumption" value="<?= $invoice  -> montantConsommation?>" required>                  
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <div class="input-group">Paid</div>
                            <input type="number" class="form-control" placeholder="money who give" id="amountPaid" name="amountPaid" value="<?= $invoice  -> montantVerse?>" required>                  
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <div class="input-group">UnPaid</div>
                            <input type="number" disabled class="form-control" id="oldIndex" name="oldIndex"  value="<?= $invoice  -> montantImpaye?>" required>                  
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex justify-content-between">
                    <div class="float-left">
                        @if($invoice  -> facturePay == false)
                            <a href="{{ url('/admin/paid/'.$invoice->_id) }}">
                                <button class="btn btn-primary" name="connect" type="button">Paid Invoice</button>
                            </a>
                        @endif
                    </div>
                    <div class="float-right">
                        @if($invoice  -> facturePay == false)
                            <button class="btn btn-primary" name="connect" type="submit">Update</button>
                        @endif
                        <a href="/admin/home">
                            <button class="btn btn-secondary ml-2" type="button">Cancel</button>
                        </a>
                    </div>
                </div>

                
                
            </form>
        </div>
    </div>
</div>
@stop