<?php
session_start();
include('config.php'); // Ensure this file contains your database connection details

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and validate presence
    $mail = $_POST['mail'] ?? null;
    $pass = $_POST['pass'] ?? null;

    if (!$mail || !$pass) {
        $error_message = 'Please enter both email and password.';
    } else {
        $query = "SELECT renterid, fullname, username, mail, pass FROM rentersignup WHERE mail = ?";
        $stmt = $con->prepare($query);

        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("s", $mail);

            // Execute query
            $stmt->execute();

            // Store result
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                // Bind result variables
                $stmt->bind_result($renterid, $fullname, $username, $mail, $hashedPass);
                $stmt->fetch();

                // Verify password
                if (password_verify($pass, $hashedPass)) {
                    // Store session variables
                    $_SESSION['renterid'] = $renterid;
                    $_SESSION['fullname'] = $fullname;
                    $_SESSION['username'] = $username;
                    $_SESSION['mail'] = $mail;

                    // Redirect to renterpage.php
                    header("Location: renterpage.php");
                    exit();
                } else {
                    $error_message = 'Invalid password.';
                }
            } else {
                $error_message = 'No user found with the given email.';
            }

            // Close statement
            $stmt->close();
        } else {
            $error_message = 'Failed to prepare the SQL statement: ' . $con->error;
        }
    }

    // Close connection
    $con->close();
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
    <link rel="stylesheet" href="renterstyle.css" />
    <style>
        .error-box {
            border: 1px solid red;
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
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
        <form method="POST" action="#" class="sign-in-form">
        <h2 class="title">Sign in</h2>
        <?php if ($error_message): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="mail" placeholder="Email" required />
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" placeholder="Password" required />
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
                <input type="text" id="username" name="username" placeholder="user Name" />
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
        $username = $_POST['username'];
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
        $query = "INSERT INTO rentersignup (username, mail, pass) VALUES (?, ?, ?)";
        $stmt = $con->prepare($query);
    
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("sss", $username, $mail, $hashedPass);
    
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
          var username = document.getElementById("username").value;
          var mail = document.getElementById("mail").value;
          var pass = document.getElementById("pass").value;
          var confirmPassword = document.getElementById("confirmPassword").value;

          var usernameRegex = /^[a-zA-Z\s]+$/;
          var mailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          var pass = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;

          if (!username.match(usernameRegex)) {
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
