@extends('Client.layout.default')
@section('title', 'User')
@section('nav')
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
            <a class="nav-link" href="/home">
            <i class="fas fa-home"></i>
            <span>Home</span></a
            >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Informations</div>

        <!-- Nav Item - consumption -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/budget" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consumption">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Buget</span>
            </a>
        </li>

        <!-- Nav Item - Invoice -->
        <li class="nav-item">
            <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices">
                <i class="fas fa-money-bill-alt"></i>
                <span>Invoice</span>
            </a>
            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Invoices</h6>
                    <a class="collapse-item" href="/invoices_paid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices paid">Invoices Paid</a>
                    <a class="collapse-item" href="/unpaid_invoices" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices unpaid">Unpaid Invoices</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/tchat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification">
            <i class="fas fa-file-archive"></i>
            <span>Notification</span>
            </a>
        </li>

        <!-- Nav Item - Profile Setting -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="/user" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profile Setting</span>
            </a>
        </li>

        <!-- Nav Item - Policy -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/clauses" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
            <i class="fas fa-list"></i>
            <span>Confidentiality Clauses</span>
            </a>
        </li>

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log Out" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>

@stop
@section('content')

<h1>                            
    <i class='bx bx-grid-alt'></i>
    <span class="nav_name">User</span>
</h1>
    
<!-- User Card -->
<div class="card mb-4">
    <div class="card-header">
        <?= $user['result']['name']  ?>
    </div>
    <div class="card-body">
        <div class="container">

            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            
            <form method="post" action="/user/editProfile/update" class="col-lg-8 offset-lg-2" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name" name="name" value="<?= $user['result']['name']  ?>" required>                  
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-birthday-cake'></i></span></div>
                    <input type="date" class="form-control" id="birth_date" name="birthdate" value="<?= $user['result']['birthday']  ?>" required>                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">@</span></div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" id="email" value="<?= $user['result']['email']  ?>" required>                  
                    @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                     @enderror 
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-phone-volume'></i></span></div>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="phone number" id="phone" name="phone" value="<?= $user['result']['phone']  ?>" required>                  
                    @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="description of localisation" id="description" name="description" value="<?= $user['result']['localisation']['description']  ?>" required>                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class=' fas fa-lock'></i></span></div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="New password" id="password" name="password" value="{{ old('password') }}" required>                  
                    @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class=' fas fa-lock'></i></span></div>
                    <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="Confirm the password" id="confirmpassword" name="confirmpassword" value="{{ old('confirmpassword') }}"  required>                  
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

                <input type="hidden" name="identifier" id="identifier" value="<?= $user['result']['IdCompteur']  ?>"/>
                <input type="hidden" name="lat" id="lat" value="<?= $user['result']['localisation']['latitude']?>"/> 
                <input type="hidden" name="lng" id="lng" value="<?= $user['result']['localisation']['longitude']?>"/>


                <div class="row float-right mt-3">
                    <a href="/user/editProfile">
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
        