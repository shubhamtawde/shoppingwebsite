<?php
include_once("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>About</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
   <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<?php
if(isset($_COOKIE["no_c"]))
{
   $t=$_COOKIE["no_c"];
}
else
{
   $t=0;
}
?>
   <!-- Header -->
   <header class="header1">
      <!-- Header desktop -->
      <div class="container-menu-header">
         <div class="topbar">
            <div class="topbar-social">
               <a href="https://www.facebook.com" class="topbar-social-item fa fa-facebook"></a>
               <a href="https://www.instagram.com" class="topbar-social-item fa fa-instagram"></a>
               <a href="https://www.pinterest.com" class="topbar-social-item fa fa-pinterest-p"></a>
               <a href="https://www.snapchat.com" class="topbar-social-item fa fa-snapchat-ghost"></a>
               <a href="https://www.youtube.com" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
               Free shipping for standard order over ₹1000
            </span>

            <div class="topbar-child2">
               <span class="topbar-email">
                  fashe@example.com
               </span>

               <div class="topbar-language rs1-select2">
                  <select class="selection-1" name="time">
                     <option>USD</option>
                     <option>EUR</option>
                     <option>INR</option>
                  </select>
               </div>
            </div>
         </div>

         <div class="wrap_header">
            <!-- Logo -->
            <a href="index.php" class="logo">
               <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
               <nav class="menu">
                  <ul class="main_menu">
                     <li>
                        <a href="index.php">Home</a>

                     </li>

                     <li>
                        <a href="product.php">Shop</a>
                     </li>

                     <li class="sale-noti">
                        <a href="product.php">Sale</a>
                     </li>

                     <li>
                        <a href="orders.php">Orders</a>
                     </li>

                     <li>
                        <a href="about.php">About</a>
                     </li>

                     <li>
                        <a href="contact.php">Contact</a>
                     </li>
                  </ul>
               </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
               <a href="./account.php" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
               </a>

               <span class="linedivide1"></span>

               <div class="header-wrapicon2">
                  <a href="cart.php"><img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON"></a>
                  <span class="header-icons-noti"><?php echo $t; ?></span>

                  <!-- Header cart -->
                  <!--<div class="header-cart header-dropdown">
                     <ul class="header-cart-wrapitem">
                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-01.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 White Shirt With Pleat Detail Back
                              </a>

                              <span class="header-cart-item-info">
                                 1 x ₹19.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-02.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Converse All Star Hi Black Canvas
                              </a>

                              <span class="header-cart-item-info">
                                 1 x ₹39.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-03.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Nixon Porter Leather Watch In Tan
                              </a>

                              <span class="header-cart-item-info">
                                 1 x ₹17.00
                              </span>
                           </div>
                        </li>
                     </ul>

                     <div class="header-cart-total">
                        Total: ₹75.00
                     </div>

                     <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">-->
                           <!-- Button -->
                           <!--<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              View Cart
                           </a>
                        </div>

                        <div class="header-cart-wrapbtn">-->
                           <!-- Button -->
                           <!--<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              Check Out
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>-->

      <!-- Header Mobile -->
      <div class="wrap_header_mobile">
         <!-- Logo moblie -->
         <a href="index.php" class="logo-mobile">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
         </a>

         <!-- Button show menu -->
         <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
               <a href="#" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
               </a>

               <span class="linedivide2"></span>

               <div class="header-wrapicon2">
                  <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                  <span class="header-icons-noti">0</span>

                  <!-- Header cart noti -->
                  <div class="header-cart header-dropdown">
                     <ul class="header-cart-wrapitem">
                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-01.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 White Shirt With Pleat Detail Back
                              </a>

                              <span class="header-cart-item-info">
                                 1 x ₹19.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-02.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Converse All Star Hi Black Canvas
                              </a>

                              <span class="header-cart-item-info">
                                 1 x ₹39.00
                              </span>
                           </div>
                        </li>

                        <li class="header-cart-item">
                           <div class="header-cart-item-img">
                              <img src="images/item-cart-03.jpg" alt="IMG">
                           </div>

                           <div class="header-cart-item-txt">
                              <a href="#" class="header-cart-item-name">
                                 Nixon Porter Leather Watch In Tan
                              </a>

                              <span class="header-cart-item-info">
                                 1 x ₹17.00
                              </span>
                           </div>
                        </li>
                     </ul>

                     <div class="header-cart-total">
                        Total: ₹75.00
                     </div>

                     <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              View Cart
                           </a>
                        </div>

                        <div class="header-cart-wrapbtn">
                           <!-- Button -->
                           <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              Check Out
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
               <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
               </span>
            </div>
         </div>
      </div>

      <!-- Menu Mobile -->
      <div class="wrap-side-menu" >
         <nav class="side-menu">
            <ul class="main-menu">
               <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                  <span class="topbar-child1">
                     Free shipping for standard order over ₹100
                  </span>
               </li>

               <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                  <div class="topbar-child2-mobile">
                     <span class="topbar-email">
                        fashe@example.com
                     </span>

                     <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                           <option>USD</option>
                           <option>EUR</option>
                        </select>
                     </div>
                  </div>
               </li>

               <li class="item-topbar-mobile p-l-10">
                  <div class="topbar-social-mobile">
                     <a href="#" class="topbar-social-item fa fa-facebook"></a>
                     <a href="#" class="topbar-social-item fa fa-instagram"></a>
                     <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                     <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                     <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                  </div>
               </li>

               <li class="item-menu-mobile">
                  <a href="index.php">Home</a>
                  <ul class="sub-menu">
                     <li><a href="index.php">Homepage V1</a></li>
                     <li><a href="home-02.php">Homepage V2</a></li>
                     <li><a href="home-03.php">Homepage V3</a></li>
                  </ul>
                  <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Shop</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="product.php">Sale</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="cart.php">Features</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="blog.php">Blog</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="about.php">About</a>
               </li>

               <li class="item-menu-mobile">
                  <a href="contact.php">Contact</a>
               </li>
            </ul>
         </nav>
      </div>
   </header>

   <!-- Title Page -->
   <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/about-us-kevnit-1800x450.png);">
      <h2 class="l-text2 t-center">
         About
      </h2>
   </section>

   <!-- content page -->
   <section class="bgwhite p-t-66 p-b-38">
      <div class="container">
         <div class="row">
            <div class="col-md-4 p-b-30">
               <div class="hov-img-zoom">
                  <img src="images/our-stoory.jpg" alt="IMG-ABOUT" style="margin-top: 18%;">
               </div>
            </div>

            <div class="col-md-8 p-b-30">
               <h3 class="m-text26 p-t-15 p-b-16">
                  Our story
               </h3>

               <p class="p-b-28">
                  Sometimes we require some commodities or some services that we may not get
                  at nearby available shops or is overpriced. Our “all online” service will connect
                  an user directly to a vendor who is selling the commodity that the user requires
                  and all available in just a single click. Our web application will allow users to
                  directly buy from a vendor who is providing those services/commodities at a
                  reasonable price. We will ask the user their choice of preferences; based on those
                  choices we will show the user vendor recommendations.
                  We will provide customized login for vendor/user login where a vendor can
                  list their commodity which they want to sell to the customer and user login for
                  a user to search for the commodities required by him/her. The vendors will
                  be approved by us whether the items which they are selling are legitimate or
                  not. If any vendor is not approved, he/she will not be able to sell through our
                  platform. The user can also filter vendors based on their quality as rated by
                  other users. Our Review and Rating System will help people distinguish vendors
                  having good service.
               </p>

               <div class="bo13 p-l-29 m-l-9 p-b-10">
                  <p class="p-b-11">
                     Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                  </p>

                  <span class="s-text7">
                     - Steve Job’s
                  </span>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- Footer -->
   <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
      <div class="flex-w p-b-90">
         <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
               GET IN TOUCH
            </h4>

            <div>
               <p class="s-text7 w-size27">
                  Any questions? Let us know in store at 3rd floor, Somaiya Vidyavihar, Mumbai or call us on (+91) 96 716 6879
               </p>

               <div class="flex-m p-t-30">
                  <a href="https://www.facebook.com" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                  <a href="https://www.instagram.com" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                  <a href="https://www.pinterest.com" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                  <a href="https://www.snapchat.com" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                  <a href="https://www.youtube.com" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
               </div>
            </div>
         </div>

         <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
               Categories
            </h4>

            <ul>
               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Accessories
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Handmade Products
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Footwear
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Menswear
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Womenswear
                  </a>
               </li>
            </ul>
         </div>

         <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
               Links
            </h4>

            <ul>
               <li class="p-b-9">
                  <a href="./index.php" class="s-text7">
                     Home
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./product.php" class="s-text7">
                     Shop
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Orders
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./about.php" class="s-text7">
                     About Us
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./contact.php" class="s-text7">
                     Contact Us
                  </a>
               </li>

            </ul>
         </div>

         <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
               Help
            </h4>

            <ul>
               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Track Order Status
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Returns
                  </a>
               </li>

               <li class="p-b-9">
                  <a href="./orders.php" class="s-text7">
                     Shipping
                  </a>
               </li>

            </ul>
         </div>

         <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
               Newsletter
            </h4>

            <form>
               <div class="effect1 w-size9">
                  <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                  <span class="effect1-line"></span>
               </div>

               <div class="w-size2 p-t-20">
                  <!-- Button -->
                  <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                     Subscribe
                  </button>
               </div>

            </form>
         </div>
      </div>

      <div class="t-center p-l-15 p-r-15">
         <a href="#">
            <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
         </a>

         <a href="#">
            <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
         </a>

         <div class="t-center s-text8 p-t-20">
            Copyright © 2018. All rights reserved.
         </div>
      </div>
   </footer>



   <!-- Back to top -->
   <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
         <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
   </div>

   <!-- Container Selection -->
   <div id="dropDownSelect1"></div>
   <div id="dropDownSelect2"></div>



<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
   <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
   <script type="text/javascript">
      $(".selection-1").select2({
         minimumResultsForSearch: 20,
         dropdownParent: $('#dropDownSelect1')
      });

      $(".selection-2").select2({
         minimumResultsForSearch: 20,
         dropdownParent: $('#dropDownSelect2')
      });
   </script>
<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>
