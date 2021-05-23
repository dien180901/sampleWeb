<?php 
// check session status and start session 
if ( empty(session_id()) ) session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fees</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/fees.module.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navigation bar -->
    <header>
      <!-- Logo -->
      <div class="brand">
        <a href="../index.php"
          ><img
            src="https://i.imgur.com/mE6aWmB.png"
            alt="logo"
            class="logo-img"
          />
        </a>
      </div>
      <!-- Right menu -->
      <nav class="menu">
        <input type="checkbox" id="menuToggle" />
        <label for="menuToggle" class="menu-icon"
          ><i class="fa fa-bars"></i
        ></label>
        <ul>
          <a href="about.php"><li>About us</li></a>
          <a href="fees.php"><li>Fees</li></a>
          <a href="account/account.php"><li>Account</li></a>
          <a href="browse-menu.php"><li>Browse</li></a>
          <a href="faq.php"><li>FAQs</li></a>
          <a href="contact.php"><li>Contact</li></a>
          <a href="login-form.php"><li>Sign in</li></a>
          <?php 
              $cartNum = 0;
              // if cart already exists
              if (isset($_SESSION['cart']))
              {
                  foreach ($_SESSION['cart'] as &$subCart) {
                      $cartNum += $subCart[3];
                  }
                  echo '<a href="cart.php" style="color:red;"><li>Cart: <span>'.$cartNum.'</span></li></a>';
              // if the array is empty
              } else {
                  echo '<a href="cart.php" ><li>Cart</li></a>';
              }
          ?>
        </ul>
      </nav>
    </header>
    <!-- End header -->
    <!-- Pricing table -->
    <!-- For customer -->
    <div id="title">
      <p>FOR CUSTOMER</p>
    </div>
    <!-- Pricing card  -->
    <section>
      <div class="pricing-table">
        <!-- Regular member -->
        <div class="pricing-card">
          <h3 class="card-header">Regular Member</h3>
          <div class="plan-price-content">Free</div>
          <ul>
            <li>No discount per transaction</li>
            <li>Charged shipping</li>
            <li>No priority for transaction</li>
            <li>Limited Support</li>
          </ul>
          <a href="#" class="button">Register Now</a>
        </div>
        <!-- Premium member -->
        <div class="pricing-card">
          <h3 class="card-header">Premium Member</h3>
          <div class="plan-price-content">
            <sup>$</sup>20<span>/month</span>
          </div>
          <ul>
            <li>8% discount per transaction</li>
            <li>Free shipping within 5 km</li>
            <li>Priority for transaction</li>
            <li>24/7 Support</li>
          </ul>
          <a href="#" class="button">Register Now</a>
        </div>
      </div>
    </section>
    <!-- End Customer -->
    <hr class="pill" />
    <!-- For Shop Owner -->
    <div id="title">
      <p>FOR SHOP OWNER</p>
    </div>
    <section>
      <!-- Pricing card -->
      <div class="pricing-table">
        <!-- Renting service -->
        <div class="pricing-card">
          <h3 class="card-header">Renting Service</h3>
          <div class="plan-price-content">
            <sup>$</sup>699<span>/month</span>
          </div>
          <ul>
            <li>Unique storage in cloud network</li>
            <li>Encrypted transaction</li>
            <li>High-quality guidance</li>
            <li>Worldwide advertising support</li>
          </ul>
          <a href="#" class="button">Register Now</a>
        </div>
        <!-- Commission fees -->
        <div class="pricing-card">
          <h3 class="card-header">Commission Fees</h3>
          <div class="plan-price-content">
            <sup>$</sup>5<span>/product</span>
          </div>
          <ul>
            <li>Risk control</li>
            <li>Maintenance cost</li>
            <li>Future potential</li>
            <li>Charity donation</li>
          </ul>
          <a href="#" class="button">Register Now</a>
        </div>
      </div>
    </section>
    <!-- End shop owner -->
    <!-- End Pricing table -->
    <!-- Footer -->
    <footer class="page-footer">
      <div class="container">
        <div class="grid-container">
          <!-- Footer Logo -->
          <div class="grid-item">
            <a href="../index.php"
              ><img
                src="https://i.imgur.com/mE6aWmB.png"
                alt="logo"
                class="logo-img"
            /></a>
          </div>
          <!-- Quick Link -->
          <div class="grid-item inner-grid-container">
            <div class="grid-item">
              <a href="about.php">About Us</a>
            </div>
            <div class="grid-item">
              <a href="fees.php">Fees</a>
            </div>
            <div class="grid-item"><a href="browse-menu.php">Browse</a></div>
            <div class="grid-item">
              <a href="term_of_services.php">Term of Service</a>
            </div>
            <div class="grid-item">
              <a href="account/account.php">Account</a>
            </div>
            <div class="grid-item"><a href="faq.php">FAQs</a></div>
            <div class="grid-item">
              <a href="contact.php">Contact</a>
            </div>
            <div class="grid-item">
              <a href="privacy_policies.php">Privacy Policy</a>
            </div>
          </div>
          <!-- Social Link -->
          <div class="grid-item">
            <div class="social-buttons">
              <a href=""><i class="fab fa-instagram circle-icon"></i></a>
              <a href=""><i class="fab fa-facebook circle-icon"></i></a>
              <a href=""><i class="fab fa-linkedin-in circle-icon"></i></a>
              <a href=""><i class="fab fa-twitter circle-icon"></i></a>
            </div>
          </div>
        </div>
        <hr />
        <!-- Copyright -->
        <p>&copy 2021 | RMIT University | Group 16</p>
      </div>
    </footer>
    <!-- JavaScript -->
    <script src="../js/index.js"></script>
  </body>
</html>
