<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="final_project.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <!-- START NAV -->


    <!-- END NAV -->

    <!-- START WELCOME SECTION -->
    <div class="bg-image"></div>
    <div class="bg-text">
      <h1>Student Information System</h1>
    </div>
    <!-- END WELCOME SECTION -->
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="user_signup()"><strong>Signup</strong></button>
            <button type="button" class="toggle-btn" onclick="user_login()"><strong>Login</strong></button>
        </div>
        <form id="user_signup" class="input-group" action="signup.php" method="get">
          Username: <input type="text" name="name"  id="name" class="input-field" placeholder="Username" required> <br>
          Email: <input type="email" name="email" id="email" class="input-field" placeholder="Email" required> <br>
          Password: <input type="password" name="password" id="password" class="input-field" placeholder="Password" required> <br>
          <button type="submit" class="signup-submit-btn"> <a href="dashboard.html">Signup</a></button>
      <div class="login">
          <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
        </form>
        <form id="user_login" class="input-group" action="login.php" method="get">
          Username: <input type="text" name="name"  id="name" class="input-field" placeholder="Username" required> <br>
          Email: <input type="email" name="email" id="email" class="input-field" placeholder="Email" required> <br>
          Password: <input type="password" name="password" id="password" class="input-field" placeholder="Password" required> <br>
          <button type="submit" class="login-submit-btn"> <a href="dashboard">Login</a></button>
      <div class="login">
          <p>Don't have an account? <a href="login.php">Signup</a></p>
      </div>
      </form>
    </div>

    <script>
        var x = document.getElementById("user_signup");
        var y = document.getElementById("user_login");
        var z = document.getElementById("btn");
        
        function user_login(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function user_signup(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>

  </body>
</html>