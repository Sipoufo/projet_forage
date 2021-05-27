@extends('Client.layout.default')
@section('title', 'User')
@section('main')

<h1>                            
    <i class='bx bx-grid-alt'></i>
    <span class="nav_name">User</span>
</h1>

<!-- User Card -->
<div class="card mb-4">
    <div class="card-header">
        Christian Kepya
    </div>
    <div class="card-body">
        <div class="container">
            <form class="col-lg-8 offset-lg-2">
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="name" id="name" name="name">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="prenom" id="prenom" name="prenom">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">@</span></div>
                    <input type="email" class="form-control" placeholder="email" id="email">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-phone-volume'></i></span></div>
                    <input type="number" class="form-control" placeholder="Numéro de téléphone" id="phone" name="phone">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-map-marked-alt'></i></span></div>
                    <input type="text" class="form-control" placeholder="localisation" id="localisation" name="localisation">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-grin'></i></span></div>
                    <input type="FILE" class="form-control" placeholder="Entrer votre photo" id="photo" name="photo">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text">Description of localisation</span></div>
                    <textarea class="form-control" aria-label="Biographie"></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">.</span></div>
                    <input type="password" class="form-control" placeholder="Ancien mot de passe" id="old password" name="Old Password">                  
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">.</span></div>
                    <input type="password" class="form-control" placeholder="Nouveau mot de passe" id="New Password" name="New Password">                  
                </div>
                <button class="btn btn-primary" type="submit">Edit</button>
            </form>
        </div>
    </div>
</div>
             
@stop
        