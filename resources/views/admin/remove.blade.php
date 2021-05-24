@extends('admin.layouts.skeleton')
@section('title', 'Dashboard')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Remove</h1>
</div>

<div class="row">
    <!-- Detail Part -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header">
                Remove product
            </div>
            <div class="card-body">
                <div class="col-md-11 col-lg-7 offset-md-1 offset-lg-2">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group">
                                <select name="productName" class="form-control">
                                    <option value="tuyau">Tuyau</option>
                                    <option value="visse">Visse</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user"
                                    placeholder="Quantity">
                            </div>
                            <button href="#" class="btn btn-primary btn-user btn-block">
                                Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop