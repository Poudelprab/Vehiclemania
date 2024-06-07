


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

          <form name="signUpForm" action="#" onsubmit="return validateForm()" method="post" class="sign-up-form">
        <h2 class="title">Sign up</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" id="username" name="username" placeholder="Full Name" />
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Email" />
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" />
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" />
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and validate input
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo 'Passwords do not match.';
        exit;
    }

    // Encrypt password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL query
    $query = "INSERT INTO signup (username, email, password) VALUES (?, ?, ?)";
    $stmt = $con->prepare($query);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

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
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            var usernameRegex = /^[a-zA-Z\s]+$/;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;

            if (!username.match(usernameRegex)) {
                alert("Username should contain only letters.");
                return false;
            }

            if (!email.match(emailRegex)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (!password.match(passwordRegex)) {
                alert("Password should contain at least one capital letter, one symbol, one number, and be at least 8 characters long.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }
    </script>

  
    <script src="loginapp.js"></script>
  </body>
</html>
