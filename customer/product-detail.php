<?php
include_once("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Detail</title>
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
$id1=$_GET["id"];
$imgp="images/" . $id1 . ".jpg";
$prod="SELECT * FROM posts_info WHERE id='$id1'";
$rel="SELECT * FROM posts_info";
$r=$conn->query($rel);
$exec=$conn->query($prod);
$n=$exec->num_rows;
$r1=$r->num_rows;
$no_p=0;
if(isset($_COOKIE["no_c"]))
{
   $t=$_COOKIE["no_c"];
}
else
{
   $t=0;
}
if($n>0)
{
   while($row = mysqli_fetch_assoc($exec))
   {
      $name=$row["p_name"];
      $desc=$row["p_desc"];
      $price=$row["p_price"];
      $add=$row["add_info"];
      $stock=$row["stock"];
      $color=$row["color"];
      $cat=$row["category"];
   }
}
?>
   <!-- Header -->
   <header class="header1">
      <!-- Header desktop -->
      <div class="container-menu-header">
         <div class="topbar">
            <div class="topbar-social">
               <a href="#" class="topbar-social-item fa fa-facebook"></a>
               <a href="#" class="topbar-social-item fa fa-instagram"></a>
               <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
               <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
               <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
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
                  <a href="./cart.php" class="header-wrapicon1 dis-block">
                  <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
               </a>
                  <span class="header-icons-noti"><?php echo $t; ?></span>

               </div>
            </div>
         </div>
      </div>

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

   <!-- breadcrumb -->
   <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
      <a href="index.php" class="s-text16">
         Home
         <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
      </a>

      <a href="product.php" class="s-text16">
         Shop
         <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
      </a>

      <span class="s-text17">
         <?php echo $name;?>
      </span>
   </div>

   <!-- Product Detail -->
   <div class="container bgwhite p-t-35 p-b-80">
      <div class="flex-w flex-sb">
         <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
               <div class="wrap-slick3-dots"></div>

               <div class="slick3">
                  <div class="item-slick3" data-thumb="<?php echo $imgp; ?>">
                     <div class="wrap-pic-w">
                        <img src="<?php echo $imgp;?>" alt="IMG-PRODUCT">
                     </div>
                  </div>

               </div>
            </div>
         </div>

         <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
               <?php echo $name;?>
            </h4>

            <span class="m-text17">
               ₹<?php echo $price; ?>
            </span>

            <p class="s-text8 p-t-10">
               <?php echo $desc; ?>
            </p>

            <!--  -->
            <div class="p-t-33 p-b-60">
               <div class="flex-m flex-w p-b-10">
                  <div class="s-text15 w-size15 t-center">
                     Size
                  </div>

                  <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                     <p style="padding: 10px 10px 10px 10px;">Size not Available</p>
                  </div>
               </div>

               <div class="flex-m flex-w">
                  <div class="s-text15 w-size15 t-center">
                     Color
                  </div>

                  <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                     <p style="padding: 10px 10px 10px 10px;">Color not Available</p>
                  </div>
               </div>

               <div class="flex-r-m flex-w p-t-10">
                  <div class="w-size16 flex-m flex-w">

<p>Every product is limited to 1 quantity per user</p>
                     <form action="add_to_cart.php">
                     <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                        <input type="hidden" name="id" value="<?php echo $id1; ?>">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                           Add to Cart
                        </button>
                     </div>
                  </form>
                  </div>
               </div>
            </div>

            <div class="p-b-45">
               <span class="s-text8 m-r-35">SKU: MUG-01</span>
               <span class="s-text8">Categories: <?php echo $cat;?></span>
            </div>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
               <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                  Description
                  <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                  <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
               </h5>

               <div class="dropdown-content dis-none p-t-15 p-b-23">
                  <p class="s-text8">
                     <?php echo $desc; ?>
                  </p>
               </div>
            </div>

            <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
               <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                  Additional information
                  <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                  <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
               </h5>

               <div class="dropdown-content dis-none p-t-15 p-b-23">
                  <p class="s-text8">
                     <?php echo $add; ?>
                  </p>
               </div>
            </div>

            <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
               <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                  Reviews (0)
                  <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                  <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
               </h5>

               <div class="dropdown-content dis-none p-t-15 p-b-23">
                  <p class="s-text8">
                     Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- Relate Product -->
   <section class="relateproduct bgwhite p-t-45 p-b-138">
      <div class="container">
         <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
               Related Products
            </h3>
         </div>

         <!-- Slide2 -->
         <div class="wrap-slick2">
            <div class="slick2">

               <?php
               if($r1>0)
               {
                  while($ro = mysqli_fetch_assoc($r))
                  {
                     $img="images/" . $ro["id"] . ".jpg";
                     $prod_url="product-detail.php?id=" . $ro["id"];
                     echo "<div class='item-slick2 p-l-15 p-r-15'> <!-- Block2 --> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelnew'> <img src='$img' alt='IMG-PRODUCT'>";
                     echo "<div class='block2-overlay trans-0-4'> <a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'> <i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i> <i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i> </a>";
                     echo "<div class='block2-btn-addcart w-size1 trans-0-4'> <!-- Button --> <button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'> Add to Cart </button> </div> </div> </div>";
                     echo "<div class='block2-txt p-t-20'> <a href='$prod_url' class='block2-name dis-block s-text3 p-b-5'>" . $ro["p_name"] . "</a> <span class='block2-price m-text6 p-r-5'> ₹ " . $ro["p_price"] . " </span> </div> </div> </div>";
                  }
               }?>
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
   <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
   <script type="text/javascript" src="js/slick-custom.js"></script>
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

      $('.btn-addcart-product-detail').each(function(){
         var nameProduct = $('.product-detail-name').html();
         $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
         });
      });
   </script>

<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>
