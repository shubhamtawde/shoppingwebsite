<?php
include_once("includes/config.php");
if(isset($_COOKIE["isLoggedIn"]))
header('Location: ./index.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0047)https://colorlib.com/etc/lf/Login_v1/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Login</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
   <link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v1/images/icons/favicon.ico">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./Login V1_files/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./Login V1_files/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./Login V1_files/animate.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./Login V1_files/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./Login V1_files/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="./Login V1_files/util.css">
   <link rel="stylesheet" type="text/css" href="./Login V1_files/main.css">
<!--===============================================================================================-->
</head>
<body>

   <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt="">
               <img src="./Login V1_files/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form">
               <span class="login100-form-title">
                  Member Login
               </span>

<?php
if(isset($_COOKIE["allPref"]))
{
  $pref=$_COOKIE["allPref"];
  $new=rtrim($pref,",");
}
$email=$_POST["email"];
$pass=$_POST["pass"];
$sql="SELECT * FROM user_info WHERE email='$email' AND pass='$pass'";
    //execute query
    $exec=$conn->query($sql);
        $n=$exec->num_rows;
    if($n > 0)
    {
        while($row = $exec->fetch_assoc()) {
        $id=$row["c_id"];
        }
        $ins="UPDATE user_info SET pref='$new' WHERE email='$email'";
        $tr=$conn->query($ins);
        $cookie_name = "isLoggedIn";
        $cookie_value = "1";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        setcookie("email", $email, time() + (86400 * 30), "/");
        setcookie("id", $id, time() + (86400 * 30), "/");
        header('Location: ./index.php');
    }
    else
    {
        echo "Error: Invalid Credentials";
    }
?>
            </form>
         </div>
      </div>
   </div>




<!--===============================================================================================-->
   <script type="text/javascript" async="" src="./Login V1_files/analytics.js.download"></script><script src="./Login V1_files/jquery-3.2.1.min.js.download"></script>
<!--===============================================================================================-->
   <script src="./Login V1_files/popper.js.download"></script>
   <script src="./Login V1_files/bootstrap.min.js.download"></script>
<!--===============================================================================================-->
   <script src="./Login V1_files/select2.min.js.download"></script>
<!--===============================================================================================-->
   <script src="./Login V1_files/tilt.jquery.min.js.download"></script>
   <script>
      $('.js-tilt').tilt({
         scale: 1.1
      })
   </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./Login V1_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
   <script src="./Login V1_files/main.js.download"></script>



</body></html>