@extends('admin.layouts.skeleton')
@section('title', 'EditProfile')
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
        <li class="nav-item active">
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
            Edit my profile 
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
            
             <form method="post" action="/admin/update" class="col-lg-8 offset-lg-2" enctype="multipart/form-data">
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
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">    
                    @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror              
                </div>
               <?php $localisation = $data['localisation']; ?>  
                <input type="hidden" name="lat" id="lat" value="<?= $localisation['latitude']?>"/> 
                <input type="hidden" name="lng" id="lng" value="<?= $localisation['longitude']?>"/>

                <hr>
                <div class="row float-right mt-3">
                    <a href="/admin/profile">
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-primary ml-2" type="submit">Proceed</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@stop