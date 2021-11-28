@extends('admin.layouts.skeleton')
@section('title', 'EditCustomer')
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
            <a class="nav-link collapsed" href="/admin/facture">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Invoices</span>
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

    <div class="card mb-4">
        <div class="card-header">
            Edit a customer
            <div class="float-right">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#accountModal">Edit Customer Account</a>
            </div>
        </div>

    <div class="card-body">
        <div class="container">
            <!-- form validation -->

            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

             <form method="post" action="/admin/customer/saveCustomer/<?= $data['_id']?>" class="col-lg-8 offset-lg-2" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" id="name" name="name" value="<?= $data['name']?>" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-birthday-cake'></i></span></div>
                    <input type="date" class="form-control" id="birth_date" name="birthdate" value="<?= $data['birthday']?>" required>
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">@</span></div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" id="email" value="<?= $data['email']?>">
                     @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-phone-volume'></i></span></div>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="phone number" id="phone" name="phone" value="<?= $data['phone']?>" required>
                    @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class=' fas fa-image'></i></span></div>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                    @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <input type="hidden" name="profileImage" id="profileImage" value="<?= $data['profileImage']?>"/>

                <div class="row float-right mt-3">
                    <a href="/admin/customer">
                        <button class="btn btn-secondary" type="button">Cancel</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary ml-2" name="submit" type="submit">Proceed</button>
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Account Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Customer Account</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/admin/customer/account/update/<?= $data['_id']?>" class="user">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Water meter identifier" id="identifier" name="identifier" value="<?= $data['IdCompteur']?>" required>
                    </div>
                    <hr>
                    <div class="row float-right mt-3">
                        <a href="#">
                            <button href="#" class="btn btn-primary btn-user" name="submit" type="submit">
                                Proceed
                            </button>
                        </a>
                        <a href="#">
                            <button class="btn btn-secondary btn-user ml-2" type="button" data-dismiss="modal">Cancel</button>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@stop
