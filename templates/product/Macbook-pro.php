<?php
	session_start();
  
  error_reporting(E_ERROR | E_PARSE);
  if (fopen('../../php/install.php', 'r') != null) {
      exit("'install.php' still exists! Delete it to proceed!");
  } 

  // unset($_COOKIE['visited']);
  // unset($_SESSION['a-product-added']);
  // unset($_SESSION['last-visited-product']);
  // unset($_POST['a-product-added']);
  // unset($_POST['quantity']);

  
  if (!isset($_COOKIE['visited'])) { // no cookie, so probably the first time here
    $_COOKIE['visited'] = 'yes';
    if (isset($_SESSION['a-product-added']) || isset($_SESSION['last-visited-product']))
    {
      unset($_SESSION['a-product-added']);
      unset($_SESSION['last-visited-product']);
    }
  }
  
  if (isset($_POST['a-product-added'])) {
    $_SESSION['a-product-added'] = 'already';
  }

  if (isset($_COOKIE['visited']) && $_COOKIE['visited'] == 'yes') {
    $_SESSION['last-visited-product'] = "Macbook-pro.php";
  } 


  // echo '<h2>$_SESSION values</h2>';
  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
  // echo '<hr>';

  // echo '<h2>$_POST values</h2>';
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // echo '<hr>';

  // echo '<h2>$_COOKIE values</h2>';
  // echo '<pre>';
  // print_r($_COOKIE);
  // echo '</pre>';
  // echo '<hr>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Macbook pro</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/product.module.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body onmouseover="cartNumbers()">
  <!--toast-->
    <div class="toast" id="toast">
    </div>
    <!-- Navigation bar -->
    <header>
        <!-- Logo -->
        <div class="brand">
            <a href="../../index.php"><img src="https://i.imgur.com/mE6aWmB.png" alt="logo" class="logo-img" />
            </a>
        </div>
        <!-- Right menu -->
        <nav class="menu">
            <input type="checkbox" id="menuToggle" />
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i
        ></label>
        <ul>
          <a href="../about.php"><li>About us</li></a>
          <a href="../fees.html"><li>Fees</li></a>
          <a href="../account/account.php"><li>Account</li></a>
          <a href="../browse-menu.html"><li>Browse</li></a>
          <a href="../faq.html"><li>FAQs</li></a>
          <a href="../contact.html"><li>Contact</li></a>
          <a href="../login-form.php"><li>Sign in</li></a>
          <a href="../cart.php"  style="color: red" class="cart-nav"id = "cart"><li>Cart: <span>0</span> </li></a>
        </ul>
      </nav>
    </header>
    <!-- End header -->
    <!--body part-->
    <div class="product_description">
      <div class="product_content">
        <!--product content-->
        <h1 id="product-name">Macbook pro</h1>
        <h3>General description</h3>
        <div class="product_detail">
          <!--product image different angle-->
          <div class="product_from_different_angle">
            <img src="https://i.imgur.com/vEYOqp1.jpg" class="angle" />
            <img src="https://i.imgur.com/edgb50X.jpg" class="angle" />
            <img src="https://i.imgur.com/ZbpJqlA.jpg" class="angle" />
            <img src="https://i.imgur.com/bajgweR.jpg" class="angle" />
            <img src="https://i.imgur.com/lpKrKtO.jpg" class="angle" />
            <img src="https://i.imgur.com/uESwhAT.jpg" class="angle" />
          </div>
          <!--product picture-->
          <div class="product_picture">
            <img
              src="https://i.imgur.com/vEYOqp1.jpg"
              class="general_picture"
            />
          </div>
          <!--general description-->
          <div class="product_general_description">
            <span class="fa fa-star checked"></span>
            <!--fullstar-->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fas fa-star-half-alt checked"></span>
            <!--half star-->
            <span> 4.8/5 235 reviews </span>
            <p id="price">Price: $<span>1299</span></p>
            <p>Color available: Space Gray</p>
            <div>
              <span>
                <img
                  src="https://i.imgur.com/vEYOqp1.jpg"
                  class="same_product_another_design"
                />
              </span>
              <span>
                <img
                  src="https://i.imgur.com/dLAPUMy.jpg"
                  class="same_product_another_design"
                />
              </span>
            </div>
            <p>Description</p>
            <ul class="detail-list">
              <li style="list-style-type: disc">Height: 1.56cm</li>
              <li style="list-style-type: disc">Width: 30.41cm</li>
              <li style="list-style-type: disc">Depth : 21.24cm</li>
              <li style="list-style-type: disc">Weight: 1400g</li>
            </ul>
            <br />
            <div class="buying">
              <form method="post" name="product-added-button-form" action="Macbook-pro.php">
                <input
                  type="number"
                  id="quantity"
                  name="quantity"
                  min="1"
                  max="100"
                  value="1"
                />
                <button type="submit" name="a-product-added" value="true" class="addtocart" style="margin-left: 10px; border: solid; padding: 5px; cursor: pointer;">Add Cart</button>
              </form>
          </div>
          </div>
        </div>
        <!--end general description-->
        <div class="separator"></div>
        <!--detail description-->
        <div class="detail_description">
          <h3>Detail description</h3>
          <b> Techspecs</b>
          <ul>
            <li style="list-style-type: disc">
              13.3-inch (diagonal) LED-backlit display with IPS technology;
              2560-by-1600 native resolution at 227 pixels per inch with support
              for millions of colors.
            </li>
            <li style="list-style-type: disc">500 nits brightness.</li>
            <li style="list-style-type: disc">Wide color (P3).</li>
            <li style="list-style-type: disc">True Tone technology.</li>
            <li style="list-style-type: disc">
              Apple M1 Chip with 8-core CPU, 4 performance core and 4 efficiency
              cores and 16-core Neural Engine.
            </li>
            <li style="list-style-type: disc">
              Up to 17 hours wireless web or Up to 20 hours Apple TV app movie
              playback.
            </li>
            <li style="list-style-type: disc">
              Built-in 58.2-watt-hour lithium-polymer battery with 61W USB-C
              Power Adapter.
            </li>
            <li style="list-style-type: disc">
              8GB unified memory and can be configured to 16GB.
            </li>
            <li style="list-style-type: disc">720p FaceTime HD camera.</li>
            <li style="list-style-type: disc">
              Stereo speakers with high dynamic range.
            </li>
            <li style="list-style-type: disc">Operating system: macOS.</li>
            <li style="list-style-type: disc">
              many features such as: VoiceOver, Zoom, Reduce motion,...
            </li>
          </ul>
          <br />
          <b>Operating requirements:</b>
          <ul>
            <li style="list-style-type: disc">
              Line voltage: 100V to 240V AC.
            </li>
            <li style="list-style-type: disc">Frequency: 50Hz to 60Hz.</li>
            <li style="list-style-type: disc">
              Operating temperature: 10° to 35° C.
            </li>
            <li style="list-style-type: disc">
              Storage temperature: −25° to 45° C.
            </li>
            <li style="list-style-type: disc">
              Relative humidity: 0% to 90% nonconsenting.
            </li>
            <li style="list-style-type: disc">
              Operating altitude: tested up to 3,000 meters.
            </li>
            <li style="list-style-type: disc">
              Maximum storage altitude: 4,500 meters.
            </li>
            <li style="list-style-type: disc">
              Maximum shipping altitude: 10,500 meters.
            </li>
          </ul>
        </div>
        <!--end detail description-->
        <!--review section-->
        <div class="separator"></div>
        <div class="review_part">
          <!-- review part-->
          <!--star rating (132-5 stars, 20-4stars, 23-3stars, 12-2stars,9-1stars)-->
          <div class="star_summary">
            <div>
              <h3>Customer review</h3>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fas fa-star-half-alt checked"></span>
              <span> 4.8/5 235 reviews </span>
            </div>
            <!--review bar-->
            <div class="review_bar" id="review_bar_5_star">
              <!--star rating bar number-->
              <div>
                <p>5 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(21000% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>90%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_4_star">
              <!--star rating bar number-->
              <div>
                <p>4 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(1500% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>6%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_3_star">
              <!--star rating bar number-->
              <div>
                <p>3 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(300% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>1%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_2_star">
              <!--star rating bar number-->
              <div>
                <p>2 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(300% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>1%</p>
              </div>
            </div>
            <div class="review_bar" id="review_bar_1_star">
              <!--star rating bar number-->
              <div>
                <p>1 star</p>
              </div>
              <!--bar-->
              <div class="gray_bar">
                <div class="amount_bar" style="width: calc(300% / 235)"></div>
              </div>
              <!--percentage -->
              <div class="percentage">
                <p>1%</p>
              </div>
            </div>
            <!--write your review here-->
            <div class="separator"></div>
            <div class="review">
              <h3>Review this product</h3>
              <p>You can write your review here</p>
              <form>
                <div class="rating">
                  <span>☆</span><span>☆</span><span>☆</span><span>☆</span
                  ><span>☆</span>
                </div>
                <p>Your preferred name:</p>
                <input type="text" name="user_pref_name" class="text-area" />
                <p>Your reason:</p>
                <input type="text" name="user's_reason " class="text-area" />
                <p>explanation:</p>
                <textarea name="review" class="text-area"> </textarea>
                <input type="submit" class="submit-button" />
              </form>
            </div>
          </div>
          <!--end star review-->
          <!--Show other people review-->
          <div class="other-review">
            <h1>User's review</h1>
            <!--comment 1-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/l40m95m.png"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Mike</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"
                  ><b> This technology is nice</b>
                </span>
                <p class="text-area">
                  This is exactly what I need, It is simple but really easy to
                  use. I really like it because it is the perfect companion for
                  me who want to go on a walk while listening to music.
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 32 likes </span>
              </div>
            </div>
            <!--end comment 1-->
            <!--comment 2-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/dnHWRnW.png"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Ricky</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"><b>What we need</b> </span>
                <p class="text-area">
                  This is exactly what I needed. It is really easy to use. I
                  have used this technology for more than month now and I can
                  guarantee that I can barely see any bad point about this
                  product. This is perfect for almost every activity. I highly
                  recommend this if you don't have one yet
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 21 likes </span>
              </div>
            </div>
            <!--end comment 2-->
            <!--comment 3-->
            <div class="review">
              <!--avatar of the user-->
              <div class="avatar">
                <img
                  src="https://i.imgur.com/gc0dOkW.jpg"
                  class="users-avatar"
                />
              </div>
              <!--review content-->
              <div class="review-content">
                <p>Smith</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="far fa-star"></span>
                <!--no star-->
                <span class="review_reason"><b> Daily necessity</b> </span>
                <p class="text-area">
                  The newly added feature is amazing. I highly suggest everyone
                  to have this product. Currently, there are not many product
                  are as good as this one out there so I believe everyone should
                  buy it since I can guarantee it is worth it.
                </p>
                <i class="far fa-thumbs-up like-button"></i>
                <span> 13 likes </span>
              </div>
            </div>
            <!--end comment 3-->
          </div>
          <!--end other review-->
        </div>
        <!--end user review section-->
        <div class="similar-product">
          <span class="product_list">
            <figure class="product">
              <a href="apple-watch-series-6.html"
                ><img
                  src="https://i.imgur.com/6KqDWVE.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="apple-watch-series-6.html" class="product-link">
                  <b>Apple watch series 6 </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.7/5 80 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="homepod-mini.html"
                ><img
                  src="https://i.imgur.com/EVvlj0R.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="homepod-mini.html" class="product-link">
                  <b> Homepod mini </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <span> 4.3/5 196 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="ipad-pro-2020.html"
                ><img
                  src="https://i.imgur.com/lEEMbrp.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="ipad-pro-2020.html" class="product-link">
                  <b> Ipad pro 2020 </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.3/5 196 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product">
              <a href="iphone-12-pro.html"
                ><img
                  src="https://i.imgur.com/wL3doZA.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="iphone-12-pro.html" class="product-link">
                  <b> Iphone 12 pro </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <!--fullstar-->
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <!--half star-->
                  <span> 4.5/5 32 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
          <span class="product_list">
            <figure class="product" id="product_5">
              <a href="airpod-pro.html"
                ><img
                  src="https://i.imgur.com/JkaRVXM.jpg"
                  class="product-img"
                />
              </a>
              <figcaption>
                <a href="airpod-pro.html" class="product-link">
                  <b> Airpod pro </b>
                </a>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fas fa-star-half-alt checked"></span>
                  <span> 4.3/5 196 reviews </span>
                </div>
              </figcaption>
            </figure>
          </span>
        </div>
      </div>
      <!--end review content-->
    </div>
    <!--End body part-->
    <script src="../../js/add-cart-other.js"></script>
    <!-- Footer -->
    <footer class="page-footer">
      <div class="container">
        <div class="grid-container">
          <!-- Footer Logo -->
          <div class="grid-item">
            <a href="../../index.php"
              ><img
                src="https://i.imgur.com/mE6aWmB.png"
                alt="logo"
                class="logo-img"
            /></a>
          </div>
          <!-- Quick Link -->
          <div class="grid-item inner-grid-container">
            <div class="grid-item">
              <a href="../about.php">About Us</a>
            </div>
            <div class="grid-item">
              <a href="../fees.html">Fees</a>
            </div>
            <div class="grid-item">
              <a href="../browse-menu.html">Browse</a>
            </div>
            <div class="grid-item">
              <a href="../term_of_services.php">Term of Service</a>
            </div>
            <div class="grid-item">
              <a href="../account/account.php">Account</a>
            </div>
            <div class="grid-item"><a href="../faq.html">FAQs</a></div>
            <div class="grid-item">
              <a href="../contact.html">Contact</a>
            </div>
            <div class="grid-item">
              <a href="../privacy_policies.php">Privacy Policy</a>
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
            <hr />
            <!-- Copyright -->
            <p>&copy 2021 | RMIT University | Group 16</p>
        </div>
    </footer>
    <!-- JavaScript -->
    <script src="../../js/index.js"></script>
</body>

</html>