@extends('admin.layouts.skeleton')
@section('title', 'Add a Customer')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        Add a customer 
    </div>
    <div class="card-body">
        <div class="container">
            <form method="post" action="" class="col-lg-8 offset-lg-2">
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="first name" id="firstname" name="firstname">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="last name" id="lastname" name="lastname">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-birthday-cake'></i></span></div>
                    <input type="date" class="form-control" id="birth_date">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">@</span></div>
                    <input type="email" class="form-control" placeholder="email" id="email">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-phone-volume'></i></span></div>
                    <input type="number" class="form-control" placeholder="phone number" id="phone" name="phone">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-water'></i></span></div>
                    <input type="text" class="form-control" placeholder="Water meter identifier" id="meter_identifier" name="meter_identifier">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-lock'></i></span></div>
                    <input type="password" class="form-control" placeholder="Enter the password" id="password" name="password">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-lock'></i></span></div>
                    <input type="password" class="form-control" placeholder="Confirm the password" id="confirmpassword" name="confirmpassword">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-image'></i></span></div>
                    <input type="FILE" class="form-control" id="photo" name="photo">                  
                </div>
                
                <div class="row float-right">
                    <a href="#">
                        <button class="btn btn-primary" type="submit">Register</button>
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