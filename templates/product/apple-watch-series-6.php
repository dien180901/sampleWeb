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
    $_SESSION['last-visited-product'] = "apple-watch-series-6.php";
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
    <title>Apple watch series 6</title>
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
          <a href="../cart.php"  style="color: red" class="cart-nav" id = "cart"><li>Cart: <span>0</span> </li></a>
        </ul>
      </nav>
    </header>
    <!-- End header -->
    <!--body part-->
    <div class="product_description">
        <div class="product_content">
            <!--product content-->
            <h1 id="product-name">Apple watch series 6</h1>
            <h3> General description </h3>
            <div class="product_detail">
                <!--product image different angle-->
                <div class="product_from_different_angle">
                    <img src="https://i.imgur.com/6KqDWVE.jpg" class="angle" alt="product general picture">
                    <img src="https://i.imgur.com/G5yru0i.jpg" class="angle" alt="product from another angle">
                    <img src="https://i.imgur.com/RFAfx5R.jpg" class="angle" alt="product from another angle">
                    <img src="https://i.imgur.com/HT75C9r.jpg" class="angle" alt="product from another angle">
                    <img src="https://i.imgur.com/JAs4PKs.jpg" class="angle" alt="product from another angle">
                </div>
                <!--product picture-->
                <div class="product_picture">
                    <img src="https://i.imgur.com/6KqDWVE.jpg" class="general_picture" alt="product general picture">
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
                    <span> 4.7/5 80 reviews </span>
                    <p id="price">Price: $<span>399</span></p>
                    <p> Color avaiable: Blue </p>
                    <div>
                        <span> <img src = "https://i.imgur.com/6KqDWVE.jpg" class ="same_product_another_design" alt = "product with another design"> </span>
                        <span> <img src = "https://i.imgur.com/dZCtWa1.jpg" class ="same_product_another_design" alt = "product with another design"> </span>
                        <span> <img src = "https://i.imgur.com/TQ6XQYZ.jpg" class ="same_product_another_design" alt = "product with another design"> </span>
                        <span> <img src = "https://i.imgur.com/gT5TTov.jpg" class ="same_product_another_design" alt = "product with another design"> </span>
                        <span> <img src = "https://i.imgur.com/YBWzSmy.jpg" class ="same_product_another_design" alt = "product with another design"> </span>
                    </div>
                    <p> Titanium Case apple watch </p>
                    <p> Dimension </b>
                        <p> 40mm</p>
                        <ul class="detail-list">
                            <li style="list-style-type: disc">Height: 40mm</li>
                            <li style="list-style-type: disc">Width: 34mm</li>
                            <li style="list-style-type: disc">Depth: 10.7mm</li>
                            <li style="list-style-type: disc">Weight: 34.6g</li>

                        </ul>
                        <p> 44mm</p>
                        <ul class="detail-list">
                            <li style="list-style-type: disc">Height: 44mm</li>
                            <li style="list-style-type: disc">Width: 38mm</li>
                            <li style="list-style-type: disc">Depth: 10.7mm</li>
                            <li style="list-style-type: disc">Weight: 41.3g</li>
                        </ul>
                        <br>
                        <div class="buying">
                            <form method="post" name="product-added-button-form" action="apple-watch-series-6.php">
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
                <b>Features </b>
                <ul class="detail-list">
                    <li style="list-style-type: disc">Titanium available in natural titanium and space black</li>
                    <li style="list-style-type: disc">GPS/GNSS</li>
                    <li style="list-style-type: disc">Compass</li>
                    <li style="list-style-type: disc">Always-on altimeter</li>
                    <li style="list-style-type: disc">Water resistant 50 metres</li>
                    <li style="list-style-type: disc">Blood oxygen sensor (Blood Oxygen app)</li>
                    <li style="list-style-type: disc">Electrical heart sensor (ECG app)</li>
                    <li style="list-style-type: disc">Third-generation optical heart sensor</li>
                    <li style="list-style-type: disc">International Emergency Calling</li>
                    <li style="list-style-type: disc">Emergency SOS</li>
                    <li style="list-style-type: disc">Accelerometer up to 32 g-forces with Fall Detection</li>
                    <li style="list-style-type: disc">Gyroscope</li>
                    <li style="list-style-type: disc">Ambient light sensor</li>
                    <li style="list-style-type: disc">Speaker 50 per cent louder</li>
                    <li style="list-style-type: disc">Microphone (enables Noise app)</li>
                    <li style="list-style-type: disc">Apple Pay</li>
                    <li style="list-style-type: disc">GymKit</li>
                    <li style="list-style-type: disc">Capacity 32GB</li>
                    <li style="list-style-type: disc">Ceramic and sapphire crystal back</li>
                    <li style="list-style-type: disc">44mm (368x448 pixels, 977 sq mm display area)</li>
                    <li style="list-style-type: disc">40mm (324x394 pixels, 759 sq mm display area)</li>
                    <li style="list-style-type: disc">Always-On Retina LTPO OLED display (1000 nits brightness)</li>
                    <li style="list-style-type: disc">Ion-X glass display on aluminium cases; sapphire crystal display on stainless steel and titanium cases</li>
                    <li style="list-style-type: disc">S6 SiP with 64-bit dual-core processor up to 20 per cent faster than S5</li>
                    <li style="list-style-type: disc">W3 Apple wireless chip</li>
                    <li style="list-style-type: disc">U1 chip (Ultra Wideband)</li>
                    <li style="list-style-type: disc">LTE and UMTS</li>
                    <li style="list-style-type: disc">Wi-Fi (802.11b/g/n 2.4GHz and 5GHz)</li>
                    <li style="list-style-type: disc">Bluetooth 5.0</li>
                    <li style="list-style-type: disc">Built-in rechargeable lithium-ion battery up to 18 hours</li>
                    <li style="list-style-type: disc">Magnetic charging cable</li>
                </ul>
            </div>
            <!--end detail description-->
            <!--review section-->
            <div class="separator"> </div>
            <div class="review_part">
                <!-- review part-->
                <!--star rating (132-5 stars, 20-4stars, 23-3stars, 12-2stars,9-1stars)-->
                <div class="star_summary">
                    <div>
                        <h3> Customer review </h3>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fas fa-star-half-alt checked"></span>
                        <span> 4.7/5 80 reviews </span>
                    </div>
                    <!--review bar-->
                    <div class="review_bar" id="review_bar_5_star">
                        <!--star rating bar number-->
                        <div>
                            <p>5 star </p>
                        </div>
                        <!--bar-->
                        <div class="gray_bar">
                            <div class="amount_bar" style="width: calc(6900%/80);"> </div>
                        </div>
                        <!--percentage -->
                        <div class="percentage">
                            <p> 86% </p>
                        </div>
                    </div>
                    <div class="review_bar" id="review_bar_4_star">
                        <!--star rating bar number-->
                        <div>
                            <p>4 star </p>
                        </div>
                        <!--bar-->
                        <div class="gray_bar">
                            <div class="amount_bar" style="width: calc(200%/80);"> </div>
                        </div>
                        <!--percentage -->
                        <div class="percentage">
                            <p> 2% </p>
                        </div>
                    </div>
                    <div class="review_bar" id="review_bar_3_star">
                        <!--star rating bar number-->
                        <div>
                            <p>3 star </p>
                        </div>
                        <!--bar-->
                        <div class="gray_bar">
                            <div class="amount_bar" style="width: calc(700%/80);"> </div>
                        </div>
                        <!--percentage -->
                        <div class="percentage">
                            <p> 9% </p>
                        </div>
                    </div>
                    <div class="review_bar" id="review_bar_2_star">
                        <!--star rating bar number-->
                        <div>
                            <p>2 star </p>
                        </div>
                        <!--bar-->
                        <div class="gray_bar">
                            <div class="amount_bar" style="width: calc(0%/80);"> </div>
                        </div>
                        <!--percentage -->
                        <div class="percentage">
                            <p> 0% </p>
                        </div>
                    </div>
                    <div class="review_bar" id="review_bar_1_star">
                        <!--star rating bar number-->
                        <div>
                            <p>1 star </p>
                        </div>
                        <!--bar-->
                        <div class="gray_bar">
                            <div class="amount_bar" style="width: calc(200%/80);"> </div>
                        </div>
                        <!--percentage -->
                        <div class="percentage">
                            <p> 3% </p>
                        </div>
                    </div>
                    <!--write your review here-->
                    <div class="separator"> </div>
                    <div class="review">
                        <h3> Review this product </h3>
                        <p> You can write your review here </p>
                        <form>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <p> Your prefered name: </p>
                            <input type="text" name="user_pref_name" class="text-area">
                            <p> Your reason: </p>
                            <input type="text" name="user's_reason " class="text-area">
                            <p> explanation: </p>
                            <textarea name="review" class="text-area"> </textarea>
                            <input type="submit" class="submit-button ">
                        </form>
                    </div>
                </div>
                <!--end star review-->
                <!--Show other people review-->
                <div class="other-review">
                    <h1> User's review </h1>
                    <!--comment 1-->
                    <div class="review">
                        <!--avatar of the user-->
                        <div class="avatar">
                            <img src="https://i.imgur.com/l40m95m.png" class="users-avatar" alt="reviewer avatar">
                        </div>
                        <!--review content-->
                        <div class="review-content">
                            <p> Mike </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="far fa-star"></span>
                            <!--no star-->
                            <span class="review_reason"><b> This technology is nice</b> </span>
                            <p class="text-area"> This is exactly what I need, It is simple but really easy to use. I really like it because it is the perfect companion for me who want to go on a walk while listening to music.</p>
                            <i class="far fa-thumbs-up like-button"></i> <span> 32 likes </span>
                        </div>
                    </div>
                    <!--end comment 1-->
                    <!--comment 2-->
                    <div class="review">
                        <!--avatar of the user-->
                        <div class="avatar">
                            <img src="https://i.imgur.com/dnHWRnW.png" class="users-avatar" alt="reviewer avatar">
                        </div>
                        <!--review content-->
                        <div class="review-content">
                            <p> Ricky </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="far fa-star"></span>
                            <!--no star-->
                            <span class="review_reason"><b>What we need</b> </span>
                            <p class="text-area"> This is exactly what I needed. It is really easy to use. I have used this technology for more than month now and I can guarantee that I can barely see any bad point about this product. This is perfect for almost every activity.
                                I highly recommend this if you don't have one yet</p>
                            <i class="far fa-thumbs-up like-button"></i> <span> 21 likes </span>
                        </div>
                    </div>
                    <!--end comment 2-->
                    <!--comment 3-->
                    <div class="review">
                        <!--avatar of the user-->
                        <div class="avatar">
                            <img src="https://i.imgur.com/gc0dOkW.jpg" class="users-avatar" alt="reviewer avatar">
                        </div>
                        <!--review content-->
                        <div class="review-content">
                            <p> Smith </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="far fa-star"></span>
                            <!--no star-->
                            <span class="review_reason"><b> Daily neccessity</b> </span>
                            <p class="text-area"> The newly added feature is amazing. I highly suggest everyone to have this product. Currently, there are not many product are as good as this one out there so I believe everyone should buy it since I can guarantee it is worth
                                it.
                            </p>
                            <i class="far fa-thumbs-up like-button"></i> <span> 13 likes </span>
                        </div>
                    </div>
                    <!--end comment 3-->
                </div>
                <!--end other review-->
            </div>
            <!--end user review section-->
            <div class="similar-product">
                <span class="product_list">
                    <figure class = "product">
                        <a href = "airpod-pro.html"><img src = "https://i.imgur.com/JkaRVXM.jpg" class = "product-img"alt = "similar product"> </a>
                        <figcaption> <a href = "airpod-pro.html" class = "product-link"> <b> Airpod pro </b> </a>
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
                    <figure class = "product">
                        <a href = "homepod-mini.html"><img src = "https://i.imgur.com/EVvlj0R.jpg" class = "product-img"alt = "similar product"> </a>
                        <figcaption> <a href = "homepod-mini.html" class = "product-link"> <b> Homepod mini </b> </a>
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
                    <figure class = "product">
                        <a href = "ipad-pro-2020.html"><img src = "https://i.imgur.com/lEEMbrp.jpg" class = "product-img"alt = "similar product"> </a>
                        <figcaption> <a href = "ipad-pro-2020.html" class = "product-link"> <b> Ipad pro 2020 </b> </a>
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
                    <figure class = "product">
                        <a href = "iphone-12-pro.html"><img src = "https://i.imgur.com/wL3doZA.jpg" class = "product-img"alt = "similar product"> </a>
                        <figcaption> <a href = "iphone-12-pro.html" class = "product-link"> <b> Iphone 12 pro </b> </a>
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
                    <figure class = "product" id = "product_5">
                        <a href = "Macbook-pro.html"><img src = "https://i.imgur.com/vEYOqp1.jpg" class = "product-img"alt = "similar product"> </a>
                        <figcaption> <a href = "Macbook-pro.html" class = "product-link"> <b> Macbook pro </b> </a>
                            <div>
                                <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fas fa-star-half-alt checked"></span>
    <span> 4.8/5 235 reviews </span>
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
                    <a href="../../index.php"><img src="https://i.imgur.com/mE6aWmB.png" alt="logo" class="logo-img" /></a>
                </div>
                <!-- Quick Link -->
                <div class="grid-item inner-grid-container">
                    <div class="grid-item">
                        <a href="../about.php">About Us</a>
                    </div>
                    <div class="grid-item">
                        <a href="../fees.html">Fees</a>
                    </div>
                    <div class="grid-item"><a href="../browse-menu.html">Browse</a></div>
                    <div class="grid-item">
                        <a href="../term_of_services.php">Term of Service</a>
                    </div>
                    <div class="grid-item"><a href="../account/account.php">Account</a></div>
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
                </div>
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