@extends('admin.layouts.skeleton')
@section('title', 'Add a Customer')
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
        <li class="nav-item ">
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
        <li class="nav-item ">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Stock</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Stock Information</h6>
                    <a class="collapse-item" href="/admin/products_types">Products type</a>
                    <a class="collapse-item" href="/admin/manage_products">Manage products</a>
                    <a class="collapse-item" href="/admin/stock/1">Stock</a>
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
        <li class="nav-item active">
            <a class="nav-link collapsed" href="/admin/clauses">
            <i class="fas fa-list"></i>
            <span>Confidentiality Clauses</span>
            </a>
        </li>

        <!-- Nav Item - profile -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/profile">
            <i class="fas fa-user"></i>
            <span>Profile</span>
            </a>
        </li>

        <!-- Nav Item - Finances -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/finances">
            <i class="fas fa-wallet"></i>
            <span>Finances</span>
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

    <div class="container">
      <h1 class="text-primary text-center" style="margin-top:20px;">Legal notice & privacy policy</h1>
    
      <hr>
      <br>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <h4>Website editor  :</h4>
          <p>
            Editorial manager: Aboutir Emploi - Jean-Marc BOUTINEAU
            <br>
            Address : 303 Avenue Jean Guiton - 17000 La Rochelle - France
            <br>
            Telephone : 05 46 30 63 06
            <br>
            E-mail : <a href="mailto:#">contact@aboutiremploi.fr</a>
          </p>
        </div>
        <div class="col-xs-12 col-md-4">
          <h4>Hosting :</h4>
          <p>
            Host: OVH France
            <br>
            Address: 2 rue Kellermann - 59100 ROUBAIX
            <br>
            Website: <a href="#">www.ovh.com/fr</a>
          </p>
        </div>
        <div class="col-xs-12 col-md-4">
          <h4> Development : </h4>
          <p>
            Montgomery Ouest
            <br>
            Address: 8 rue de la Bonette - 17000 LA ROCHELLE
            <br>
            Website : <a href="#">www.montgomery-ouest.com</a>
          </p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <h2 class="text-primary"> Legal Notice </h2>
          <br>
          <p>
            Please read carefully the various terms and conditions of the legal notices for use of this site before browsing its pages. By connecting to this site, you accept without reservation the present terms and conditions in accordance with article n°6 of the Law n°2004-575 of 21 June 2004 for confidence in the digital economy.
          </p>  
          <br>
          <h4>Terms of use</h4>
          This site (www.aboutiremploi.fr) is offered in different web languages (HTML, HTML5, Javascript, CSS, etc...) for a better comfort of use and a more pleasant graphics, we recommend you to use modern browsers like Safari, Firefox, Google Chrome, etc...
          The legal notices were generated on the Legal Notice Generator site, offered by Welye.

          Aboutir Emploi uses all the means at its disposal to ensure reliable information and a reliable update of its websites. However, errors or omissions may occur. The Internet user must therefore ensure that the information is accurate and report any changes to the site that he or she considers useful. Aboutir Emploi is in no way responsible for the use made of this information, and for any direct or indirect prejudice that may result from it.
        </div>
        <div class="col-xs-12 col-md-6">
          <h2 class="text-primary"> Privacy Policy</h2>
          <br>
          <p>
            In the context of the implementation of the new Regulation on the Protection of Personal Data (RGPD) from 25 May 2018, the companies ABOUTIR EMPLOI and TRANSPARENCE RH wish to present its personal data privacy policy.
            This document is available on our website www.aboutiremploi.fr or on request at: acettrgpd@orange.fr
          </p>
          <br>
          <h4>Our commitment to privacy</h4>
          We do everything possible to protect your data, and we are committed to ensuring the highest level of security and confidentiality, in accordance with the applicable French and European regulations (Regulation 2016/679/EU and Law n° 78-17 of 6 January 1978).
          In this document, we present our policy on the information, collection and processing of your personal data and the procedures for accessing, modifying, deleting and portability of your data.
        </div>
      </div>
      <br>
      <br>
    </div>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>

@stop

