@extends('Client.layout.default')
    @section('title', 'Clauses')
    @section('nav')
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
            <a class="nav-link" href="/home">
            <i class="fas fa-home"></i>
            <span>Home</span></a
            >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Informations</div>

        <!-- Nav Item - consumption -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/consumption" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consumption">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Consumption</span>
            </a>
        </li>

        <!-- Nav Item - Invoice -->
        <li class="nav-item ">
            <a class="nav-link collapsed"  href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices">
                <i class="fas fa-money-bill-alt"></i>
                <span>Invoice</span>
            </a>
            <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Invoices</h6>
                    <a class="collapse-item" href="/invoices_paid" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices paid">Invoices Paid</a>
                    <a class="collapse-item" href="/unpaid_invoices" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Invoices unpaid">Unpaid Invoices</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/tchat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification">
            <i class="fas fa-file-archive"></i>
            <span>Notification</span>
            </a>
        </li>

        <!-- Nav Item - Profile Setting -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/user" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profile Setting</span>
            </a>
        </li>

        <!-- Nav Item - Policy -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="/clauses" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
            <i class="fas fa-list"></i>
            <span>Confidentiality Clauses</span>
            </a>
        </li>

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log Out" href="#" data-toggle="modal" data-target="#logoutModal">
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
        

