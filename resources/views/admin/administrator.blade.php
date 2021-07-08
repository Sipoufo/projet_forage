@extends('admin.layouts.skeleton')
@section('title', 'Administrator')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Administrators</h1> 
        <a href="/admin/administrator/addAdministrator" class="btn btn-primary"> Add an administrator </a>
    </div>

    <div class="container">
      <table class="table table-striped table-light table-hover table-sm table-responsive-lg text-center">
        <thead style="background-color:#4e73df;color:white;">
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Registered_at</th>
            <th>Actions</th> 
          </tr>
        </thead>
        <tbody>
          <tr style="background-color:white;color:black;">
            <td>image.png</td>
            <td>Fenyom Bryan</td>
            <td>bryan@gmail.com</td>
            <td>698445628</td>
            <td>2021-07-08 16:01:30</td>
            <td>
            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>

            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
            </td>
          </tr>
          <tr style="background-color:white;color:black;">
            <td>image.png</td>
            <td>Sipoufo Loic Yvan</td>
            <td>popof@gmail.com</td>
            <td>672345628</td>
            <td>2021-07-08 16:01:30</td>
            <td>
            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>

            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
            </td>
          </tr>
          <tr style="background-color:white;color:black;">
            <td>image.png</td>
            <td>Kepya Christian</td>
            <td>christian@gmail.com</td>
            <td>690345628</td>
            <td>2021-07-08 16:01:30</td>
            <td>
            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>

            <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                <span class="icon">
                    <i class="fas fa-edit"></i>
                </span>
            </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
        

@stop