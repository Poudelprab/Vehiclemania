


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="renterstyle.css" />

    <style>
      .hidden {
          display: none;
      }
      .input-field {
          margin-bottom: 15px;
      }
  </style>
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method = "POST" action = "#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "Username" placeholder="Username" />
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
         
          <form name="signUpForm" action="#" onsubmit="return Formvalidate()" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" id="fullname" name="fullname" placeholder="Full Name" />
            </div>
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" id="mail" name="mail" placeholder="Email" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" id="pass" name="pass" placeholder="Password" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" />
            </div>
            <input type="submit" class="btn" name="button" value="Sign up" />
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
            <h1> "Your Journey, Our Wheels."</h1>
            <button class="btn transparent" id="sign-up-btn">
              Sign up</h4>
            </button>
          </div>
          <img src="images/renter sitting.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>"Rent out your vehicle ?</h1>
            
            <br/>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/renter working.png" class="image" alt="" />
        </div>
      </div>
    </div>
    
    <?php
    include('config.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and validate input
        $fullname = $_POST['fullname'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $confirmPassword = $_POST['confirmPassword'];
    
        // Check if passwords match
        if ($pass !== $confirmPassword) {
            echo 'Passwords do not match.';
            exit;
        }
    
        // Encrypt password
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    
        // Prepare SQL query
        $query = "INSERT INTO rentersignup (fullname, mail, pass) VALUES (?, ?, ?)";
        $stmt = $con->prepare($query);
    
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("sss", $fullname, $mail, $hashedPass);
    
            // Execute query and check result
            if ($stmt->execute()) {
                echo 'Record has been entered successfully';
            } else {
                echo 'There was an error: ' . $stmt->error;
            }
    
            // Close statement
            $stmt->close();
        } else {
            echo 'Failed to prepare the SQL statement';
        }
    
        // Close connection
        $con->close();
    }
    ?>

    <script>
      function validateForm() {
          var fullname = document.getElementById("fullname").value;
          var mail = document.getElementById("mail").value;
          var pass = document.getElementById("pass").value;
          var confirmPassword = document.getElementById("confirmPassword").value;

          var fullnameRegex = /^[a-zA-Z\s]+$/;
          var mailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          var pass = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;

          if (!fullname.match(fullnameRegex)) {
              alert("Username should contain only letters.");
              return false;
          }

          if (!mail.match(mailRegex)) {
              alert("Please enter a valid email address.");
              return false;
          }

          if (!pass.match(passRegex)) {
              alert("Password should contain at least one capital letter, one symbol, one number, and be at least 8 characters long.");
              return false;
          }

          if (pass !== confirmPassword) {
              alert("Passwords do not match.");
              return false;
          }

          return true;
      }
  </script>
  

    <script src="renterapp.js"></script>
  </body>
</html>
