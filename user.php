<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="userpage.css" />
  <title>User-Vehiclemania</title>

     <!-- body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    } */
    /* .header, .footer { 
        background-color: #333;
        color: white;
        text-align: center;
        padding: 0.5em 0;
    }  -->

</head>

<body>
  <nav>
    <div class="nav__header">

      <div class="nav__logo">
        <a href="#">Vehicle Mania</a>
      </div>
      <div class="nav__menu__btn" id="menu-btn">
        <span><i class="ri-menu-line"></i></span>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <div class="profile">
      <nav>
          <img src="images/user.jpg" class="user-pic" onclick="toggleMenu()">
          <div class="sub-menu-wrap" id="subMenu">
              <div class="sub-menu">
                  <div class="user-info">
                      <img src="images/user.jpg">
                      <h3>Your Name</h3>
                  </div>
                  <hr>
                  <a href="#" class="sub-menu-link">
                      <img src="images/profile.jpg">
                      <p>Edit Profile</p>
                      <span>></span>
                  </a>
                  <a href="#" class="sub-menu-link">
                      <img src="images/setting.jpg">
                      <p>Setting & Privacy</p>
                      <span>></span>
                  </a>
                  <a href="#" class="sub-menu-link">
                      <img src="images/help.jpg">
                      <p>Help & Support</p>
                      <span>></span>
                  </a>
                  <a href="#" class="sub-menu-link">
                      <img src="images/logout.jpg">
                      <p>Logout</p>
                      <span>></span>
                  </a>
              </div>
          </div>
      </nav>
  </div>

    <!-- <div class="nav__btns">
      <button class="btn"><a href="login.html">Log in</a></button>
    </div> -->
    
  </nav>
  
  
<script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
</script>
  <div class="search-bar-container">
    <div class="search-bar">
        <input type="text" placeholder="Search Vehicles...">
        <button type="button">Search</button>
    </div>
</div>
  <header class="section__container header__container">
    <div class="header__image">
      <img src="images/car-rental.webp" alt="header" />
    </div>
    <div class="header__content">
      <h1>Vehicle Mania</h1>
      <h2>Rent a vehicle from here.</h2>
      <button class="btn">Rent Now</button>
      <br>

      <p>
        <br>
        Book online today. Low cost rental from Vehiclemania<br><br>

        We have all kind of vehicle like cars, jeep, bikes, scooter and cycle for rent.<br><br>

      </p>
    </div>
  </header>

 

  <!-- Vehicle our services -->
  <div class="pcontent">
    <h2>Our Services</h2>
    <div class="Vehicle-list">
      <div class="Vehicle">
        <img src="https://via.placeholder.com/150" alt="Vehicle 1">
        <h3>Vehicle 1</h3>
        <p>Short description of the Vehicle.</p>
        <p class="price">$19.99</p>
        <a href="#" class="btn">Rent Now</a>
      </div>
      <div class="Vehicle">
        <img src="https://via.placeholder.com/150" alt="Vehicle 2">
        <h3>Vehicle 2</h3>
        <p>Short description of the Vehicle.</p>
        <p class="price">$29.99</p>
        <a href="#" class="btn">Rent Now</a>
      </div>
      <div class="Vehicle">
        <img src="https://via.placeholder.com/150" alt="Vehicle 3">
        <h3>Vehicle 3</h3>
        <p>Short description of the Vehicle.</p>
        <p class="price">$39.99</p>
        <a href="#" class="btn">Rent Now</a>
      </div>
    </div>
  </div>

<!-- Featured Services -->
<div class="pcontent">
  <h2>Featured Vehicles</h2>
  <div class="Vehicle-list">
      <div class="Vehicle">
          <img src="https://via.placeholder.com/150" alt="Vehicle 1">
          <h3>Vehicle 1</h3>
          <p>Short description of the Vehicle.</p>
          <p class="price">$19.99</p>
          <a href="#" class="btn">Rent Now</a>
      </div>
      <div class="Vehicle">
          <img src="https://via.placeholder.com/150" alt="Vehicle 2">
          <h3>Vehicle 2</h3>
          <p>Short description of the Vehicle.</p>
          <p class="price">$29.99</p>
          <a href="#" class="btn">Rent Now</a>
      </div>
      <div class="Vehicle">
          <img src="https://via.placeholder.com/150" alt="Vehicle 3">
          <h3>Vehicle 3</h3>
          <p>Short description of the Vehicle.</p>
          <p class="price">$39.99</p>
          <a href="#" class="btn">Rent Now</a>
      </div>
  </div>
</div>
<br>

<!-- User form -->
  <!-- Form -->
  <div class="header__content">
    <h1>User form</h1>
</div>
  <!-- <div class="form"> -->
  <div class="form-body">
  <div class="form-container">
    <h1 class="form">Enter Details</h1>
    <form action="/submit" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Permanent Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="t-address">Temporary Address:</label>
          <input type="text" id="t-address" name="t-address" required>
      </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="license-no">License number:</label>
            <input type="number" id="license-no" name="license-no" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
            <label for="photo">Passport Size Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="license">Driving License:</label>
            <input type="file" id="license" name="license" accept="image/*" required>
        </div>
        <button type="submit">Submit</button>
        <!-- <a href="#" class="btn">Submit</a> -->
    </form>
  </div>
    <br><br><br>



  <!-- Contact us -->
  <section class="header__content">
    <h1 class="heading">Contact us</h1>
    <header class="section__container header__container">
      <div class="header__image">
        <img src="images/contactus.avif" alt="Categories Image: Flipping Images">
      </div>
      <div class="contactus">
        <h3>Contact us</h3>
        Pokhara-08, Kaski<br>
        vehiclemania@gmail.com
        <h4>+977 - 9812345678</h4><br><br>
        <div class="header__content">


        </div>
    </header>
  </section>



  <!-- Footer -->
  <footer class="footer">
    <div class="row">
      <div class="col">
        <!-- <img src="logo.png" alt="logo" class="logo"> -->
        <br>
          <p> &copy; 2024 Vehicle Mania. All rights reserved.</p>

      </div>

      <div class="col">
        <h3>Quick Links</h3>
        <ul class="Footer-list">
          <li><a href="">Home</a></li>
          <li><a href="">About us</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Categories</a></li>
          <li><a href="">Contact us</a></li>
        </ul>
      </div>
      </div>
      <div class="row">
      <div class="col">
        <h3>Contact us</h3>
        <p>Pokhara-08, Kaski</p>
        <p class="email">vehiclemania@gmail.com</p>
        <h4>+977 - 9812345678</h4>
      </div>
      <div class="col"></div>
    </div>
  </footer>

  </script>
  <!-- <script src="main.js"></script> -->
</body>

</html>