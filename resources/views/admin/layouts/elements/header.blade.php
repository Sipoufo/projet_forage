<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Forage - @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/admin_invoice.css" rel="stylesheet">

    <!-- Profile assets -->
    
    <!-- Profile assets -->

    <script src="/vendor/jquery/jquery.min.js"></script>

    <script src="/js/admin_invoice.js"></script>


    <!-- Page level plugins -->
    <script src="{{asset('js/chart.js/Chart.min.js')}}"></script>


</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
        >
        <!-- Sidebar - Brand -->
        <a
            class="sidebar-brand d-flex align-items-center justify-content-center"
            href="index.html"
        >
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="far fa-grin-wink" style="font-size: 40px"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Forage Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        @yield('nav')


        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class=" navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button
                    id="sidebarToggleTop"
                    class="btn btn-link d-md-none rounded-circle mr-3"
                    >
                    <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="alertsDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div
                        class="
                            dropdown-list dropdown-menu dropdown-menu-right
                            shadow
                            animated--grow-in
                        "
                        aria-labelledby="alertsDropdown"
                        >
                        <h6 class="dropdown-header">Alerts Center</h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                            </div>
                            <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold"
                                >A new monthly report is ready to download!</span
                            >
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                            </div>
                            <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                            </div>
                            <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for
                            your account.
                            </div>
                        </a>
                        <a
                            class="dropdown-item text-center small text-gray-500"
                            href="#"
                            >Show All Alerts</a
                        >
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="messagesDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div
                        class="
                            dropdown-list dropdown-menu dropdown-menu-right
                            shadow
                            animated--grow-in
                        "
                        aria-labelledby="messagesDropdown"
                        >
                        <h6 class="dropdown-header">Message Center</h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                            <img
                                class="rounded-circle"
                                src="/img/undraw_profile_1.svg"
                                alt="..."
                            />
                            <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                            <div class="text-truncate">
                                Hi there! I am wondering if you can help me with a
                                problem I've been having.
                            </div>
                            <div class="small text-gray-500">Emily Fowler</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                            <img
                                class="rounded-circle"
                                src="/img/undraw_profile_2.svg"
                                alt="..."
                            />
                            <div class="status-indicator"></div>
                            </div>
                            <div>
                            <div class="text-truncate">
                                I have the photos that you ordered last month, how would
                                you like them sent to you?
                            </div>
                            <div class="small text-gray-500">Jae Chun</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                            <img
                                class="rounded-circle"
                                src="/img/undraw_profile_3.svg"
                                alt="..."
                            />
                            <div class="status-indicator bg-warning"></div>
                            </div>
                            <div>
                            <div class="text-truncate">
                                Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!
                            </div>
                            <div class="small text-gray-500">Morgan Alvarez</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                            <img
                                class="rounded-circle"
                                src="/img/undraw_profile_1.svg"
                                alt="..."
                            />
                            <div class="status-indicator bg-success"></div>
                            </div>
                            <div>
                            <div class="text-truncate">
                                Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they
                                aren't good...
                            </div>
                            <div class="small text-gray-500">Chicken the Dog</div>
                            </div>
                        </a>
                        <a
                            class="dropdown-item text-center small text-gray-500"
                            href="#"
                            >Read More Messages</a
                        >
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="userDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >

                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            @if(Session::has('name'))
                                {{ Session::get('name') }}
                            @else
                                {{ _('UserXX') }}
                            @endif
                        </span>

                            @if(Session::has('photo'))

                                @php
                                    $photo = url('storage/'.Session::get('photo'))
                                @endphp
                                <img
                                    class="img-profile rounded-circle"
                                    src="{{ $photo }}"
                                />
                            @else
                                @php
                                    $photo = '/img/undraw_profile.svg'
                                @endphp
                                <img
                                    class="img-profile rounded-circle"
                                    src="{{ $photo }}"
                                />
                            @endif

                        
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=" dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" >
                        <a class="dropdown-item" href="/admin/profile">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">
                            <i
                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                            ></i>
                            Logout
                        </a>
                        </div>
                    </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->