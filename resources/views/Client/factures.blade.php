@extends('Client.layout.default')
    @section('title', 'facture')
        @section('main')
            <h1>                            
                <i class='bx bx-grid-alt'></i>
                <span class="nav_name">Invoice</span>
            </h1>

            <!-- Default Card Example -->
            <div class="card mb-4 containter-fluid">
                <div class="card-header row">
                    <div class="col-md-12 col-lg-2">
                        Invoice of 15/05/2021
                    </div>
                    <a href="#myModal" class="btn btn-info btn-icon-split col-md-12 col-lg-2 offset-lg-5 mr-3" role="button" class="btn btn-lg btn-primary" data-toggle="modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">See more</span>
                    </a>
                    <a href="#" class="btn btn-success btn-icon-split col-md-12 col-lg-2 offset-lg-0">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Classified</span>
                     </a>
                </div>
                <div class="card-body row">
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Index (New - Old)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">543 - 210</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Consumption M<sup>3</sup></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">60 m<sup>3</sup></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Amount paid</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">12000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            total amount</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">12000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-4 containter-fluid">
                <div class="card-header row bg-danger">
                    <div class="col-md-12 col-lg-2 text-white">
                        Invoice of 15/05/2021
                    </div>
                    <a href="#" class="btn btn-info col-md-12 col-lg-2 offset-lg-3 mr-3" >
                        <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">See more</span>
                    </a>
                    <a href="#" class="btn btn-warning col-md-12 col-lg-2 offset-lg-0 mr-3">
                        <span class="icon text-white-50">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Advanced</span>
                    </a>
                    <a href="#" class="btn btn-secondary col-md-12 col-lg-2 offset-lg-0">
                        <span class="icon text-white-50">
                            <i class="fas fa-donate"></i>
                        </span>
                        <span class="text">Paid</span>
                     </a>
                </div>
                <div class="card-body row">
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Index (New - Old)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">543 - 210</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Consumption M<sup>3</sup></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">60 m<sup>3</sup></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Amount paid</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            total amount</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">12000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            
@stop
        