<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Material -->
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
        <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->

        <!-- Box icons -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- Link css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/client.css') }}">
    </head>
    <body id="body_pd">
        <header class="header" id="header">
            <div class="header_toggle" id="header-pos">
                <!-- <box-icon name='menu'></box-icon> -->
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            
            <div class="header_notification">
                <section class="notification_tools">
                    <!-- <i class='bx bx-bell'>
                        <i class='bx bx-radio-circle bx-burst radio_circle_position' style='color:#ffe200'></i>
                        <i class='bx bxs-circle circle_position' style='color:#ffe200'></i>
                    </i> -->
                    <span>Christian Kepya</span>
                </section>

                <section>
                    <div class="header_img">
                        <img src="{{ URL::asset('img/profil.png') }}" alt="" id="profileUser">
                    </div>
                    <section class="hide_menu_account" id="setting">
                        <a href="#" class="show_menu_account_detail user">Christian Kepya</a>
                        <a href="#" class="show_menu_account_detail"><i class='bx bx-user'></i> Profile Setting</a>
                        <a href="#" class="show_menu_account_detail"><i class='bx bx-log-out'></i> Log out</a>
                    </section>

                </section>
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <i class='bx bx-layer nav_logo-icon'></i>
                        <span class="nav_logo-name">
                            Christian Kepya
                        </span>
                    </a>

                    <div class="nav_list">
                        <a href="/home" class="nav_link active">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Home</span>
                        </a>

                        <a href="/user" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">User</span>
                        </a>
                        
                        <a href="/invoice" class="nav_link">
                            <i class='fas fa-file-invoice-dollar nav_icon'></i>
                            <span class="nav_name">Invoice</span>
                        </a>
                        
                        <a href="/receipt" class="nav_link">
                            <i class='fas fa-receipt nav_icon'></i>
                            <span class="nav_name">Receipt</span>
                        </a>

                        <a href="/message" class="nav_link">
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
        </div>

            @yield('main')
