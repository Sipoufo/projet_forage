@extends('Client.layout.default')
    @section('title', 'Bills')
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

                    <a href="/user" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">User</span>
                    </a>
                    
                    <a href="/invoice" class="nav_link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Bills">
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
        