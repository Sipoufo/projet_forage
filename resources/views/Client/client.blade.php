@extends('Client.layout.default')
    @section('title', 'Dashboard')
        @section('main')
            <h1>                            
                <i class='bx bx-grid-alt'></i>
                <span class="nav_name">Dashboard</span>
            </h1>
            <section class="card-deck card_group">
                <section class="card single_card">
                    <section class="noti">
                        <div class="user_i"><i class='bx bx-receipt bx_user'></i></div>
                        <div class="forage" style="text-align: right;align-items: flex-end;align-content: flex-end;">
                            <div>Total Factures</div>
                            <div style="font-size: 12px;">0</div>
                        </div>
                    </section>
                </section>
                <section class="card single_card">
                    <section class="noti">
                        <div class="user_i"><i class='bx bx-money bx_user'></i></div>
                        <div class="forage" style="text-align: right;align-items: flex-end;align-content: flex-end;">
                            <div>Total Factures payées</div>
                            <div style="font-size: 12px;">0</div>
                        </div>
                    </section>
                </section>
                <section class="card single_card">
                    <section class="noti">
                        <div class="user_i"><i class="fas fa-hand-holding-usd bx_user"></i></div>
                        <div class="forage" style="text-align: right;align-items: flex-end;align-content: flex-end;">
                            <div>Total factures non payées</div>
                            <div style="font-size: 12px;">0</div>
                        </div>
                    </section>
                </section>
                <section class="card single_card">
                    <section class="noti">
                        <div class="user_i"><i class="fas fa-clipboard-list bx_user"></i></div>
                        <div class="forage" style="text-align: right;align-items: flex-end;align-content: flex-end;">
                            <div>Total Prets demandés</div>
                            <div style="font-size: 12px;">0</div>
                        </div>
                    </section>
                </section>
            </section>

            <section class="card-deck card_information_group mt-4">
                <section class="card card_hide_border">
                    <section class="card-header">Facture en cours de Paiement</section>
                    <section class="card-body">
                        liste des facture qui ne sont pa encore totalement payées avec des liens pour payer cela
                    </section>
                </section>

                <section class="card card_hide_border">
                    <section class="card-header">Notice Board</section>
                    <section class="card-body">
                        Liste des actualités sur son compte
                    </section>
                </section>
            </section>

            <section class="card-deck card_information_group mt-4">
                <section class="card card_hide_border">
                    <section class="card-header">Information sur son compte</section>
                    <section class="card-body">
                        <p>Nom Propriétaire : Christian kepya</p>
                        <p>Numero Compteur : UIX2024</p>
                        <p>Prix de souscription : 50000f</p>
                        <p>Date : 25 juin 2019</p>
                        <p>Nom du propriétaire : Sipof</p>
                    </section>
                </section>

                <section class="card card_hide_border">
                    <section class="card-header">Liste des services disponibles</section>
                    <section class="card-body">
                        
                    </section>
                </section>
            </section>

            <section class="card card_hide_border">
                <section class="card-header">Envoyez un message au propriétaire</section>
                <section class="card-body">
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    <button class="btn btn-succes mt-2">
                        envoyer
                    </button>
                </section>
            </section>
            <!-- 
            <button class="mdc-button foo-button">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">Button</span>
            </button> -->    
@stop
        