@extends('admin.layouts.skeleton')
@section('title', 'Dashboard')
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
                <table>
                    <tr>
                        <td>Prix</td>
                        <td>5000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</div>

@stop