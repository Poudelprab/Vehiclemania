<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="renterpage.css" />
  <title>Web Design Mastery | Play</title>
</head>

<body>
  <nav>
    <div class="nav__header">

       <div class="logo-container">
        <img src="images/logo.svg" alt="Logo" class="logo">
      </div>
      
      <div class="nav__menu__btn" id="menu-btn">
        <span><i class="ri-menu-line"></i></span>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">Vehicles</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
    <div class="nav__btns">
      <button class="rbtn"><a href="renterlogin.html">Are you a renter?</a></button>
      <button class="btn"><a href="login.html">Log in</a></button>
    </div>
    
    <!-- Profile -->
    <div class="profile">
          <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
          <div class="sub-menu-wrap" id="subMenu">
              <div class="sub-menu">
                  <div class="user-info">
                      <img src="images/user.png">
                      <h3>Kapil Tiwari</h3>
                  </div>
                  <hr>
                  <a href="#" class="sub-menu-link">
                      <img src="images/profile.png">
                      <p>Edit Profile</p>
                      <span>></span>
                  </a>
                  <a href="#" class="sub-menu-link">
                      <img src="images/setting.png">
                      <p>Setting & Privacy</p>
                      <span>></span>
                  </a>
                  <a href="#" class="sub-menu-link">
                      <img src="images/help.png">
                      <p>Help & Support</p>
                      <span>></span>
                  </a>
                  <a href="#" class="sub-menu-link">
                      <img src="images/plogout.png">
                      <p>Logout</p>
                      <span>></span>
                  </a>
              </div>
          </div>
      </nav>
  </div>

  <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu() {
          subMenu.classList.toggle("open-menu");
      }
  </script>


<!-- Product List -->
<div class="pcontent">
  <h2>Our Services</h2>
  <div class="product-list">
    <div class="product">
      <img src="https://via.placeholder.com/150" alt="Product 1">
      <h3>Product 1</h3>
      <p>Short description of the product.</p>
      <p class="price">$19.99</p>
    </div>
    <div class="product">
      <img src="https://via.placeholder.com/150" alt="Product 2">
      <h3>Product 2</h3>
      <p>Short description of the product.</p>
      <p class="price">$29.99</p>
    </div>
    <div class="product">
      <img src="https://via.placeholder.com/150" alt="Product 3">
      <h3>Product 3</h3>
      <p>Short description of the product.</p>
      <p class="price">$39.99</p>
    </div>
  </div>
</div>

<!-- renter form -->
  <!-- Form -->
  <div class="header__content">
    <h1>Renter form</h1>
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
            <label for="p-address">Permanent Address:</label>
            <input type="text" id="p-address" name="p-address" required>
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
            <input type="number" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="citizenshipno">Citizenship Number:</label>
            <input type="number" id="citizenshipno" name="citizenshipno" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>
      </div>
        <div class="form-group">
            <label for="passport">Passport Photo:</label>
            <input type="file" id="passport" name="passport" accept="image/*" required>
        </div><div class="form-group">
          <label for="citizenship">Citizenship Photo:</label>
          <input type="file" id="citizenship" name="citizenship" accept="image/*" required>
      </div>

        <button type="submit">Submit</button>
        <!-- <a href="#" class="btn">Submit</a> -->
    </form>
  </div>
    <br><br><br>
  

    <!-- Vehicle Form -->
  <div class="header__content">
    <h1>Vehicle form</h1>
</div>
  <!-- <div class="form"> -->
  <div class="form-body">
  <div class="form-container">
    <h1 class="form">Enter Details</h1>
    <form action="/submit" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="v_model"> Vehicle Model:</label>
            <input type="text" id="v_model" name="v_model" required>
        </div>
        <!-- Vehicle type dropdown-->
        <div class="form-group">
          <label for="v_type">Vehicle type:</label>
          <select id="v_type" name="v_type" required>
              <option value="">Select a vehicle type</option>
              <option value="Cycle">Cycle</option>
              <option value="Scooter">Scooter</option>
              <option value="Motorbike">Motorbike</option>
              <option value="Car">Car</option>
          </select>
      </div>
      <div class="form-group">
        <label for="no_seat">Number Of Seat</label>
        <input type="number" id="no_seat" name="no_seat" required>
    </div>
      <div class="form-group">
        <label for="v_plate">Vehicle Number Plate:</label>
        <input type="v_plate" id="v_plate" name="v_plate"  required>
        </div>
        <div class="form-group">
          <label for="chasis_no">Chasis Number:</label>
          <input type="name" id="chasis_no" name="chasis_no" required>
          </div>
        <div class="form-group">
          <label for="mfd">Manufacture Date</label>
          <input type="number" id="mfd" name="mfd" required>
      </div>
      <div class="form-group">
        <label for="insu_date">Insurance Expiry Date</label>
        <input type="date" id="insu_date" name="insu_date" required>
    </div>
        <div class="form-group">
          <label for="v_photo">Vehicle Photo:</label>
          <input type="file" id="v_photo" name="v_photo" accept="image/*" required>
      </div>
        <div class="form-group">
            <label for="b_photo">Bluebook Photo:</label>
            <input type="file" id="b_photo" name="b_photo" accept="image/*" required>
        </div>
        
        <button type="submit">Submit</button>
        <!-- <a href="#" class="btn">Submit</a> -->
    </form>
  </div>
    <br><br><br>
</body>

</html>