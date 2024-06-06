


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method = "POST" action = "#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name = "email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name = "Password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
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
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Full Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Confirm password" />
            </div>
            <input type="submit" class="btn" name="buttonn" value="Sign up" />
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
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>New here ?</h1>
            <p>
              "Unlock Adventure: Where Every Mile Tells a Story."
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up</h4>
            </button>
          </div>
          <img src="images/login.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>One of us ?</h1>
            <p>
              "Discover Freedom, Explore Boundless Roads – Your Journey, Our Wheels."
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    
    <?php
       include('config.php');
       if(isset($_POST['buttonn']))
       {
        $username= $_POST['username'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
       // $password=$_POST['password'];
        //$encpassword=md5($password);
        $hassedpassword=password_hash($password,PASSWORD_DEFAULT);
        $query="insert into signup(username,email,password)values('$username','$email','$password')";
        $result=mysqli_query($con,$query);
        if($result)
        {
          echo'record have been entered sucessfully';

        }
        else{
          echo'There was an error';
        }
       }

       ?>
    <script>
  function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var usernameRegex = /^[a-zA-Z]+$/;
    var passwordRegex = /^[A-Z][a-zA-Z0-9]*$/;
    
    // Validate username
    if (!username.match(usernameRegex)) {
      alert("Username should contain only letters.");
      return false;
    }
    
    // Validate password
    if (!password.match(passwordRegex)) {
      alert("Password should start with a capital letter and can contain letters and digits only.");
      return false;
    }

    return true;
  }
</script>

    <script src="loginapp.js"></script>
  </body>
</html>
