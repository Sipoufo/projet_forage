@extends('admin.layouts.skeleton')
@section('title', 'Add product')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add</h1>
</div>

<div class="row">
    <!-- Detail Part -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header">
                Add product
            </div>
            <div class="card-body">
                <div class="col-md-11 col-lg-7 offset-md-1 offset-lg-2">
                    <div class="p-5">
                        <form method="post" action="" class="user">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Enter your product name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user"
                                    placeholder="Quantity">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user"
                                    placeholder="Unit price">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user"
                                    placeholder="Enter your image">
                            </div>
                            <button href="#" class="btn btn-primary btn-user btn-block" type="submit">
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