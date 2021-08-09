@extends('admin.layouts.skeleton')
@section('title', 'Add a Customer')
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
            Add a customer 
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
            
             <form method="post" action="/admin/customer/addCustomer/store" class="col-lg-8 offset-lg-2" enctype="multipart/form-data">
                @csrf
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="first name" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                        @error('firstname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror                          
                </div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="last name" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
                        @error('lastname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror                       
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-birthday-cake'></i></span></div>
                    <input type="date" class="form-control" id="birth_date" name="birthdate" value="{{ old('birthdate') }}" required>                         
                </div>
                 
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">@</span></div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" id="email" value="{{ old('email') }}">                    
                     @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                     @enderror  
                </div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-phone-volume'></i></span></div>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="phone number" id="phone" name="phone" value="{{ old('phone') }}" required>                
                    @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-home'></i></span></div>
                    <input type="text" class="form-control" placeholder="home location" id="home" name="home" value="{{ old('home') }}" required>                
                </div>
                  
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-water'></i></span></div>
                    <input type="text" class="form-control" placeholder="Water meter identifier" id="identifier" name="identifier" value="{{ old('identifier') }}" required>                  
                </div>
                  
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class=' fas fa-lock'></i></span></div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter the password" id="password" name="password" value="{{ old('password') }}" required>                  
                    @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class=' fas fa-lock'></i></span></div>
                    <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="Confirm the password" id="confirmpassword" name="confirmpassword" value="{{ old('confirmpassword') }}" required>                  
                    @error('confirmpassword')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class=' fas fa-image'></i></span></div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">    
                    @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror              
                </div>

                <div class="row float-right mt-3">
                    <a href="#">
                        <button class="btn btn-primary" name="submit" type="submit">Register</button>
                    </a>
                    <a href="/admin/customer">
                        <button class="btn btn-secondary ml-2" type="button">Cancel</button>
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>

@stop