<?php
	session_start();
  error_reporting(E_ERROR | E_PARSE);

  if (fopen('../php/install.php', 'r') != null) {
    exit("'install.php' still exists! Delete it to proceed!");
  }
  $adminUsername = "andrewlenguyen@gmail.com";
  $adminPass = "$2y$10VJZeRekNVK8dodKsQubVcOa5PupDhGH4JYyr6lS4CxdzzTJ.7/cK6";

  if (isset($_POST['log-in-hit'])) {
    if (isset($_POST['email']) && $_POST['email'] == $adminUsername && isset($_POST['pwd']) && $_POST['pwd'] == $adminPass) {
      $_SESSION['admin_username'] = $_POST['email'];
      header('location: CMS.php');
    } 
    else if (isset($_POST['pwd']) && $_POST['pwd'] == "password") {
      $_SESSION['user'] = $_POST['email'];
      unset($_SESSION['admin_username']);
      header('location: account/account.html');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../css/login-form.module.css" />
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
        <a href="../index.html"
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
          <a href="about.html">
            <li>About us</li>
          </a>
          <a href="fees.html">
            <li>Fees</li>
          </a>
          <a href="account/account.html">
            <li>Account</li>
          </a>
          <a href="browse-menu.html">
            <li>Browse</li>
          </a>
          <a href="faq.html">
            <li>FAQs</li>
          </a>
          <a href="contact.html">
            <li>Contact</li>
          </a>
          <a href="login-form.html">
            <li>Sign in</li>
          </a>
          <a href="cart.html"id = "cart"><li>Cart</li></a>
        </ul>
      </nav>
    </header>

    <!-- End header -->
    <section id="wrapper">
      <h1>Login</h1>
      <div class="form">
        <form
          method="post"
          name="loginForm"
          onsubmit="return validateLogin()"
		  action="login-form.php"
        >

          <div class="field-wrapper">
            <label for="email"></label>
            <input
              type="text"
              name="email"
              id="email"
              placeholder="Email address"
            />
          </div>
          <div class="field-wrapper">
            <label for="password"></label>
            <input type="password" name="pwd" id="pwd" placeholder="Password" />
          </div>

          <div class="button">
            <button type="submit" name="log-in-hit" value="submit">Log in</button>
          </div>
          <div class="register">
            <a href="sign-up-form.html">Register</a>
          </div>
          <div class="password-reset">
            <a href="forgot-password.html">Forgot your password?</a>
          </div>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer">
      <div class="container">
        <div class="grid-container">
          <!-- Footer Logo -->
          <div class="grid-item">
            <a href="../index.html"
              ><img
                src="https://i.imgur.com/mE6aWmB.png"
                alt="logo"
                class="logo-img"
            /></a>
          </div>
          <!-- Quick Link -->
          <div class="grid-item inner-grid-container">
            <div class="grid-item">
              <a href="about.html">About Us</a>
            </div>
            <div class="grid-item">
              <a href="fees.html">Fees</a>
            </div>
            <div class="grid-item"><a href="browse-menu.html">Browse</a></div>
            <div class="grid-item">
              <a href="term_of_services.html">Term of Service</a>
            </div>
            <div class="grid-item">
              <a href="account/account.html">Account</a>
            </div>
            <div class="grid-item"><a href="faq.html">FAQs</a></div>
            <div class="grid-item">
              <a href="contact.html">Contact</a>
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

    <!-- JavaScript-->
    <script src="../js/index.js"></script>
  </body>
</html>
