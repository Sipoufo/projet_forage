@extends('admin.layouts.skeleton')
@section('title', 'Bill')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        Add an Invoice
    </div>
    <div class="card-body">
        <div class="container">
            <form method="post" action="/admin/facture" class="col-lg-8 offset-lg-2">
                    <?php 
						if (!empty($_error)) {
							echo '<div class="text-danger">'.$error.'</div>';
						}
					?>
                {{csrf_field()}}
                <div class="form-group mb-3">
                    <div class="input-group">Personnel</div>
        
                    <select name="idClient" id="idClient">
                        <?php 
                            foreach($users as $p) echo '<option value='.$p[0].'>'.$p[1].'</option>';
                        ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">New index</div>
                    <input type="number" class="form-control" placeholder="new index" id="newIndex" name="newIndex" required>                  
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">Last index</div>
                    <input type="number" class="form-control" placeholder="last index" id="lastIndex" name="lastIndex" required>                  
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">Price of KW</div>
                    <input type="number" class="form-control" placeholder="price of kilo wath" id="priceKW" name="priceKW" required>                  
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">Limit date of paiement</div>
                    <input type="date" class="form-control" id="dataLimitePaid" name="dataLimitePaid" placeholder="limit date of payement" required>                  
                </div>
            
                <div class="row float-right">
                    <a href="#">
                        <button class="btn btn-primary" name="connect" type="submit">Register</button>
                    </a>
                    <a href="/admin/administrator">
                        <button class="btn btn-secondary ml-2" type="button">Cancel</button>
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@stop