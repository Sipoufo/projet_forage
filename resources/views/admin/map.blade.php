@extends('admin.layouts.skeleton')
@section('title', 'Add an Administrator')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<style>
    .displayError{
        color : red;
        font-size: 15px;
    }
    #mapid {
        height: 80%;
    }
    /* Optional: Makes the sample page fill the window. */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
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

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>
@stop
@section('content')
<?php 
    $alltoken = $_COOKIE['token'];
    $alltokentab = explode(';', $alltoken);
    $token = $alltokentab[0];
    $tokentab = explode('=',$token);
    $tokenVal = $tokentab[1];
    $Authorization = 'Bearer '.$tokenVal;   
?>
<div class="card mb-4">
    <input type="text" id="headerAPI" value="<?php echo $Authorization ?>">
    <div class="card-header">
        Map
    </div>
</div> 
<div id="mapid"></div>
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>  
<script type='text/javascript'> 
    $( document ).ready(function() {
        // var header = ("#headerAPI").val();
        // alert(header)
        var settings = {
            "url": "http://localhost:4000/admin/auth/getClient",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYwZmEzMDg2M2YxZWY1MTBjY2YzYzE2MyIsImlhdCI6MTYyNzI0MjM2NiwiZXhwIjoxNjI3NTAxNTY2fQ.8k6f3NJ4f0vmf5PEjWXQ9YQ_1LvpiIP_lsb6ZoAqWTs"
            },
        };
        var client
        $.ajax(settings).done(function (response) {
            console.log(response);
            client = response;
        });
        var mymap = L.map('mapid').setView([5.48464445289128, 10.442020316114435], 18);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'sk.eyJ1Ijoic2lwb2YyNCIsImEiOiJja3JqbjVlYjUwNDZyMnVwY2s4NjlnbmhqIn0.4ZJUEirSuUiu-ywAHeJ3rQ'
        }).addTo(mymap);
        var admin = L.marker([5.48564445289128, 10.443020316114435]).addTo(mymap).bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();;
        var user1 = L.marker([5.48464446, 10.4420204]).addTo(mymap);
    });
    
</script>
<!-- Make sure you put this AFTER Leaflet's CSS -->
@stop 