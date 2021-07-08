@extends('admin.layouts.skeleton')
@section('title', 'Customer')
<style>
 /* .btn:hover{
    background-color: #e7e7e7;
 } */

</style>
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Customers</h1> 
        <a href="/admin/customer/addCustomer" class="btn btn-primary"> Add a customer </a>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <!-- Basic Card Example -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-success">
    
                        <h6 class="m-0 font-weight-bold text-white" style="font-size:25px;">Sipoufo Yvan

                        <a href="#" class="btn bg-success float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-trash"></i>
                            </span>
                        </a>

                        <a href="#" class="btn bg-success float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-edit"></i>
                            </span>
                        </a>

                        </h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-profile rounded-circle w-75" src="/img/undraw_profile.svg" />
                    <hr /> 
                    <table>
                        <tr>
                            <td>Nom : </td>
                            <td>Sipoufo Djiodom Loïc Yvan</td>
                        </tr>
                        <tr>
                            <td>Number: </td>
                            <td>695914926</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td>Cameroun, Douala, Cite des palmier</td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-warning btn-icon-split text-center" style="margin-top:10px;">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Block</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-danger">
    
                        <h6 class="m-0 font-weight-bold text-white" style="font-size:25px;">Sipoufo Yvan

                        <a href="#" class="btn bg-danger float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-trash"></i>
                            </span>
                        </a>

                        <a href="#" class="btn bg-danger float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-edit"></i>
                            </span>
                        </a>

                        </h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-profile rounded-circle w-75" src="/img/undraw_profile.svg" />
                    <hr /> 
                    <table>
                        <tr>
                            <td>Nom : </td>
                            <td>Sipoufo Djiodom Loïc Yvan</td>
                        </tr>
                        <tr>
                            <td>Number: </td>
                            <td>695914926</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td>Cameroun, Douala, Cite des palmier</td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-success btn-icon-split text-center" style="margin-top:10px;">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Enabled</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-success">
    
                        <h6 class="m-0 font-weight-bold text-white" style="font-size:25px;">Sipoufo Yvan

                        <a href="#" class="btn bg-success float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                            <span class="icon"  style="color:white;" >
                                <i class="fas fa-trash"></i>
                            </span>
                        </a>

                        <a href="#" class="btn bg-success float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-edit"></i>
                            </span>
                        </a>

                        </h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-profile rounded-circle w-75" src="/img/undraw_profile.svg" />
                    <hr /> 
                    <table>
                        <tr>
                            <td>Nom : </td>
                            <td>Sipoufo Djiodom Loïc Yvan</td>
                        </tr>
                        <tr>
                            <td>Number: </td>
                            <td>695914926</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td>Cameroun, Douala, Cite des palmier</td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-warning btn-icon-split text-center" style="margin-top:10px;">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Block</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-danger">
    
                        <h6 class="m-0 font-weight-bold text-white" style="font-size:25px;">Sipoufo Yvan

                        <a href="#" class="btn bg-danger float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-trash"></i>
                            </span>
                        </a>

                        <a href="#" class="btn bg-danger float-right" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                            <span class="icon"  style="color:white;">
                                <i class="fas fa-edit"></i>
                            </span>
                        </a>

                        </h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-profile rounded-circle w-75" src="/img/undraw_profile.svg" />
                    <hr /> 
                    <table>
                        <tr>
                            <td>Nom : </td>
                            <td>Sipoufo Djiodom Loïc Yvan</td>
                        </tr>
                        <tr>
                            <td>Number: </td>
                            <td>695914926</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td>Cameroun, Douala, Cite des palmier</td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-success btn-icon-split text-center" style="margin-top:10px;">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Enabled</span>
                    </a>
                </div>
            </div>
        </div>


        
        <!-- <div class="col-md-6 col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-danger">
                    <h6 class="m-0 font-weight-bold text-white">Sipoufo Yvan</h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-profile rounded-circle w-75" src="/img/undraw_profile.svg" />
                    <hr /> 
                    <table>
                        <tr>
                            <td>Nom : </td>
                            <td>Sipoufo Djiodom Loïc Yvan</td>
                        </tr>
                        <tr>
                            <td>Number: </td>
                            <td>695914926</td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td>Cameroun, Douala, Cite des palmier</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Activate</span>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> -->
    </div> 

@stop