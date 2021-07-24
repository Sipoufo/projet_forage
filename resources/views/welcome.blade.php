<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WebForage - Sign in </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">
    <style>
    .displayError{
        color : red;
        font-size: 20px;
    }
    </style>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                @if(Session::has('position'))
                
                        <div class="alert alert-danger alert-dismissible fade show">
                            <i class="fas fa-exclamation-triangle"></i>
                            {{ Session::get('position') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                    
                @endif

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign In</h1>

                                        @if(Session::has('message'))
                                            <span class="displayError">{{ Session::get('message') }}</span>
                                        @endif

                                    </div>
                                    <form action="/login" method="post" class="user">
                                        @csrf

                                        <div class="form-group mt-3">
                                            <input type="number" name="phone" class="form-control form-control-user" placeholder="Phone number" value="{{ old('phone') }}" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" value="{{ old('password') }}" required/>
                                        </div>
                                        
                                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-solid btn-block"/>

                                        <hr>
                                        
                                        <p style="font-size:20px;"><b><i class="fas fa-exclamation"></i> Important : If it is your fisrt time to sign in, you have to accept location in order to gain access to site.</b></p>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/forgot_password">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


