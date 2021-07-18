@extends('admin.layouts.skeleton')
@section('title', 'Add an Administrator')
<style>
    .displayError{
        color : red;
        font-size: 15px;
    }
</style>
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
        <li class="nav-item active">
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
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Stock</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Stock Information</h6>
                    <a class="collapse-item" href="/admin/add">Add</a>
                    <a class="collapse-item" href="/admin/remove">Remove</a>
                    <a class="collapse-item" href="/admin/stock">Stock</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Payment -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/clauses">
            <i class="fas fa-list"></i>
            <span>Confidentiality Clauses</span>
            </a>
        </li>

        <!-- Nav Item - Log out -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
            </a>
        </li>
@stop
@section('content')

<div class="card mb-4">
    <div class="card-header">
        Add an Administrator
    </div>
    <div class="card-body">
        <div class="container">
            <!-- form validation -->

            <?php 

                if (isset($_POST['submit'])){

                    //variables validation
                    $phoneOk = $passwordOk = $confirmpasswordOk = '';
                    $phoneErr = $passwordErr = $confirmpasswordErr = $err = '';
                    // $phoneOk = $passwordOk = $confirmpasswordOk = $uploadOk = '';
                   // $phoneErr = $passwordErr = $confirmpasswordErr = $uploadErr = $err = '';

                    $firstname = htmlspecialchars($_POST['firstname']);
                    $lastname = htmlspecialchars($_POST['lastname']);
                    $birthday = htmlspecialchars($_POST['birthdate']);
                    $email = htmlspecialchars($_POST['email']);
                    $phone = htmlspecialchars($_POST['phone']);
                    $password = htmlspecialchars($_POST['password']);
                    $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
                    

                    if (strlen($phone) > 9 || strlen($phone) < 9){
                        $phoneErr = "Nine digit numbers expected";
                    }else{
                        $phoneOk = "Ok";
                    }

                    if (preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,15}$/',$password)){
                        $passwordOk = "Ok";
                    }else{
                        $passwordErr = "Between 8 and 15 characters - Minimum one uppercase letter and one number digit - Minimum one special character !@#$%^&*-";
                    }

                    if ($password == $confirmpassword){
                        $confirmpasswordOk = "Ok";
                    }else{
                        $confirmpasswordErr = "Enter the same password";
                    }

                    // if(isset($_FILES["photo"]["name"])){

                    //     if ($_FILES["photo"]["name"] != ''){

                    //         define ('SITE_ROOT', realpath(dirname(__FILE__)));

                    //         $target_dir = "\uploads\administrators";
                    //         $target_file = basename($_FILES["photo"]["name"]);
                    //         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    //         $check = getimagesize($_FILES["photo"]["tmp_name"]);
    
                            // Check if image file is a actual image or fake image
                            // if($check == false) {
                            //     $uploadErr = "File is not an image.";  
                            // }else{
                                //Check the file type
                                // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                                //     $uploadErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                // }else{
                                    // Check file size
                                    // if ($_FILES["photo"]["size"] > 500000) {
                                    //     $uploadErr = "Files over 500Ko are not accepted";
                                    // }else{
                                        //if everything is Ok, upload the file
                                        // if (move_uploaded_file($_FILES["photo"]["tmp_name"], SITE_ROOT.$target_dir."\/".$target_file)) {
                                        //     $uploadOk = "Ok";
                                        //     $image = $target_dir.'\/'.$target_file;
                                        // } else {
                                        //     $uploadErr = "Sorry, there was an error uploading your file.";
                                        // }
                            //         }
                            //     }
                            // }
                        // }else{
                        //     $image = '';
                        // }

                    // }

                    // if ($phoneErr || $passwordErr || $confirmpasswordErr || $uploadErr){
                    //     $err = "err";
                    // }

                    if (!empty($phoneErr) || !empty($passwordErr) || !empty($confirmpasswordErr)){
                        $err = "err";
                    }
                    
                    //if($phoneOk == "Ok" && $passwordOk == "Ok" && $confirmpasswordOk == "Ok" && $uploadOk == "Ok") {
                    if($phoneOk == "Ok" && $passwordOk == "Ok" && $confirmpasswordOk == "Ok") {

                       
                        $password = md5(sha1($password));

                        $url = "http://localhost:4000/admin/auth/register";
                        $data = array(
                            'name' => $firstname.' '.$lastname,
                            'birthday' => $birthday,
                            'phone' => $phone,
                            'password' => $password,
                            'email' => $email,
                        );
                        $data_json = json_encode($data);
            
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $response  = curl_exec($ch);
                        curl_close($ch); 

                        $response = json_decode($response);
                        //$informations = $response->result;
                        //$location = $informations->localisation;
                        print_r($response);
                        // echo $response->status;
                        // print_r($informations);
                        // echo $informations->profile;

                        //echo $response->status.' '.$response->result->profile.' '.$response->result->localisation->longitude;
                        // if ($response->status == 200){
                        //     $messageOK = "Action Done Successfully";
                        //     $firstname = $lastname = $birthday = $email = $phone = $password = $confirmpassword = "";
                        // }else{
                        //     $messageErr = ucfirst($response->error);
                        // }
                    }
                }
            ?>
            
           <?php if (isset($messageOK)){?>
                <div class="alert alert-success alert-dismissible fade show"><i class="fas fa-check-circle"></i> <?= $messageOK ?> 
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
           <?php } ?>
           <?php if (isset($messageErr)){?>
                <div class="alert alert-danger alert-dismissible fade show"><i class="fas fa-exclamation-triangle"></i><?= $messageErr ?> 
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
           <?php } ?>
           
            <form method="post" action="" class="col-lg-8 offset-lg-2" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="first name" id="firstname" name="firstname" value="<?= isset($err)? $firstname : '' ?>" required>                          
                </div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-address-book'></i></span></div>
                    <input type="text" class="form-control" placeholder="last name" id="lastname" name="lastname" value="<?= isset($err)? $lastname : '' ?>" required>                       
                </div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-birthday-cake'></i></span></div>
                    <input type="date" class="form-control" id="birth_date" name="birthdate" value="<?= isset($err)? $birthday : '' ?>" required>                         
                </div>
                 
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase">@</span></div>
                    <input type="email" class="form-control" placeholder="email" name="email" id="email" value="<?= isset($err)? $email : '' ?>">                    
                </div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='fas fa-phone-volume'></i></span></div>
                    <input type="number" class="form-control" placeholder="phone number" id="phone" name="phone" value="<?= isset($err)? $phone : '' ?>" required>                
                </div>
                <div class="displayError"><?= isset($phoneErr) ? $phoneErr : ''?></div>
                  
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-lock'></i></span></div>
                    <input type="password" class="form-control" placeholder="Enter the password" id="password" name="password" value="<?= isset($err)? $password : '' ?>" required>                  
                </div>
                <div class="displayError"><?= isset($passwordErr) ? $passwordErr : ''?></div>
                
                <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-lock'></i></span></div>
                    <input type="password" class="form-control" placeholder="Confirm the password" id="confirmpassword" name="confirmpassword" value="<?= isset($err)? $confirmpassword : '' ?>" required>                  
                </div>
                <div class="displayError"><?= isset($confirmpasswordErr) ? $confirmpasswordErr : ''?></div>
               
                <!-- <div class="input-group mt-3">
                    <div class="input-group-prepend"><span class="input-group-text" aria-label="arobase"><i class='	fas fa-image'></i></span></div>
                    <input type="FILE" class="form-control" id="photo" name="photo">                  
                </div>
                <div class="displayError"><?= isset($uploadErr) ? $uploadErr : ''?></div> -->
                
                <div class="row float-right mt-3">
                    <a href="#">
                        <button class="btn btn-primary" name="submit" type="submit">Register</button>
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