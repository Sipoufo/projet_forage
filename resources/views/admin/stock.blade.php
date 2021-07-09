@extends('admin.layouts.skeleton')
@section('title', 'Stock')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product</h1> 
</div>

<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <!-- Basic Card Example -->
    <div class="col-md-6 col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-success">
                <h6 class="m-0 font-weight-bold text-white">Tuyau</h6>
            </div>
            <div class="card-body text-center">
                <img class="img-profile rounded-circle w-75" src="/img/undraw_profile.svg" />
                <hr /> 
                <div class="float-left">
                    <h5><b>Quantity : </b>5</h5>
                </div>
                <div class="float-right">
                    <h5><b>Unit : </b>5000</h5>
                </div>
            </div>
        </div>
    </div>
    
</div>

@stop