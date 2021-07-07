@extends('Client.layout.default')
@section('title', 'User')
@section ('nav')

        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">
                        Christian Kepya
                    </span>
                </a>

                <div class="nav_list">
                    <a href="/home" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Home</span>
                    </a>

                    <a href="/user" class="nav_link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">User</span>
                    </a>
                    
                    <a href="/invoice" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Bills">
                        <i class='fas fa-file-invoice-dollar nav_icon'></i>
                        <span class="nav_name">Invoice</span>
                    </a>
                    
                    <a href="/receipt" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Receipt">
                        <i class='fas fa-receipt nav_icon'></i>
                        <span class="nav_name">Receipt</span>
                    </a>

                    <a href="/message" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Message">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span>
                    </a>
                </div>
            </div>

            <section class="nav_notify_button" id="notify">
                <i class='bx bx-bell nav_icon not'>
                    <i class='bx bx-radio-circle bx-burst nav_notify_radio_position' style='color:#ffe200' id="bx1"></i>
                    <i class='bx bxs-circle nav_notify_circle_position' style='color:#ffe200' id="bx"></i>
                </i>
                <span class="nav_name not" id="not">Notification</span>
            </section>

            <section class="hide_menu_account card" id="sms">
                <section class="card-header espace">
                    <span class="font-12 col-xs-6 font-semi-bold mr-4">Nouvelles notifications</span>
                    <a class="mark-notification-read col-xs-6 text-right font-12 font-semi-bold" href="javascript:;"> Marquer comme lu</a>
                </section>
                <a href="google.com" class="noti pl-4 pr-4 pt-3 pb-3">
                    <div class="user_i"><i class='bx bx-user bxUser'></i></div>
                    <div class="forage">
                        <div>Bienvenue sur ForageManager</div>
                        <div style="font-size: 12px;">il y'a deux minute</div>
                    </div>
                </a>
                <hr>
            </section>

            <a href="#" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Log out</span>
            </a>
        </nav>

@stop
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
        