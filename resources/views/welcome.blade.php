<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Web-Forage</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="cont">
          <div class="form sign-in">
            <h2>Sign In</h2>
            <form>
              <label>
                <span>Number</span>
                <input type="text" name="number"/>
              </label>
              <label>
                <span>Password</span>
                <input type="password" name="pwd"/>
              </label>
              <button class="submit" type="submit">Sing In</button>
              <p class="forgot-pass">Forgot Password</p>
            </form>
            <div class="social-media">
              <ul>
                <li><img src="/images/icons/facebook.png" alt=""></li>
                <li><img src="/images/icons/twiter.png" alt=""></li>
                <li><img src="/images/icons/whatsapp.png" alt=""></li>
              </ul>
            </div>
          </div>
          <div class="sub-cont">
            <div class="img">
              <div class="img-text m-up">
                <h2>Register Here?</h2>
                <p>If you don't have account</p>
              </div>
              <div class="img-text m-in">
                <h2>One of us?</h2>
                <p>if you already has an account, just sign in</p>
              </div>
              <div class="img-btn">
                <span class="m-up">Sign Up</span>
                <span class="m-in">Sign In</span>
              </div>
            </div>
            <div class="form sign-up">
              <h2>Sign Up</h2>
              <form action="">
                <label>
                  <span>First_name</span>
                  <input type="text" name="fname" placeholder="Please enter your first name" />
                </label>
                <label>
                  <span>Last_name</span>
                  <input type="text" name="lname" placeholder="Please enter your last name" />
                </label>
                <label>
                  <span>Tel</span>
                  <input type="text" name="Tel" placeholder="Please enter your phone" />
                </label>
                <label>
                  <span>Password</span>
                  <input type="password" name="pwd" />
                </label>
                <label>
                  <span>confirm Password</span>
                  <input type="password" name="pwd" />
                </label>
                <button type="submit" class="submit">sign Up</button>
              </form>
            </div>
          </div>
        </div>
        <script type="text/javascript" src="/js/script.js"></script>
        <script src="/js/jquery-3.6.0.min.js"></script>
    </body>
</html>
