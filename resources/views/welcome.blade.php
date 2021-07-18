<?php 
    if(isset($_POST['submit'])) {

      $phone = htmlspecialchars($_POST['phone']);
      $password = md5(sha1(htmlspecialchars($_POST['password'])));

      $url = "http://localhost:4000/login";
      $data = array(
          'phone' => $phone,
          'password' => $password,
      );
      $data_json = json_encode($data);
      $headers = [];

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADERFUNCTION,
          function ($curl, $header) use (&$headers) {
              $len = strlen($header);
              $header = explode(':', $header, 2);
              if (count($header) < 2) // ignore invalid headers
                  return $len;

              $headers[strtolower(trim($header[0]))][] = trim($header[1]);

              return $len;
          }
      );
      $response  = curl_exec($ch);
      curl_close($ch); 

      $informations = json_decode($response, true);

      if($informations['status'] == 200){
        
          $userdata = $informations['result'];
          $cookie = $headers['set-cookie'];
          $tokentab = explode(';', $cookie[0]);
          $expire = $tokentab[1];
          $expiretab =  explode('=', $expire);
          $timeout  = $expiretab[1];

          if($userdata['profile'] == 'admin'){ //It's an administrator

            session_start();

            $_SESSION['id'] = $userdata['_id'];

            setcookie('token', $cookie[0],time() + $timeout,null,null,false,true);

            echo "<script>window.location.href = '/admin/home'</script>";

          }else{ //It's a client

            $location = $userdata['localisation'];

            if(!empty($location['longitude']) && !empty($location['latitude'])){

              session_start();

              $_SESSION['id'] = $userdata['_id'];

              setcookie('token', $cookie[0],time() + $timeout,null,null,false,true);

              echo "<script>window.location.href = '/home'</script>";  

            }else{
              echo "<script>window.location.href = '/preview/clauses'</script>";
            }
          }
      }else{
        $err  = $informations['error'];
      }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <style>
    .displayError{
        color : red;
        font-size: 15px;
    }
    </style>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
      
          <form action="" method="post" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <br>
            <?php 
              if(isset($err)){
            ?>
              <span class="displayError"><?= $err?></span>
              <br>
            <?php } ?>

            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="number" name="phone" placeholder="Phone number" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div>
            <input type="submit" name="submit" value="Login" class="btn solid"/>
            <!-- <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
          <!-- <form action="/home" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Number" />
            </div>
            <div class="input-field">
              <i class="fas  fa-location-arrow"></i>
              <input type="text" placeholder="Location" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <input type="submit" class="btn" value="Home" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form> -->
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Hello Web Forage </h3>
            <p>
              The work of thought is like drilling a well; the water is cloudy at first, then it becomes clear.
            </p>
            <br>
            <p style="font-size:20px;"><b><i class="fas fa-exclamation"></i> Important : While login, you have to accept location in order to gain access to site.</b></p>
            <!-- <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button> -->
          </div>
          <img src="/images/i2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>If you don't have the compte</h3>
            <p>
              register to take advantage of all our services.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="/images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>
