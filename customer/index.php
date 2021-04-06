<?php
include_once("includes/config.php");
if(!isset($_COOKIE["setPref"]))
{
   header('Location: ./pref.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Home</title>
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
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
<?php
$id1=$_GET["id"];
$a=0;
$no_p=$_COOKIE["no_p"];
if(isset($_COOKIE["Pref1"]))
{
   $pref1=$_COOKIE['Pref1'];
   $sel[$a++]=$pref1;
}
if(isset($_COOKIE["Pref2"]))
{
   $pref2=$_COOKIE['Pref2'];
   $sel[$a++]=$pref2;
}
if(isset($_COOKIE["Pref3"]))
{
   $pref3=$_COOKIE['Pref3'];
   $sel[$a++]=$pref3;
}
if(isset($_COOKIE["Pref4"]))
{
   $pref4=$_COOKIE['Pref4'];
   $sel[$a++]=$pref4;
}
if(isset($_COOKIE["Pref5"]))
{
   $pref5=$_COOKIE['Pref5'];
   $sel[$a++]=$pref5;
}
if(isset($_COOKIE["no_c"]))
{
   $t=$_COOKIE["no_c"];
}
else
{
   $t=0;
}

$no_p=0;
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
                  help@fashe.com
               </span>

               <div class="topbar-language rs1-select2">
                  <select class="selection-1" name="time">
                     <option>INR</option>
                     <option>USD</option>
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
                                 1 x $19.00
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
                                 1 x $39.00
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
                                 1 x $17.00
                              </span>
                           </div>
                        </li>
                     </ul>

                     <div class="header-cart-total">
                        Total: $75.00
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
                     Free shipping for standard order over $100
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

   <!-- Slide1 -->
   <section class="slide1">
      <div class="wrap-slick1">
         <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(images/acc2.jpg);">
               <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170"><br><br>
                  <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                     Accessories Collection 2018
                  </span>
                  <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                     New arrivals
                  </h2>

                  <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                     <!-- Button -->
                     <a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                        Shop Now
                     </a>
                  </div>
               </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(images/womenwear.jpg);">
               <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                  <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
                     Women Collection 2018
                  </span>

                  <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                     New arrivals
                  </h2>

                  <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                     <!-- Button -->
                     <a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                        Shop Now
                     </a>
                  </div>
               </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(images/menswear.jpg);">
               <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                  <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                     Mens Collection 2018
                  </span>

                  <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                     New arrivals
                  </h2>

                  <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                     <!-- Button -->
                     <a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                        Shop Now
                     </a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>

   <!-- Banner -->
   <section class="banner bgwhite p-t-40 p-b-40">
      <div class="container">
         <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
               <!-- block1 -->
               <div class="block1 hov-img-zoom pos-relative m-b-30">
                  <img src="images/acc.jpg" alt="IMG-BENNER">

                  <div class="block1-wrapbtn w-size2">
                     <!-- Button -->
                     <a href="./product.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                        Accessories
                     </a>
                  </div>
               </div>

               <!-- block1 -->
               <div class="block1 hov-img-zoom pos-relative m-b-30">
                  <img src="images/hand.jpg" alt="IMG-BENNER">

                  <div class="block1-wrapbtn w-size2">
                     <!-- Button -->
                     <a href="./product.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                        Handmade
                     </a>
                  </div>
               </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
               <!-- block1 -->
               <div class="block1 hov-img-zoom pos-relative m-b-30">
                  <img src="images/foot.jpg" alt="IMG-BENNER">

                  <div class="block1-wrapbtn w-size2">
                     <!-- Button -->
                     <a href="./product.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                        Footwear
                     </a>
                  </div>
               </div>

               <!-- block1 -->
               <div class="block1 hov-img-zoom pos-relative m-b-30">
                  <img src="images/mens.jpg" alt="IMG-BENNER">

                  <div class="block1-wrapbtn w-size2">
                     <!-- Button -->
                     <a href="./product.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                        Menswear
                     </a>
                  </div>
               </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
               <!-- block1 -->
               <div class="block1 hov-img-zoom pos-relative m-b-30">
                  <img src="images/download.jpg" alt="IMG-BENNER">

                  <div class="block1-wrapbtn w-size2">
                     <!-- Button -->
                     <a href="./product.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                        Womenswear
                     </a>
                  </div>
               </div>

               <!-- block2 -->
               <div class="block2 wrap-pic-w pos-relative m-b-30">
                  <img src="images/icons/bg-01.jpg" alt="IMG">

                  <div class="block2-content sizefull ab-t-l flex-col-c-m">
                     <h4 class="m-text4 t-center w-size3 p-b-8">
                        Sign up & get 20% off
                     </h4>

                     <p class="t-center w-size4">
                        Be the frist to know about the latest fashion news and get exclu-sive offers
                     </p>

                     <div class="w-size2 p-t-25">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                           Sign Up
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- New Product -->
   <section class="newproduct bgwhite p-t-45 p-b-105">
      <div class="container">
         <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
               Featured Products
            </h3>
         </div>

         <!-- Slide2 -->
         <div class="wrap-slick2">
            <div class="slick2">

               <?php
                  $b=0;
                  foreach ($sel as $value) {
                     $sql="SELECT * FROM posts_info WHERE category='$value'";
                     # code...
                     $exec=$conn->query($sql);
                     $n=$exec->num_rows;
                     if($n>0)
                     {
                  while($ro = mysqli_fetch_assoc($exec))
                  {
                     $img="images/" . $ro["id"] . ".jpg";
                     $prod_url="product-detail.php?id=" . $ro["id"];
                     echo "<div class='item-slick2 p-l-15 p-r-15'> <!-- Block2 --> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelnew'> <img src='$img' alt='IMG-PRODUCT'>";
                     echo "<div class='block2-overlay trans-0-4'> <a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'> <i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i> <i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i> </a>";
                     echo "<div class='block2-btn-addcart w-size1 trans-0-4'> <!-- Button --> <button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'> Add to Cart </button> </div> </div> </div>";
                     echo "<div class='block2-txt p-t-20'> <a href='$prod_url' class='block2-name dis-block s-text3 p-b-5'>" . $ro["p_name"] . "</a> <span class='block2-price m-text6 p-r-5'> ₹ " . $ro["p_price"] . " </span> </div> </div> </div>";
                  }
               }
               }
               ?>
            </div>
         </div>

      </div>
   </section>


   <!-- Shipping -->
   <section class="shipping bgwhite p-t-62 p-b-46">
      <div class="flex-w p-l-15 p-r-15">
         <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
               Free Delivery In India
            </h4>
         </div>

         <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="m-text12 t-center">
               30 Days Return
            </h4>

            <span class="s-text11 t-center">
               Simply return it within 30 days for an exchange.
            </span>
         </div>

         <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
               Store Opening
            </h4>

            <span class="s-text11 t-center">
               Shop open from Monday to Sunday
            </span>
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

   <!-- Container Selection1 -->
   <div id="dropDownSelect1"></div>



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
   </script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
   <script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
   <script type="text/javascript">
      $('.block2-btn-addcart').each(function(){
         var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
         $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
         });
      });

      $('.block2-btn-addwishlist').each(function(){
         var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
         $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
         });
      });
   </script>

<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>
